<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Psb extends Model
{
    protected $table = 'psb';

    const STATUS_DAFTAR             = 1;
    const STATUS_BAYAR_OK           = 2;
    const STATUS_ISI_FORM           = 3;
    const STATUS_FORM_OK            = 4;
    const STATUS_BERKAS_OK          = 5;
    const STATUS_TEST_OK            = 6;
    const STATUS_WAWANCARA_OK       = 7;
    const STATUS_WAWANCARA_ORTU_OK  = 8;
    // const STATUS_TKD_OK             = 9;
    const STATUS_DITERIMA           = 10;
    const STATUS_DITOLAK            = 11;

    protected $fillable = [
    	'jenjang', 'tingkat', 'step', 'status', 'keterangan', 'tahun_ajaran',
        'tanggal_pembayaran', 'bank_asal', 'rekening_asal', 'rekening_tujuan_id',
        'pemegang_rekening_asal', 'metode_pembayaran',
        'jumlah_pembayaran', 'bukti_pembayaran', 'user_id', 'rapor', 'kk', 'akta', 'foto', 'sk_sehat',
        'status_pembayaran', 'status_formulir', 'status_berkas', 'status_test', 'status_wawancara', 'status_wawancara_ortu',
        'status_tkd', 'status_penerimaan', 'status_progress'
    ];

    public function scopeSD($query)
    {
        return $query->where('jenjang', 1);
    }

    public function scopeSMP($query)
    {
        return $query->where('jenjang', 2);
    }

    public function scopeSMA($query)
    {
        return $query->where('jenjang', 3);
    }

    public function scopeTDPG($query)
    {
        return $query->where('jenjang', 4);
    }

    public function scopeTAHFIZH($query)
    {
        return $query->where('jenjang', 5);
    }

    public function scopeSekarang($query)
    {
        return $query->where('tahun_ajaran', \App\Ta::active()->first()->periode);
    }

    public function scopeMine($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    public function calonSiswa()
    {
    	return $this->hasOne('App\CalonSiswa');
    }

    public static function jenjangList($index = 9999)
    {
        $list = [
            null    => '- Pilih Jenjang -',
            1       => 'SD',
            2       => 'SMP',
            3       => 'SMA',
            4       => 'TD-PG',
            5       => 'TAHFIZH',
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function tingkatList($index = 9999)
    {
        $list = [
            null    => '- Pilih Tingkat -',
            1       => 'I',
            2       => 'II',
            3       => 'III',
            4       => 'IV',
            5       => 'V',
            6       => 'VI',
            7       => 'VII',
            8       => 'VIII',
            9       => 'IX',
            10      => 'X',
            11      => 'XI',
            12      => 'XII',
            13      => 'TBA',
            14      => 'Semester 1',
            15      => 'Semester 2',
            16      => 'Semester 3',
            17      => 'Semester 4',
            18      => 'Semester 5',
            19      => 'Semester 6',
            20      => 'Semester 7',
            21      => 'Semester 8',
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function metodePembayaranList($index = 9999)
    {
        $list = [
            null                => '- Pilih Metode Pembayaran -',
            'Tunai'             => 'Tunai',
            'Setor Tunai Bank'  => 'Setor Tunai Bank',
            'Transfer ATM'      => 'Transfer ATM',
            'Intenet Banking'   => 'Internet Banking',
            'SMS Banking'       => 'SMS Banking'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function aksiList()
    {
        $role = Auth::user()->role;

        $aksi['admin'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiPembayaran/'        => 'Lunas',
            '/psb/konfirmasiFormulir/'          => 'Formulir Lengkap',
            '/psb/konfirmasiBerkas/'            => 'Berkas Lengkap',
            '/psb/konfirmasiTest/'              => 'Sudah Test',
            '/psb/konfirmasiWawancara/'         => 'Sudah Wawancara',
            '/psb/konfirmasiWawancaraOrtu/'     => 'Orang Tua Sudah Wawancara',
            // '/psb/konfirmasiTKD/'               => 'Sudah TKD',
            '/psb/konfirmasiDiterima/'          => 'Diterima',
            '/psb/konfirmasiDitolak/'           => 'Ditolak',
        ];

        $aksi['keuangan'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiPembayaran/'        => 'Lunas',
        ];

        $aksi['data'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiFormulir/'          => 'Formulir Lengkap',
            '/psb/konfirmasiBerkas/'            => 'Berkas Lengkap',
        ];

        $aksi['test-wawancara'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiTest/'              => 'Sudah Test',
            '/psb/konfirmasiWawancara/'         => 'Sudah Wawancara',
        ];

        $aksi['wawancara-orangtua'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiWawancaraOrtu/'     => 'Orang Tua Sudah Wawancara',
        ];

        // $aksi['tkd'] = [
        //     null                                => '- Pilih Aksi -',
        //     '/psb/konfirmasiTKD/'               => 'Sudah TKD',
        // ];

        $aksi['seleksi'] = [
            null                                => '- Pilih Aksi -',
            '/psb/konfirmasiDiterima/'          => 'Diterima',
            '/psb/konfirmasiDitolak/'           => 'Ditolak',
        ];

        $aksi['pendaftaran'] = [
            null                                => '- Pilih Aksi -',
        ];

        return $aksi[$role];
    }

    public static function statusBayarList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Lunas',
            '1'     => 'Lunas'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusFormulirList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Lengkap',
            '1'     => 'Lengkap'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusBerkasList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Lengkap',
            '1'     => 'Lengkap'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusTestList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Test',
            '1'     => 'Sudah Test'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusWawancaraList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Wawancara',
            '1'     => 'Sudah Wawancara'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusWawancaraOrtuList($index = 9999)
    {
        $list = [
            '0'     => 'Belum Wawancara',
            '1'     => 'Sudah Wawancara'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusTKDList($index = 9999)
    {
        $list = [
            '0'     => 'Belum TKD',
            '1'     => 'Sudah TKD'
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public static function statusPenerimaanList($index = 9999)
    {
        $list = [
            '2'     => 'Tidak Diterima',
            '1'     => 'Diterima',
        ];

        return isset($list[$index]) ? $list[$index] : $list;
    }

    public function rekeningTujuan()
    {
        return $this->belongsTo('App\Rekening', 'rekening_tujuan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function provinsi()
    {
        return [
            'Nanggroe Aceh Darussalaam',
            'Sumatra Utara',
            'Sumatra Barat',
            'Riau',
            'Jambi',
            'Sumatra Selatan',
            'Bengkulu',
            'Lampung',
            'Kep. Bangka Belitung',
            'Kep. Riau',
            'DKI Jakarta',
            'Jawa Barat',
            'Jawa Tengah',
            'DI Yogyakarta',
            'Jawa Timur',
            'Banten',
            'Bali',
            'Nusa Tenggara Barat',
            'Nusa Tenggara Timur',
            'Kalimantan Barat',
            'Kalimantan Tengah',
            'Kalimantan Selatan',
            'Kalimantan Timur',
            'Sulawesi Utara',
            'Sulawesi Tengah',
            'Sulawesi Selatan',
            'Sulawesi Tenggara',
            'Gorontalo',
            'Maluku',
            'Maluku Utara',
            'Papua',
            'Irian Jaya Barat',
        ];
    }

    public static function propinsi()
    {
        return $this->provinsi();
    }

    // format nomor - pendaftaran : PSB-MIAS-2015/2016-{JENJANG}-{TINGKAT}-{ID}
}
