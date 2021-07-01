<x-guest-layout>

    <h2>Register</h2>

    @if ($errors->any())
        <div>
            <div>Something went wrong !</div>
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        </div>
    @endif
    <form action="/register" method="POST">
    @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" autofocus>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{old('password')}}" autofocus>
        </div>
        <div>
            <label for="password_confirmation">Password_confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" autofocus>
        </div>
        <div>
           <input type="submit" value="Register">
        </div>
    </form>

    </x-guest-layout>
