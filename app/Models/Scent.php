<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scent extends Model
{

    protected $fillable=[
        'scent_id',
        'name',
        'company',
        'amount_oz',
        'price',
        'order_link',
    ];

}
