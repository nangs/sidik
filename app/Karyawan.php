<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $fillable = [
    	'nik',
    	'nama',
    	'kota_asal',
    	'alamat',
    	'phone',
    	'email',
    	'jns_kelamin',
    	'tempat_lahir',
    	'tgl_lahir',
        'foto',
        'agama',
        'golongan',
        'gol_darah',
        'nikah',
        'jml_anak',
        'guru'
    ];

    public function riwayatPendidikans()
    {
    	return $this->hasMany('App\RiwayatPendidikan');
    }

    public function riwayatKepegawaians()
    {
        return $this->hasMany('App\RiwayatKepegawaian');
    }

    public function riwayatMengajars()
    {
        return $this->hasMany('App\RiwayatMengajar');
    }

    public function pengalamanKerjas()
    {
        return $this->hasMany('App\PengalamanKerja');
    }

    public function keluargas()
    {
    	return $this->hasMany('App\KeluargaKaryawan');
    }

    public static function golonganList()
    {
        return [
            'IA'    => 'IA',
            'IB'    => 'IB',
            'IC'    => 'IC',
            'ID'    => 'ID',
            'IIA'   => 'IIA',
            'IIB'   => 'IIB',
            'IIC'   => 'IIC',
            'IID'   => 'IID',
            'IIIA'  => 'IIIA',
            'IIIB'  => 'IIIB',
            'IIIC'  => 'IIIC',
            'IIID'  => 'IIID',
            'IVA'   => 'IVA',
            'IVB'   => 'IVB',
            'IVC'   => 'IVC',
            'IVD'   => 'IVD',
            'IVE'   => 'IVE',
        ];
    }

    public static function agamaList()
    {
        return [
            'Islam'     => 'Islam',
            'Kristen'   => 'Kristen',
            'Katolik'   => 'Katolik',
            'Hindu'     => 'Hindu',
            'Budha'     => 'Budha',
            'Konghuchu' => 'Konghuchu',
        ];
    }

    public static function golDarahList()
    {
        return [
            'A'     => 'A',
            'B'     => 'B',
            'AB'    => 'AB',
            'O'     => 'O',
        ];
    }

    public function umur()
    {
        $now = new \DateTime("now");
        $tgl_lahir = new \DateTime($this->tgl_lahir);
        $interval = $tgl_lahir->diff($now);

        return $interval->format('%y tahun %m bulan %d hari');
    }

    public function mapels()
    {
        return $this->belongsToMany('App\Mapel', 'guru_mapel', 'karyawan_id', 'mapel_id');
    }

    public function ruangans()
    {
        return $this->hasMany('App\Ruangan', 'penanggungjawab_id');
    }

    public function jadwalPelajarans()
    {
        return $this->hasMany('App\JadwalPelajaran');
    }

    public function scopeGuru($query)
    {
        return $query->where('guru', 1);
    }
}
