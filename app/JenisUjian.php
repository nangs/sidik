<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisUjian extends Model
{
    protected $table = 'jenis_ujian';

    protected $fillable = ['kode', 'nama', 'bobot'];

    public $timestamps = false;
}
