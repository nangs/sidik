<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ta extends Model
{
    protected $table = 'ta';

    protected $fillable = ['periode', 'start', 'end', 'active'];

    public function tagihans()
    {
        return $this->hasMany('App\Tagihan');
    }

    public function kalenderAkademiks()
    {
        return $this->hasMany('App\KalenderAkademik');
    }

    public function jadwalPelajarans()
    {
        return $this->hasMany('App\JadwalPelajaran');
    }
}
