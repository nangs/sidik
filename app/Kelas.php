<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['ta_id', 'tingkat_id', 'nama', 'wali_id', 'ruang_id'];

    public function ta()
    {
    	return $this->belongsTo('App\Ta');
    }

    public function tingkat()
    {
    	return $this->belongsTo('App\Tingkat');
    }

    public function wali()
    {
        return $this->belongsTo('App\Karyawan', 'wali_id');
    }

    public function ruang()
    {
    	return $this->belongsTo('App\Ruangan', 'ruang_id');
    }

    public function siswas()
    {
        return $this->belongsToMany('App\Siswa', 'kelas_siswa', 'kelas_id', 'siswa_id');
    }

    public function jadwalPelajarans()
    {
        return $this->hasMany('App\JadwalPelajaran');
    }
}
