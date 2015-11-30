<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{
    protected $table = 'kalender_akademik';

    protected $fillable = ['ta_id', 'dari', 'sampai', 'kegiatan', 'warna'];

    public function ta()
    {
    	return $this->belongsTo('App\Ta');
    }
}
