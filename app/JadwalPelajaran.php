<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    protected $table = 'jadwal_pelajaran';

    protected $fillable = [
    	'ta_id', 'tingkat_id', 'kelas_id', 'jam_id', 'ruang_id',
    	'hari', 'guru_id', 'mapel_id', 'keterangan'
    ];

    public static function hariList()
    {
    	return [
    		1	=> 'Ahad',
    		2	=> 'Senin',
    		3	=> 'Selasa',
    		4	=> 'Rabu',
    		5	=> 'Kamis',
    		6	=> 'Jumat',
    		7	=> 'Sabtu'
    	];
    }

    public function ta()
    {
    	return $this->belongsTo('App\Ta');
    }

    public function tingkat()
    {
    	return $this->belongsTo('App\Tingkat');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas');
    }

    public function jam()
    {
    	return $this->belongsTo('App\JamPelajaran', 'jam_id');
    }

    public function guru()
    {
    	return $this->belongsTo('App\Karyawan', 'guru_id');
    }

    public function mapel()
    {
    	return $this->belongsTo('App\Mapel');
    }

    public function ruang()
    {
    	return $this->belongsTo('App\Ruangan', 'ruang_id');
    }
}
