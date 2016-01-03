<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WawancaraOrangTuaCalonSantri extends Model
{
    protected $table = 'wawancara_orangtua_calon_santri';

    protected $fillable = [
        'siswa_id', 'hasil_wawancara', 'catatan'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\CalonSiswa', 'siswa_id');
    }
}
