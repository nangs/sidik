<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalSekolah extends Model
{
    protected $table = 'asal_sekolah';

    protected $fillable = [
    	'nama', 'nss', 'npsn', 'kecamatan', 'kota', 'alamat', 'propinsi'
    ];

    public function calonSiswa()
    {
    	return $this->hasMany('App\CalonSiswa');
    }
}
