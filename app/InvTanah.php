<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvTanah extends Model
{
    protected $table = 'inv_tanah';

    protected $fillable = [
    	'kode', 'nama', 'luas_total', 'luas_bangunan', 'luas_kosong',
    	'lokasi', 'batas_utara', 'batas_selatan', 'batas_barat', 'batas_timur',
    	'asal_perolehan', 'asal_dana', 'sertifikat_hak', 'sertifikat_tgl', 'sertifikat_nomor',
    	'njop', 'tgl_dapat', 'nilai_asset'
    ];

    public function bangunans()
    {
    	return $this->hasMany('App\InvBangunan', 'tanah_id');
    }
}
