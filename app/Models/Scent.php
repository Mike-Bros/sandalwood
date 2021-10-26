<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scent extends Model
{
    protected $table = 'scent';
    protected $fillable=[
        'scent_id',
        'name',
        'company',
        'amount', //in oz
        'price',
        'order_link',
    ];

}
