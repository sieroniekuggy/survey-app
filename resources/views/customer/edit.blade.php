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

        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" autocomplete="off" value="{{ $customer->name }}"/>
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" autocomplete="off" value="{{ $customer->email }}"/>
        </div>

        @foreach ($errors->all() as $error)
            <p style="color:green">{{$error}}</p>
        @endforeach

            @csrf
            <button type="submit">Save Customer</button>
    </form>
@endsection