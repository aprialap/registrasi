<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Validator;

class DokterController extends Controller
{
    public function index()
    {
        $data = Dokter::orderBy('id','DESC')->get();
        
        return  view('admin.dokter.index', compact('data'));
    }

    public function create()
    {   
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'nama'      => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = new Dokter();
        $data->nama        = $request->nama;
        $data->save();

        return redirect()->route('dokter')->with('success', 'Berhasil tambah data');


    }

    public function edit($id)
    {   
        $data = Dokter::find($id); 
    
        return view('admin.dokter.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'nama'      => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }


        $data = Dokter::findOrFail($id);
        $data->nama        = $request->nama;
        $data->save();

        return redirect()->route('dokter')->with('success', 'Berhasil update data');

    }

    public function destroy($id)
    {
        $data = Dokter::find($id);

        $data->delete();

        return redirect()->route('dokter')->with('success', 'Berhasil hapus data');

    }
    


}
