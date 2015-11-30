<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan';

    protected $fillable = [
        'karyawan_id', 
    	'siswa_id', 
    	'jenjang', 
    	'institusi', 
    	'kota', 
    	'fakultas', 
    	'jurusan', 
        'masuk',
        'lulus',
    	'keterangan',
        'formal',
        'lama'
    ];

    public static function listJenjang()
    {
    	return [
	    	'SD' => 'SD', 
	    	'SMP' => 'SMP', 
	    	'SMA' => 'SMA', 
	    	'D1' => 'D1', 
	    	'D2' => 'D2', 
	    	'D3' => 'D3', 
	    	'S1' => 'S1', 
	    	'S2' => 'S2', 
	    	'S3' => 'S3'
	    ];
    }

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }

    public function siswa()
    {
    	return $this->belongsTo('App\Karyawan');
    }
}
