<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'process';
    protected $fillable=[
        'id',
        'name',
        'description',
        'max_temp',
        'pour_temp',
    ];

}
