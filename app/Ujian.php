<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';

    protected $fillable = ['ta_id', 'jenjang_id', 'tingkat_id', 'jenis_id', 'mapel_id', 'tanggal', 'dari', 'sampai'];

    public function ta()
    {
    	return $this->belongsTo('App\Ta');
    }

    public function jenjang()
    {
    	return $this->belongsTo('App\Jenjang');
    }

    public function tingkat()
    {
    	return $this->belongsTo('App\Tingkat');
    }

    public function jenis()
    {
    	return $this->belongsTo('App\JenisUjian');
    }

    public function mapel()
    {
    	return $this->belongsTo('App\Mapel');
    }

    public function ruanganUjians()
    {
    	return $this->hasMany('App\RuanganUjian', 'ujian_id');
    }

    public function pesertaUjians()
    {
    	return $this->hasMany('App\PesertaUjian');
    }

    public function nilaiUjians()
    {
    	return $this->hasMany('App\NilaiUjian');
    }
}
