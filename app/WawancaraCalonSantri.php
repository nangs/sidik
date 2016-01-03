<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WawancaraCalonSantri extends Model
{
    protected $table = 'wawancara_calon_santri';

    protected $fillable = [
        'siswa_id', 'hasil_wawancara', 'catatan'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'siswa_id');
    }
}
