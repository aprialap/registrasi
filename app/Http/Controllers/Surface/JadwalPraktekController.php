<?php

namespace App\Http\Controllers\Surface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JadwalPraktek;
class JadwalPraktekController extends Controller
{
    public function index()
    {   
        $data = JadwalPraktek::orderBy('poli_id', 'ASC')->get();
        return view('surface.status-dokter', compact('data'));
    }
}
