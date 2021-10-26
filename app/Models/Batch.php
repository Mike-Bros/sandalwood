<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batch';
    protected $fillable=[
        'id',
        'candles_made',
        'test_id',
        'process_id',
        'candle_id',
        'batch_img',
        'notes',
        'create_date',
    ];

}
