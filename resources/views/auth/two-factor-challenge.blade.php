<x-app-layout>

    <h2>Two Factor Challenge</h2>


        @if ($errors->any())
        <h1>Something Went wrong</h1>
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach

        @endif

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
               {{session('status')}}
            </div>
        @endif



        <form action="/two-factor-challenge" method="POST">
            @csrf
            <div>
                Code <input type="text" name="code" id="">
                <input type="submit" value="Confirm">
             </div>
        </form>

        <hr>

        <form action="/two-factor-challenge" method="POST">
            @csrf
            <div>
                Code <input type="text" name="recovery_code" id="">
                <input type="submit" value="Confirm">
             </div>
        </form>

    </x-app-layout>


