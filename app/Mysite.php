<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mysite extends Model
{
    protected $fillable = [
        'title',
        'user',
    ];
}
