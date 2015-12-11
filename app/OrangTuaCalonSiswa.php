<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTuaCalonSiswa extends Model
{
    protected $table = 'orang_tua_calon_siswa';

    protected $fillable = [
    	'calon_siswa_id', 'hubungan', 'nama', 'tahun_lahir', 'pendidikan', 'pekerjaan', 'penghasilan_bulanan',
    	'alamat', 'rt', 'rw', 'kode_pos', 'kelurahan', 'kecamatan', 'kota', 'provinsi',
    	'telepon_rumah', 'hp', 'agama', 'is_wali', 'email'
    ];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }

    public static function hubunganList()
    {
    	return ['Ayah', 'Ibu', 'Kakak', 'Paman', 'Kakek', 'Bibi', 'Nenek', 'Lainnya'];
    }

    public static function pendidikanList($index = 9999)
    {
    	$list = [
    		null => '- Pilih Pendidikan -',
    		1	 => 'Tidak Sekolah',
    		2	 => 'Putus SD',
    		3 	 => 'SD Sederajat',
    		4 	 => 'SMP Sederajat',
    		5 	 => 'SMA Sederajat',
    		6 	 => 'D1',
    		7 	 => 'D2',
    		8 	 => 'D3',
    		9 	 => 'D4/S1',
    		10 	 => 'S2',
    		11 	 => 'S3',
    	];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function pekerjaanList($index = 9999)
    {
    	$list = [
    		null => '- Pilih Pekerjaan -',
    		1 	 => 'Tidak Bekerja',
    		2	 => 'Nelayan',
    		3	 => 'Petani',
    		4	 => 'Peternak',
    		5	 => 'PNS/TNI/Polri',
    		6	 => 'Karyawan Swasta',
    		7	 => 'Pedagang Kecil',
    		8	 => 'Pedagang Besar',
    		9	 => 'Wiraswasta',
    		10	 => 'Wirausaha',
    		11	 => 'Buruh',
    		12	 => 'Pensiunan',
    		99	 => 'Lain - Lain',
    	];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function penghasilanList($index = 9999)
    {
    	$list = [
    		null => '- Pilih Penghasilan Bulanan -',
    		1	 => 'Kurang Dari 1.000.000',
    		2	 => '1.000.000 - 2.000.000',
    		3	 => '2.000.000 - 3.000.000',
    		4 	 => 'Lebih dari 3.000.000',
            0    => 'Tidak Berpenghasilan',
    	];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function agamaList()
    {
        return [
            null        => '- Pilih Agama -',
            'Islam'     => 'Islam',
            'Kristen'   => 'Kristen',
            'Katolik'   => 'Katolik',
            'Hindu'     => 'Hindu',
            'Budha'     => 'Budha',
            'Konghuchu' => 'Konghuchu',
        ];
    }

    public function scopeWali($query)
    {
        return $query->where('hubungan', 'Wali');
    }

    public function scopeAyah($query)
    {
        return $query->where('hubungan', 'Ayah');
    }

    public function scopeIbu($query)
    {
        return $query->where('hubungan', 'Ibu');
    }
}
