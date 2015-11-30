<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatMengajar extends Model
{
    protected $table = 'riwayat_mengajar';

    protected $fillable = [
    	'karyawan_id', 
    	'mapel', 
    	'tingkat', 
    	'institusi', 
    	'dari', 
    	'sampai', 
    	'durasi', 
    	'keterangan'
    ];

    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan');
    }
}
