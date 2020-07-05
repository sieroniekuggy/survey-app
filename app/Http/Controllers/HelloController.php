<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        # code...
        $var = 'im the goat';
        return view('subviews.hello')->with(compact('var'));
    }
}
