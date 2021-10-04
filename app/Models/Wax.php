<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wax extends Model
{

    protected $fillable=[
        'wax_id',
        'name',
        'type',
        'weight',
        'price',
        'order_link',
    ];

}
