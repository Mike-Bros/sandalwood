<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JarController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('jar.index');
    }
}
