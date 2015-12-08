<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeasiswaCalonSiswa extends Model
{
    protected $table = 'beasiswa_calon_siswa';

    protected $fillable = [
    	'calon_siswa_id', 'jenis', 'sumber', 'tahun_mulai', 'tahun_selesai'
    ];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }

    public static function jenisList()
    {
    	return [
    		null => '- Pilih Jenis Beasiswa -',
    		1	 => 'Anak Berprestasi',
    		2	 => 'Anak Miskin',
    		3	 => 'Pendidikan',
    		4	 => 'Unggulan',
    		5	 => 'Lain - Lain',
    	];
    }
}
