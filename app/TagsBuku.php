<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsBuku extends Model
{
    protected $table = 'tags_buku';

    protected $fillable = ['nama'];

    public $timestamps = false;
}
