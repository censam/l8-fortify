<x-app-layout>

<h2>Two Factor Auth</h2>


    @if ($errors->any())
    <h1>Something Went wrong</h1>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach

    @endif

    @if (session('status') == 'two-factor-authentication-enabled')
        <div class="mb-4 font-medium text-sm text-green-600">
            Two factor authentication has been enabled.
        </div>
    @endif

    @if (session('status') == 'two-factor-authentication-disabled')
        <div class="mb-4 font-medium text-sm text-green-600">
            Two factor authentication has been disabled.
        </div>
    @endif

    <form action="user/two-factor-recovery-codes" method="POST">
        @csrf
        <div>
            <input type="submit" value="Generate Recovery codes">
         </div>
    </form>


    @if (auth()->user()->two_factor_secret)

    {!!auth()->user()->twoFactorQrCodeSvg()!!}

    @foreach (auth()->user()->recoveryCodes() as  $recoveryCodes)
    <br> {{$recoveryCodes}}
    @endforeach




    <form action="{{route('two-factor.disable')}}" method="POST">
        @csrf
        @method('delete')

        <div>
            <input type="submit" value="Disable">
         </div>
    </form>
    @else
    <form action="{{route('two-factor.enable')}}" method="POST">
        @csrf

        <div>
            <input type="submit" value="Enable">
         </div>
    </form>

    @endif



</x-app-layout>
