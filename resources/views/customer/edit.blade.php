@extends('app')

@section('title')
    Edit Customers
@endsection

@section('content')

    <div>
        <a href="/#">Back</a>
    </div>
    
    <h1>Edit Customers Details</h1>

    <form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')

        @include('customer.form')
            <button type="submit">Save Customer</button>
    </form>
@endsection