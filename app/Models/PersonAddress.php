<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'address',
    ];
}
