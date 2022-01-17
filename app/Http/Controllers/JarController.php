<?php

namespace App\Http\Controllers;

use App\Models\Jar;
use Illuminate\Http\Request;

class JarController
{
    public function __construct()
    {

    }

    public function index(Request $request){
        $jars = Jar::all();
        return view('jar.index', compact('jars'));
    }

    public function show(Jar $jar) {
        return view('jar.show', compact('jar'));
    }
}
