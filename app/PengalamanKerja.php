<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = 'pengalaman_kerja';

    protected $fillable = [
    	'karyawan_id',
    	'institusi',
    	'jabatan',
    	'tugas',
    	'dari',
    	'sampai'
    ];

    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan');
    }

    public function durasi()
    {
        $dari = new \DateTime($this->dari);
        $sampai = new \DateTime($this->sampai);
        $interval = $sampai->diff($dari);

        return $interval->format('%y tahun %m bulan %d hari');
    }
}
