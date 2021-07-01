<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fortify Example</title>
</head>
<body>
    <div>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <a href="{{route('profile')}}">Profile</a>
            <a href="{{route('password')}}">Update Password</a>
            <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit()">Logout</a>
        </form>
    </div>
    <div>{{$slot}}</div>
</body>
</html>
