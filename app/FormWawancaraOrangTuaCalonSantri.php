<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormWawancaraOrangTuaCalonSantri extends Model
{
    protected $table = 'form_wawancara_orangtua_calon_santri';

    protected $fillable = [
        'indikator_variable',
        'pertanyaan'
    ];

    public function jawaban()
    {
        return $this->hasMany('App\JawabanWawancaraOrangtuaCalonSantri', 'pertanyaan_id');
    }
}
