<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiWawancaraOrangTuaCalonSantri extends Model
{
    protected $table = 'nilai_wawancara_orangtua_calon_santri';

    protected $fillable = [
        'siswa_id', 'pertanyaan_id', 'nilai', 'jawaban_id'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'siswa_id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\FormWawancaraOrangTuaCalonSantri', 'pertanyaan_id');
    }

    public function jawaban()
    {
        return $this->belongsTo('App\JawabanWawancaraOrangtuaCalonSantri', 'jawaban_id');
    }
}
