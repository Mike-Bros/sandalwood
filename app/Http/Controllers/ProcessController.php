<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

class ProcessController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $processes = Process::all();
        return view('process.index', compact('processes'));
    }
}
