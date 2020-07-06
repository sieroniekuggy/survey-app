@extends('app')

@section('title')
    Customers
@endsection

<a href="/customer/create">Add New Customer</a>

@section('content')

    <form action="/service" method="POST">
        <input type="text" name="name" autocomplete="off"/>
        @csrf
        <button type="submit">Add</button>
    </form>

    @foreach ($errors->all() as $error)
        <p style="color:red">{{$error}}</p>
    @endforeach

    <ul>
        @forelse ($customers as $customer)
            <p><strong>{{ $customer->name }}</strong> - {{ $customer->email }}</p>
        @empty
            <p>No Customers</p>
        @endforelse
    </ul>

@endsection