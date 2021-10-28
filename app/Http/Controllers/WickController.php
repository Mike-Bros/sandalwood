<?php

namespace App\Http\Controllers;

use App\Models\Wick;
use Illuminate\Http\Request;

class WickController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $wicks = Wick::all();
        return view('wick.index', compact('wicks'));
    }
}
