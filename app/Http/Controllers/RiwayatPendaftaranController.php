<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RiwayatPendaftaran;
use App\Models\Dokter;
use Validator;

class RiwayatPendaftaranController extends Controller
{
    public function index()
    {
        $data = RiwayatPendaftaran::with('poli:id,nama','dokter:id,nama','pasien:no_rm,nama,alamat')->orderBy('id','DESC')->get();
        $dokter = Dokter::select('id','nama')->orderBy('nama')->get();
        return  view('admin.riwayat-pendaftaran.index', compact('data','dokter'));
    }

    public function getReservasi(Request $request)
    {
    
        $data  = RiwayatPendaftaran::findOrFail($request->id);
        $data->status = $request->status;
        $data->dokter_id = $request->dokter;
        $data->save();

        return response()->json([
            'status' => 'success',
            'data'   => RiwayatPendaftaran::find($request->id)
        ]);
    }
}
