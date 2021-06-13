<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public $incrementing = false;

    public $table = 'dokter';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'nama',
    ];
}
