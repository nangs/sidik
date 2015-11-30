<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $table = 'bagian';

    protected $fillable = ['kode', 'nama'];

    public function jabatans()
    {
    	return $this->hasMany('App\Jabatan');
    }
}
