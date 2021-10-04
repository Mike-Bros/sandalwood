<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wick extends Model
{

    protected $fillable=[
        'wick_id',
        'name',
        'type',
        'length',
        'price',
        'order_link',
    ];

}
