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
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" autocomplete="off"/>
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" autocomplete="off"/>
        </div>

        @foreach ($errors->all() as $error)
            <p style="color:green">{{$error}}</p>
        @endforeach

            @csrf
            <button type="submit">Add New Customer</button>
    </form>
@endsection