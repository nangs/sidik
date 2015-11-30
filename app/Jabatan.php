<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    protected $fillable = ['bagian_id', 'nama', 'tugas'];

    public $timestamps = false;

    public function bagian()
    {
    	return $this->belongsTo('App\Bagian');
    }
}
