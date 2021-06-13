<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $incrementing = false;

    public $table = 'pasien';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'no_rm',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'pekerjaan',
        'pendidikan',
        'telp',
        'status',
        'ibu_kandung',
    ];
}
