<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('batch.index');
    }
}
