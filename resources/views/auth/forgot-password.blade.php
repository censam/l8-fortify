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
<form action="{{route('password.email')}}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email')}}" autofocus>
    </div>

    <div>
        <input type="submit" value="Email Password Reset Link">
     </div>
</form>

</x-guest-layout>
