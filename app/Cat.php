<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cat';
    protected $fillable = [
        'kdcat', 'nmcat', 'kddas', 'kdws'
    ];
}
