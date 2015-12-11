<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenCalonSiswa extends Model
{
    protected $table = 'dokumen_calon_siswa';

    protected $fillable = ['calon_siswa_id', 'nama', 'file'];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }
}
