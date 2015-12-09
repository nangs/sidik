<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTuaCalonSiswa extends Model
{
    protected $table = 'orang_tua_calon_siswa';

    protected $fillable = [
    	'calon_siswa_id', 'hubungan', 'nama', 'pendidikan', 'pekerjaan', 'penghasilan_bulanan',
    	'alamat', 'rt', 'rw', 'kode_pos', 'kelurahan', 'kecamatan', 'kota', 'provinsi',
    	'telepon_rumah', 'hp', 'agama', 'is_wali'
    ];

    public function calonSiswa()
    {
    	return $this->belongsTo('App\CalonSiswa');
    }

    public static function hubunganList()
    {
    	return ['Ayah', 'Ibu', 'Kakak', 'Paman', 'Kakek', 'Bibi', 'Nenek', 'Lainnya'];
    }

    public static function pendidikanList()
    {
    	return [
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
    }

    public static function pekerjaanList()
    {
    	return [
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
    }

    public static function penghasilanList()
    {
    	return [
    		null => '- Pilih Penghasilan -',
    		1	 => 'Kurang Dari 1.000.000',
    		2	 => '1.000.000 - 2.000.000',
    		3	 => '2.000.000 - 3.000.000',
    		4 	 => 'Lebih dari 3.000.000',
    	];
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
}
