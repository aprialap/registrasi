<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendaftaran extends Model
{
    public $incrementing = false;

    public $table = 'riwayat_pendaftaran';
    
    protected $dates = ['created_at','updated_at'];

    public $fillable =[
        'no_rm',
        'poli_id',
        'dokter_id',
        'tanggal_pendaftaran'
    ];


    public function poli()
    {
        return $this->belongsTo('App\Models\Poli', 'poli_id','id');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter', 'dokter_id','id');
    }

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien', 'no_rm','no_rm');
    }

}
