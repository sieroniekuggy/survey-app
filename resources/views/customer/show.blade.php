<div>
    <a href="/customers">Back</a>
</div>

<div>
    <strong>Name</strong>
    <p>{{ $customer->name }}</p>
</div>

<div>
    <strong>Email</strong>
    <p>{{ $customer->email }}</p>
</div>

<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit Customer Details</a>
</div>

<form action="/customers/{{$customer->id}}" method="POST">
    @method('DELETE')
    @csrf
    <button>Delete Customer</button>
</form>