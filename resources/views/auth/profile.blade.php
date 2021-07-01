<x-app-layout>

<h2>Profile</h2>


    @if ($errors->any())
    <h1>Something Went wrong</h1>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif

    @if (session('status')==='profile_updated')
       Profile Infomation updated
    @endif
<form action="{{route('user-profile-information.update')}}" method="POST">
    @csrf
    @method('put')


    <div>
        <label for="name">ame</label>
        <input type="name" name="name" id="name" value="{{old('name',auth()->user()->name)}}" autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email',auth()->user()->email)}}" autofocus>
    </div>

    <div>
        <input type="submit" value="Update profile Here">
     </div>
</form>

</x-app-layout>
