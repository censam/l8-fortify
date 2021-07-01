<x-guest-layout>

<h2>Login</h2>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif
<form action="/login" method="POST">
@csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email')}}" autofocus>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{old('password')}}" autofocus>
    </div>
    <div>
        <input type="submit" value="Login">
        <a href="/forgot-password">Forgot Password</a>
     </div>
</form>

</x-guest-layout>
