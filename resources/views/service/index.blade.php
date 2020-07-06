@extends('app')

@section('title')
    Services
@endsection

@section('content')

    <form action="/service" method="POST">
        <input type="text" name="name" autocomplete="off"/>
        @csrf
        <button type="submit">Add Services</button>
    </form>

    @foreach ($errors->all() as $error)
        <p style="color:red">{{$error}}</p>
    @endforeach

    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <li>NO services</li>
        @endforelse
    </ul>
@endsection