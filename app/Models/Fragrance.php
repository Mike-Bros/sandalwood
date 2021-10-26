<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    protected $table = 'fragrance';
    protected $fillable=[
        'id',
        'combination_id',
        'scent_id_1',
        'amount_1',
        'scent_id_2',
        'amount_2',
        'scent_id_3',
        'amount_3',
        'scent_id_4',
        'amount_4',
    ];

}
