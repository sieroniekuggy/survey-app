@extends('app')

@section('title')
    Services
@endsection

@section('content')

    <form action="/service" method="POST">
        <input type="text" name="name" autocomplete="off"/>
        <button type="submit">Add</button>
    </form>

    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <li>NO services</li>
        @endforelse
    </ul>
@endsection