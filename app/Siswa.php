<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
    	'nis', 'nisn', 'nama', 'panggilan', 'jns_kelamin', 'foto', 'wn', 'suku', 'bahasa', 
        'tempat_lahir', 'tgl_lahir',
        'status_anak', 'anak_ke', 'sdr_kandung', 'sdr_angkat', 'sdr_tiri',
        'alamat', 'alamat_kos', 'tinggal_dengan', 'phone', 'jarak_ke_sekolah', 'transportasi',
        'gol_darah', 'tinggi', 'berat', 'riwayat_penyakit', 'kelainan', 'hobby',
    	'wali_id', 'active', 'ibu_id', 'ayah_id'
    ];

    public function wali()
    {
        return $this->belongsTo('App\Wali', 'wali_id');
    }

    public function ayah()
    {
        return $this->belongsTo('App\Wali', 'ayah_id');
    }

    public function ibu()
    {
    	return $this->belongsTo('App\Wali', 'ibu_id');
    }

    public function urutan()
    {
        return [
            'Nol', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh',
            'Sebelas', 'Dua belas', 'Tiga belas', 'Empat belas', 'Lima belas'
        ];
    }

    public function umur()
    {
        $now = new \DateTime("now");
        $tgl_lahir = new \DateTime($this->tgl_lahir);
        $interval = $tgl_lahir->diff($now);

        return $interval->format('%y tahun %m bulan %d hari');
    }

    public function tagihans()
    {
        return $this->hasMany('App\Tagihan');
    }

    public function kelass()
    {
        return $this->belongsToMany('App\Kelas', 'kelas_siswa', 'siswa_id', 'kelas_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
