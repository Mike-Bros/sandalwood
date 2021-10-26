<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jar extends Model
{

    protected $fillable=[
        'jar_id',
        'name',
        'size',
        'quantity',
        'price',
        'order_link',
    ];

}
