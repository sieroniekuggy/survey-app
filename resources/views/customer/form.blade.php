      <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $customer->name }}"/>
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" autocomplete="off" value="{{ old('email') ?? $customer->email }}"/>
        </div>

        @foreach ($errors->all() as $error)
            <p style="color:green">{{$error}}</p>
        @endforeach

            @csrf