<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candle extends Model
{
    protected $table = 'candle';
    protected $fillable=[
        'id',
        'brand_name',
        'wax_id',
        'wax_amount',
        'wick_id',
        'fragrance_id',
        'jar_id',
    ];

}
