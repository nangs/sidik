<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ta extends Model
{
    protected $table = 'ta';

    protected $fillable = ['periode', 'start', 'end', 'active'];
}
