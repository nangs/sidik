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

    public function ortu()
    {
    	return $this->hasMany('App\OrangTuaCalonSiswa');
    }

    public function wawancara()
    {
        return $this->hasOne('App\WawancaraCalonSantri', 'siswa_id');
    }

    public function nilaiWawancara()
    {
        return $this->hasMany('App\NilaiWawancaraCalonSantri', 'siswa_id');
    }

    public function wawancaraOrtu()
    {
        return $this->hasOne('App\WawancaraOrangTuaCalonSantri', 'siswa_id');
    }

    public function nilaiWawancaraOrtu()
    {
        return $this->hasMany('App\NilaiWawancaraOrangTuaCalonSantri', 'siswa_id');
    }

    // public function wali()
    // {
    //     return $this->belongsTo('App\OrangTuaCalonSiswa', 'wali_id');
    // }

    // public function ayah()
    // {
    //     return $this->belongsTo('App\OrangTuaCalonSiswa', 'ayah_id');
    // }

    // public function ibu()
    // {
    //     return $this->belongsTo('App\OrangTuaCalonSiswa', 'ibu_id');
    // }

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

    public static function kebutuhanKhususList($index = 9999)
    {
    	$list = [
            0    => '-',
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

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public function umur()
    {
        $now = new \DateTime("now");
        $tanggal_lahir = new \DateTime($this->tanggal_lahir);
        $interval = $tanggal_lahir->diff($now);

        return $interval->format('%y tahun %m bulan %d hari');
    }
}
