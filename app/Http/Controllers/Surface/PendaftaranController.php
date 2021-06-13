<?php

namespace App\Http\Controllers\Surface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Poli;
use App\Models\Pasien;
use App\Models\RiwayatPendaftaran;
use Validator;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {       
        $poli = Poli::get();
        $pasien = collect([]);
        $q = $request->q;    
        if(isset($q)){
          if(!Pasien::where('no_rm', $q)->first()){
            return redirect()->back()->with('warning', 'Maaf No NRM Tidak ditemukan.');
          }

          $pasien = Pasien::when($q, function($query, $q) {
            $query->where('no_rm', 'like', '%'.$q.'%');
            })->first();
        }
        
        return view('surface.pendaftaran',compact('poli','pasien','q'));
    }

    public function store(Request $request)
    {  
      $input     = $request->except('_token');
      $validator = Validator::make($input, [
          'rm'            => 'required',
          'poli_tujuan'   => 'required',
          'untuk_tanggal' => 'required',
      ]);

      if($validator->fails())
      {
          return redirect()->back()->withInput()->withErrors($validator);
      }

      $data = new RiwayatPendaftaran();
      $data->no_rm               = $request->rm;
      $data->poli_id             = $request->poli_tujuan;
      $data->tanggal_pendaftaran = $request->untuk_tanggal;
      $data->no_antrian          = $this->generate_no_antrian($request->untuk_tanggal);
      $data->save();

      return redirect()->route('pendaftaran')->with('success', 'Berhasil Mendaftar');

    }

    public function informasiPendaftaran(Request $request)
    { 
      $data = collect([]);
      $q    = $request->q;

       if (isset($q)) {
        $data = RiwayatPendaftaran::with('poli:id,nama','dokter:id,nama','pasien:no_rm,nama,alamat')
                ->when($q, function($query, $q) {
                $query->where('no_rm', 'like', '%'.$q.'%');
                })->orderBy('tanggal_pendaftaran', 'DESC')->get();
       }

       return view('surface.cek-pendaftaran',compact('data', 'q'));

    }

    public function generate_no_antrian($tanggal)
    {
       $data = RiwayatPendaftaran::where('tanggal_pendaftaran', $tanggal)->orderBy('id','DESC')->first();

       if($data){
           $lastCode = intval($data->no_antrian);
           $nextCode = $lastCode+1;
          $nextCode = sprintf('%04s', $nextCode);
           $code     = $nextCode;
       }else{
           $code = "0001";
       }
      
       return $code;

    }
}
