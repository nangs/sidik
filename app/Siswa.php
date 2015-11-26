<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    	'nis',
    	'nama',
    	'jns_kelamin',
    	'tempat_lahir',
    	'tgl_lahir',
    	'wali_id'
    ];

    public function wali()
    {
    	return $this->belongsTo('App\Wali');
    }
}
