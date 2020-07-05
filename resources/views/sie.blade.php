@extends('app')

@section('title')
    Sie
@endsection

@section('content')
    <ul>
        @forelse ($sies as $sie)
            <li>{{ $sie->name }}</li>
        @empty
            <li>No data</li>
        @endforelse
    </ul>
@endsection