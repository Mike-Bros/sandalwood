<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wick extends Model
{
    protected $table = 'wick';
    protected $fillable=[
        'id',
        'name',
        'type',
        'thickness',
        'length',
        'price',
        'order_link',
    ];

}
