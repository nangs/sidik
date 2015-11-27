<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeluargaKaryawan extends Model
{
    protected $table = 'keluarga_karyawan';

    protected $fillable = ['karyawan_id', 'nama', 'hub_keluarga', 'jns_kelamin', 'status'];

    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan');
    }

    public static function listHubungan()
    {
    	return [
    		'Ayah'		=> 'Ayah',
    		'Ibu'		=> 'Ibu',
    		'Suami'		=> 'Suami',
    		'Istri'		=> 'Istri',
    		'Anak'		=> 'Anak',
    	];
    }
}
