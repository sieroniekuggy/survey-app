<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SieController extends Controller
{
    public function index()
    {

        $sies = \App\Sie::all();
       return view('sie', compact('sies'));
    }
}
