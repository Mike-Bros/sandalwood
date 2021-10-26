<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    protected $table = 'fragrance';
    protected $fillable=[
        'fragrance_id',
        'combination_id',
    ];

}
