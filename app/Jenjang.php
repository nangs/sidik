<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    protected $table = 'jenjang';

    protected $fillable = ['nama', 'keterangan'];

    public function tingkats()
    {
    	return $this->hasMany('App\Ta');
    }

    public function kelass()
    {
    	return $this->hasMany('App\Kelas');
    }

    public function jadwals()
    {
    	return $this->hasMany('App\JadwalPelajaran');
    }
}
