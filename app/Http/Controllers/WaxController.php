<?php

namespace App\Http\Controllers;

use App\Models\Wax;
use Illuminate\Http\Request;

class WaxController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $waxes = Wax::all();
        return view('wax.index', compact('waxes'));
    }

    public function show(Wax $wax) {
        return view('wax.show', compact('wax'));
    }
}
