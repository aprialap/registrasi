<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use App\Models\JadwalPraktek;
use App\Models\Dokter;
use Validator;

class JadwalPraktekController extends Controller
{
    public function index()
    {   
        $data = JadwalPraktek::get();
     
        return  view('admin.jadwal-praktek.index',compact('data'));
    }

    public function create()
    {   
        $poli = Poli::get();
        $dokter = Dokter::get();

        return view('admin.jadwal-praktek.create', compact('poli','dokter'));
    }

    public function store(Request $request)
    {
        // return $request;
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'poli'   => 'required',
            'dokter' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }


        $data = new JadwalPraktek();
        $data->poli_id         = $request->poli;
        $data->dokter_id        = $request->dokter;
        $data->keterangan      = $request->keterangan;
        $data->status        = $request->status;
        $data->save();

        return redirect()->route('jadwal-praktek')->with('success', 'Berhasil tambah jadwal praktek');


    }

    public function edit($id)
    {   
        $data = JadwalPraktek::find($id); 
        $poli = Poli::get();
        $dokter = Dokter::get();

        return view('admin.jadwal-praktek.edit', compact('data','poli','dokter'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'poli'         => 'required',
            'dokter'       => 'required',
            'status'      => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }


        $data = JadwalPraktek::findOrFail($id);
        $data->poli_id         = $request->poli;
        $data->dokter_id        = $request->dokter;
        $data->keterangan      = $request->keterangan;
        $data->status        = $request->status;
        $data->save();

        return redirect()->route('jadwal-praktek')->with('success', 'Berhasil update jadwal praktek');

    }

    public function destroy($id)
    {
        $data = JadwalPraktek::find($id);

        $data->delete();

        return redirect()->route('jadwal-praktek')->with('success', 'Berhasil hapus jadwal praktek');

    }
}
