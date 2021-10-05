<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('process.index');
    }
}
