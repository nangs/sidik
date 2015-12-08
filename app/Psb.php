<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psb extends Model
{
    protected $table = 'psb';

    protected $fillable = [
    	'nomor_pendaftaran',
    	'tanggal_pendaftaran',
    	'jenjang_id',
    	'tingkat_id',
    	'step',
    	'status',
    	'keterangan'
    ];

    public function jenjang()
    {
    	return $this->belongsTo('App\Jenjang');
    }

    public function tingkat()
    {
    	return $this->belongsTo('App\Tingkat');
    }

    public function calon()
    {
    	return $this->hasOne('App\CalonSiswa');
    }
}
