<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FragranceController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('fragrance.index');
    }
}
