<x-app-layout>
    <h1>Confirm Password </h1>

    @if ($errors->any())
    <h1>Something Went wrong</h1>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif


<form action="/user/confirm-password" method="POST">
    @csrf
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{old('password')}}" autofocus>
    </div>
    <div>
        <input type="submit" value="Confirm Password">
     </div>
</form>
</x-app-layout>
