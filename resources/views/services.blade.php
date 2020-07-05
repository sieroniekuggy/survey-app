@extends('app')

@section('title')
    Services
@endsection

@section('content')
    <ul>
        {{-- @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach --}}

        @forelse ($services as $service)
            <li>{{ $service }}</li>
        @empty
            <li>NO services</li>
        @endforelse
    </ul>
@endsection