<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{

    protected $fillable=[
        'combination_id',
        'scents',
        'amounts',
    ];

}