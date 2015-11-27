<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    	'nis', 'nisn',
    	'nama', 'panggilan',
    	'jns_kelamin',
        'foto',
        'wn', 'suku', 'bahasa',
    	'tempat_lahir', 'tgl_lahir',
        'status_anak', 'anak_ke', 'sdr_kandung', 'sdr_angkat', 'sdr_tiri',
        'alamat', 'alamat_kos', 'tinggal_dengan', 'phone', 'jarak_ke_sekolah', 'transportasi',
        'gol_darah', 'tinggi', 'berat', 'riwayat_penyakit', 'kelainan', 'hobby',
    	'wali_id', 'active'
    ];

    public function wali()
    {
    	return $this->belongsTo('App\Wali');
    }
}
