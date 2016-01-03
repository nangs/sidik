<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiWawancaraCalonSantri extends Model
{
    protected $table = 'nilai_wawancara_calon_santri';

    protected $fillable = [
        'siswa_id', 'pertanyaan_id', 'nilai', 'jawaban_id'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'siswa_id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\FormWawancaraCalonSantri', 'pertanyaan_id');
    }

    public function jawaban()
    {
        return $this->belongsTo('App\JawabanWawancaraCalonSantri', 'jawaban_id');
    }
}
