<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $tests = Test::all();
        return view('test.index', compact('tests'));
    }
}
