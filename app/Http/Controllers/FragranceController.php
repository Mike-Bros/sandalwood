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
}
