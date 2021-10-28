<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $batches = Batch::all();
        return view('batch.index', compact('batches'));
    }
}
