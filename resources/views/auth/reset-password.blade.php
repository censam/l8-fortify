<x-guest-layout>

<h2>Forgot Password</h2>


    @if ($errors->any())
    <h1>Something Went wrong</h1>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif

    @if (session('status'))
        {{session('status')}}
    @endif
<form action="{{route('password.update')}}" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{$request->route('token')}}">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email',$request->email)}}" autofocus>
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


    <div>
        <input type="submit" value="Email Password Reset Link">
     </div>
</form>

</x-guest-layout>
