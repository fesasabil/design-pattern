<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dasar extends Model
{
    protected $table = 'dasars';

    protected $fillable = [
        'nama', 'asal'
    ];
}
