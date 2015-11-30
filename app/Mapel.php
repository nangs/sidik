<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = ['kode', 'nama'];

    public function mapels()
    {
        return $this->belongsToMany('App\Karyawan', 'guru_mapel', 'mapel_id', 'karyawan_id');
    }
}
