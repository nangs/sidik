<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeluargaKaryawan extends Model
{
    protected $table = 'keluarga_karyawan';

    protected $fillable = [
        'karyawan_id', 
        'nama', 
        'hub_keluarga', 
        'jns_kelamin', 
        'status',
        'tempat_lahir',
        'tgl_lahir'
    ];

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

    public function umur()
    {
        $now = new \DateTime("now");
        $tgl_lahir = new \DateTime($this->tgl_lahir);
        $interval = $tgl_lahir->diff($now);

        return $interval->format('%y tahun %m bulan %d hari');
    }
}
