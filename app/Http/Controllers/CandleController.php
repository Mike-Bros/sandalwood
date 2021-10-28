<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use Illuminate\Http\Request;

class CandleController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $candles = Candle::all();
        return view('candle.index', compact('candles'));
    }
}
