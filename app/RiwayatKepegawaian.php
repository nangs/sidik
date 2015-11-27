<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatKepegawaian extends Model
{
    protected $table = 'riwayat_kepegawaian';

    protected $fillable = [
    	'karyawan_id',
    	'jenis',
    	'nomor_sk',
    	'tanggal_sk',
    	'tmt',
    	'masa_kerja',
    	'golongan',
    	'gapok',
    	'tempat',
    	'jabatan'
    ];

    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan');
    }

    public static function jenisList()
    {
    	return [
    		'CPNS'				=> 'CPNS',
    		'PNS'				=> 'PNS',
    		'Kenaikan Pangkat'	=> 'Kenaikan Pangkat',
    		'Gaji Berkala'		=> 'Gaji Berkala',
    		'Mutasi Masuk'		=> 'Mutasi Masuk',
    		'Mutasi Keluar'		=> 'Mutasi Keluar',
    		'Lainnya'			=> 'Lainnya'
    	];
    }

}
