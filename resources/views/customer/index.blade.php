@extends('app')

@section('title')
    Customers
@endsection

<div>
    <a href="/customers/create">Add New Customer</a>
</div>

@section('content')
    <ul>
        @forelse ($customers as $customer)
            <p><strong><a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
            </strong> - {{ $customer->email }}</p>
        @empty
            <p>No Customers</p>
        @endforelse
    </ul>

@endsection