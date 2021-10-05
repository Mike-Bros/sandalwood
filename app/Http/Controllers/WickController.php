<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WickController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('wick.index');
    }
}
