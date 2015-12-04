<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamPelajaran extends Model
{
    protected $table = 'jam_pelajaran';

    protected $fillable = ['tingkat_id', 'jam', 'dari', 'sampai', 'jenjang_id'];

    public function tingkat()
    {
    	return $this->belongsTo('App\Tingkat');
    }

    public function jadwalPelajarans()
    {
        return $this->hasMany('App\JadwalPelajaran', 'jam_id');
    }

    public function jenjang()
    {
    	return $this->belongsTo('App\Jenjang');
    }
}
