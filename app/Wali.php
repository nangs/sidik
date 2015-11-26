<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'wali';

    protected $fillable = [
    	'nama', 'alamat', 'phone', 'email', 'jns_kelamin', 'hub_keluarga'
    ];

    public function siswas()
    {
    	return $this->hasMany('App\Siswa');
    }
}
