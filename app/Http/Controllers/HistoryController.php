<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController
{
    public function __construct()
    {

    }

    public function index(Request $request){

        return view('history.index');
    }
}
