<?php

namespace App\Http\Controllers\Surface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Validator;

class PasienController extends Controller
{   
    public function index()
    {
        return view('surface.daftar-baru');
    }

    public function store(Request $request)
    {   
      
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'nik'         => 'required',
            'nama'        => 'required',
            'alamat'      => 'required',
            'telp'        => 'required',
            'ibu_kandung' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = new Pasien();
        $data->nik         = $request->nik;
        $data->nama        = $request->nama;
        $data->alamat      = $request->alamat;
        $data->telp        = $request->telp;
        $data->ibu_kandung = $request->ibu_kandung;
        $data->save();

        return redirect()->route('daftar-baru')->with('success', 'Berhasil Registrasi Pasien, silahkan Konfirmasi Pihak Rumah Sakit untuk mendapatkan NO RM Anda.');
    }
}
