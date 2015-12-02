<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'wali';

    protected $fillable = [
    	'nama', 'alamat', 'phone', 'email', 'jns_kelamin', 'hub_keluarga',
    	'tempat_lahir', 'tgl_lahir', 'agama', 'wn', 'pendidikan_terakhir',
        'pekerjaan', 'penghasilan', 'status', 'is_wali'
    ];

    public function siswas()
    {
    	return $this->hasMany('App\Siswa');
    }

    public function umur()
    {
        $now = new \DateTime("now");
        $tgl_lahir = new \DateTime($this->tgl_lahir);
        $interval = $tgl_lahir->diff($now);

        return $interval->format('%y tahun %m bulan %d hari');
    }
}
