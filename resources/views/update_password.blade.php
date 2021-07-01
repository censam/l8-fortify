<x-app-layout>

<h2>Update Password</h2>


    @if ($errors->any())
    <h1>Something Went wrong</h1>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif


    @if (session('status')==='password-updated')
       Password updated
    @endif
<form action="user/password" method="POST">
    @csrf
    @method('put')



    <div>
        <label for="current_password">Current Password</label>
        <input type="password" name="current_password" id="password" value="{{old('current_password')}}" autofocus>
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
        <input type="submit" value="Update Password">
     </div>
</form>

</x-app-layout>
