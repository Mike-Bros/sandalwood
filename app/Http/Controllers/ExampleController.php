<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('example.index');
    }
}
