<?php

namespace App\Http\Controllers;

use App\Models\Fragrance;
use Illuminate\Http\Request;

class FragranceController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $fragrances = Fragrance::all();
        return view('fragrance.index', compact('fragrances'));
    }

    public function show(Fragrance $fragrance) {
        return view('fragrance.show', compact('fragrance'));
    }
}
