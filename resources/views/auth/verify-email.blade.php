<x-guest-layout>

    <div>
        <p>
            Thanks for signing up ! Before getting Started Could you verify email by clicking the below link.....
        </p>
    </div>

<h2>Email Verification</h2>


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif
<form action="{{route('verification.send')}}" method="POST">
    @csrf
    <div>
        <input type="submit" value="Resend Verification Email">
     </div>
</form>

<form action="{{route('logout')}}" method="POST">
    @csrf
    <div>
        <input type="submit" value="Logout">
     </div>
</form>

</x-guest-layout>
