@extends('app')

@section('title')
    Add Customers
@endsection

@section('content')

    <div>
        <a href="/customers">Back</a>
    </div>
    
    <h1>Create Customers</h1>

    <form action="/customers" method="POST">
    @include('customer.form')
            <button type="submit">Add New Customer</button>
    </form>
@endsection