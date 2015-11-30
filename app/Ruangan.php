<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';

    protected $fillable = [
    	'bangunan_id', 'penanggungjawab_id', 'kode', 'nama',
    	'luas', 'kapasitas', 'penggunaan', 'kondisi'
    ];

    public function bangunan()
    {
    	return $this->belongsTo('App\InvBangunan');
    }

    public function penanggungjawab()
    {
    	return $this->belongsTo('App\Karyawan');
    }
}
