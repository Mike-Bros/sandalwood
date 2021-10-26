<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wax extends Model
{

    protected $fillable=[
        'wax_id',
        'name',
        'type', //soy or bees
        'weight', //in lbs
        'price', //stored as int divide by 100 for cents
        'order_link',
    ];

}
