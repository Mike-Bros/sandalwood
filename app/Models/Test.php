<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $fillable=[
        'id',
        'test_conditions',
        'init_light_img',
        'half_hour_progress_img',
        'four_hour_progress_img',
    ];

}
