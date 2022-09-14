<?php

namespace App\Http\Controllers;

use App\Models\Candle;
use App\Models\Fragrance;
use App\Models\Jar;
use App\Models\Wax;
use App\Models\Wick;
use Illuminate\Http\Request;

class CandleController {

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $candles = Candle::all();

        return view('candle.index', compact('candles'));
    }

    public function show(Candle $candle)
    {
        return view('candle.show', compact('candle'));
    }

    public function showCreate()
    {
        $waxes = Wax::all();
        $jars = Jar::all();
        $wicks = Wick::all();
        $fragrances = Fragrance::all();
        return view('candle.create', compact('waxes', 'jars', 'wicks', 'fragrances'));
    }

    public function create(Request $request)
    {
        $candles = Candle::all();

        return view('candle.index', compact('candles'));
    }
}
