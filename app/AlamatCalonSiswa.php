<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlamatCalonSiswa extends Model
{
    protected $table = 'alamat_calon_siswa';

    protected $fillable = [
    	'calon_siswa_id', 'jenis_tinggal', 'nama', 'pendidikan', 'pekerjaan', 'penghasilan_bulanan',
    	'alamat', 'rt', 'rw', 'kode_pos', 'kelurahan', 'kecamatan', 'kota', 'provinsi',
    	'telepon_rumah', 'hp', 'jarak_tempat_tinggal_ke_sekolah', 'alat_trasnportasi_ke_sekolah', 'email'
    ];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }

    public static function transportasiList()
    {
    	return [
    		null => '- Pilih Alat Transportasi -',
    		1	 => 'Jalan Kaki',
    		2	 => 'Kendaraan Pribadi',
    		3 	 => 'Kendaraan Umum/Angkot/Pete - Pete',
    		4 	 => 'Jemputan Sekolah',
    		5 	 => 'Kereta Api',
    		6 	 => 'Ojek',
    		7 	 => 'Andong/Bendi/Sado/Dokar/Delman/Becak',
    		8 	 => 'Perahu Penyebrangan/Rakit/Getek',
    		99   => 'Lainnya'
    	];
    }

    public static function jenisTinggalList()
    {
        return [
            null => '- Pilih Jenis Tinggal -',
            1    => 'Bersama Orang Tua',
            2    => 'Bersama Wali',
            3    => 'Kos',
            4    => 'Asrama',
            5    => 'Panti Asuhan',
            9    => 'Lainnya',
        ];
    }
}
