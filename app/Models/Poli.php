<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    public $incrementing = false;

    public $table = 'poli';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'nama',
    ];
}
