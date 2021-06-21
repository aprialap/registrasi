<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use Validator;

class PoliController extends Controller
{
    public function index()
    {
        $data = Poli::orderBy('id','DESC')->get();
        
        return  view('admin.poli.index', compact('data'));
    }

    public function create()
    {   
        return view('admin.poli.create');
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

        $data = new Poli();
        $data->nama        = $request->nama;
        $data->save();

        return redirect()->route('poli')->with('success', 'Berhasil tambah data');


    }

    public function edit($id)
    {   
        $data = Poli::find($id); 
    
        return view('admin.poli.edit', compact('data'));
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


        $data = Poli::findOrFail($id);
        $data->nama        = $request->nama;
        $data->save();

        return redirect()->route('poli')->with('success', 'Berhasil update data');

    }

    public function destroy($id)
    {
        $data = Poli::find($id);

        $data->delete();

        return redirect()->route('poli')->with('success', 'Berhasil hapus data');

    }
    
}
