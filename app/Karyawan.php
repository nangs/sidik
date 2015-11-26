<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $fillable = [
    	'nik',
    	'nama',
    	'kota_asal',
    	'alamat',
    	'phone',
    	'email',
    	'jns_kelamin',
    	'tempat_lahir',
    	'tgl_lahir',
    ];
}
