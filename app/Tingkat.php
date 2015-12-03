<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    protected $table = 'tingkat';

    protected $fillable = ['nama', 'keterangan'];

    public function getNamaAttribute($value)
    {
    	return $value;
    }

    public function jamPelajarans()
    {
    	return $this->hasMany('App\JamPelajaran');
    }

    public function jadwalPelajarans()
    {
        return $this->hasMany('App\JadwalPelajaran');
    }
}
