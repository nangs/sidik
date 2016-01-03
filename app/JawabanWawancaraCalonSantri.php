<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanWawancaraCalonSantri extends Model
{
    protected $table = 'jawaban_wawancara_calon_santri';

    protected $fillable = ['pertanyaan_id', 'jawaban', 'nilai'];

    protected $appends = ['jwb'];

    public function getJwbAttribute()
    {
        return '['.$this->nilai.'] '.$this->jawaban;
    }
}
