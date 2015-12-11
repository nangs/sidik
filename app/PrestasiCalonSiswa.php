<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestasiCalonSiswa extends Model
{
    protected $table = 'prestasi_calon_siswa';

    protected $fillable = [
    	'calon_siswa_id', 'tahun', 'lomba', 'juara_ke', 'jenis', 'tingkat'
    ];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }

    public static function jenisList($index = 9999)
    {
    	$list = [
    		null => '- Pilih Jenis Prestasi -',
    		1	 => 'Sain',
    		2	 => 'Seni',
    		3	 => 'Olah Raga',
    		4	 => 'Lain - Lain',
    	];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function tingkatList($index = 9999)
    {
    	$list = [
    		null => '- Pilih Tingkat -',
    		1	 => 'Sekolah',
    		2	 => 'Kecamatan',
    		3	 => 'Kota/Kabupaten',
    		4	 => 'Provinsi',
    		5	 => 'Nasional',
    		6	 => 'Internasional',
    	];

        return isset($list[$index]) ? $list[$index] : $list;
    }
}
