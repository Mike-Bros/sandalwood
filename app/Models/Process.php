<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{

    protected $fillable=[
        'process_id',
        'name',
        'description',
        'max_temp',
        'pour_temp',
    ];

}