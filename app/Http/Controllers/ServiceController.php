<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
      
        $services = \App\Service::all();

        // dd($services);

        return view('service.index', compact('services'));
    }

    public function store()
    {
       $service = new \App\Service();
       $service->name = request('name');
       $service-save();
       return redirect()->back();
    }
}
