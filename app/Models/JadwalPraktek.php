<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPraktek extends Model
{
    public $incrementing = false;

    public $table = 'jadwal_dokter';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'poli_id',
        'dokter_id',
        'keterangan',
        'status'
    ];

     public function poli()
    {
        return $this->belongsTo('App\Models\Poli', 'poli_id','id');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'dokter_id','id');
    }
}
