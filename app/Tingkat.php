<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    protected $table = 'tingkat';

    protected $fillable = ['nama', 'keterangan'];

    public function getNamaAttribute($value)
    {
    	return $value;
    }
}
