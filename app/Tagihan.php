<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';

    protected $fillable = [
    	'ta_id', 'siswa_id', 'jenis', 'bulan', 'semester', 'jumlah', 'status',
    	'tanggal_bayar', 'jatuh_tempo', 'last_reminder', 'keterangan', 'nomor'
    ];

    public static function bulanList()
    {
        return [
            0   => '',
            1   => 'Januari',
            2   => 'Februari',
            3   => 'Maret',
            4   => 'April',
            5   => 'Mei',
            6   => 'Juni',
            7   => 'Juli',
            8   => 'Agustus',
            9   => 'September',
            10  => 'Oktober',
            11  => 'November',
            12  => 'Desember',
        ];
    }

    public function siswa()
    {
    	return $this->belongsTo('App\Siswa');
    }

    public function ta()
    {
    	return $this->belongsTo('App\Ta');
    }

}
