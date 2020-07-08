@extends('app')

@section('title')
    Customers
@endsection

<div>
    <a href="/customers/create">Add New Customer</a>
    <a href="/customers?active=1">active</a>
    <a href="/customers?active=0">Inactive</a>
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
