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
        //validation
        $data = request()->validate([
            'name'=>'required|min:3|max:30'
        ]);
        $service = new \App\Service();

        $service->name = request('name');
        $service->save();

        return redirect()->back();
    }
}
