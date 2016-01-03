<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormWawancaraCalonSantri extends Model
{
    protected $table = 'form_wawancara_calon_santri';

    protected $fillable = [
        'indikator_variable',
        'sub_indikator_variable',
        'pertanyaan'
    ];

    public function jawaban()
    {
        return $this->hasMany('App\JawabanWawancaraCalonSantri', 'pertanyaan_id');
    }
}
