<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandleController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('candle.index');
    }
}
