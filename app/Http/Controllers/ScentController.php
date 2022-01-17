<?php

namespace App\Http\Controllers;

use App\Models\Scent;
use Illuminate\Http\Request;

class ScentController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $scents = Scent::all();
        return view('scent.index', compact('scents'));
    }

    public function show(Scent $scent) {
        return view('scent.show', compact('scent'));
    }
}
