<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = \App\Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
        \App\Customer::create($this->validatedData());

        return redirect('/customers');
    }

    public function show(\App\Customer $customer)
    {
        // $customer = \App\Customer::findorFail($customerId);
        // dd($customer);
        return view('customer.show', compact('customer'));
    }

    public function edit(\App\Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(\App\Customer $customer)
    {
        $customer->update($this->validatedData());

        return redirect('/customers');
    }

    public function destroy(\App\Customer $customer)
    {
       $customer->delete();
       return redirect('/customers');
    }

    protected function validatedData()
    {
        return request()->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
    }
}
