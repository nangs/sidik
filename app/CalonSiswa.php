<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    protected $table = 'calon_siswa';

    protected $fillable = [
    	'nis', 
    	'nisn', 
    	'nik', 
    	'nama', 
    	'jenis_kelamin',
        'tempat_lahir', 
        'tanggal_lahir',
        'tinggi_badan', 
        'berat_badan', 
        'berkebutuhan_khusus', 
        'jumlah_saudara',
        'asal_sekolah_id',
        'psb_id'
    ];

    public function psb()
    {
    	return $this->belongsTo('App\Psb');
    }

    public function asalSekolah()
    {
    	return $this->belongsTo('App\AsalSekolah');
    }

    public function beasiswa()
    {
    	return $this->hasMany('App\BeasiswaCalonSiswa');
    }

    public function prestasi()
    {
    	return $this->hasMany('App\PrestasiCalonSiswa');
    }

    public function orangTua()
    {
    	return $this->hasMany('App\OrangTuaCalonSiswa');
    }

    public function alamat()
    {
    	return $this->hasOne('App\AlamatCalonSiswa');
    }

    public function dokumen()
    {
    	return $this->hasMany('App\DokumenCalonSiswa');
    }

    public static function genderList()
    {
    	return [0 => 'Perempuan', 1 => 'Laki - Laki'];
    }

    public static function kebutuhanKhususList()
    {
    	return [
    		1 	 => 'Tidak Berkebutuhan Khusus',
    		2 	 => 'Netra (A)',
    		3 	 => 'Rungu (B)',
    		4 	 => 'Grahita Ringan (C)',
    		5 	 => 'Grahita Sedang (C1)',
    		6 	 => 'Daksa Ringan (D)',
    		7 	 => 'Daksa Sedang (D1)',
    		8 	 => 'Laras (E)',
    		9 	 => 'Wicara (F)',
    		10 	 => 'Tuna Ganda (G)',
    		11 	 => 'Hiper Aktif (H)',
    		12 	 => 'Cerdas Istimewa (I)',
    		13 	 => 'Bakat Istimewa (J)',
    		14 	 => 'Kesulitan Belajar (K)',
    		15 	 => 'Narkoba (N)',
    		16 	 => 'Indigo (O)',
    		17 	 => 'Down Sindrome (P)',
    		18 	 => 'Autis (Q)',
    		19 	 => 'Terpencil/Terbelakang (Bencana Alam/Sosial)',
    		20 	 => 'Tidak Mampu Ekonomi',
    	];
    }
}
