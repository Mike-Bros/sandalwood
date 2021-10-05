<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaxController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('wax.index');
    }
}
