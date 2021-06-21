<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Validator;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::orderBy('id','DESC')->get();
        
        return  view('admin.pasien.index', compact('data'));
    }

    public function create()
    {   
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'no_rm'  => 'required|unique:pasien',
            'nik'    => 'required',
            'nama'   => 'required',
            'telp'   => 'required',
            'alamat' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        

        $data = new Pasien();
        $data->no_rm  = $request->no_rm;
        $data->nik    = $request->nik;
        $data->nama   = $request->nama;
        $data->telp   = $request->telp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect()->route('pasien')->with('success', 'Berhasil tambah data');


    }

    public function edit($id)
    {   
        $data = Pasien::find($id); 
    
        return view('admin.pasien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $input     = $request->except('_token');
        $validator = Validator::make($input, [
            'no_rm'  => 'required',
            'nik'    => 'required',
            'nama'   => 'required',
            'telp'   => 'required',
            'alamat' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if(Pasien::where('no_rm', $request->no_rm)->first())
        {
            return redirect()->back()->with('danger','The no rm has already been taken.');
        }

        $data = Pasien::findOrFail($id);
        $data->no_rm  = $request->no_rm;
        $data->nik    = $request->nik;
        $data->nama   = $request->nama;
        $data->telp   = $request->telp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect()->route('pasien')->with('success', 'Berhasil update data');

    }

    public function destroy($id)
    {
        $data = Pasien::find($id);

        $data->delete();

        return redirect()->route('pasien')->with('success', 'Berhasil hapus data');

    }
    
   
}
