@extends('layouts.app')

@section('content')

    <hr><p>
        Te encuentras en HOME. Aqui puedes habilitar 
        o deshabilitar el doble factor de autenticacion.
    </p><hr> 

    @if (session('status') == "two-factor-authentication-disabled")
        <div style="color: red" class="alert alert-success" role="alert">
            El doble factor de autenticacion está deshabilitado.
        </div><hr>
    @endif

    @if (session('status') == "two-factor-authentication-enabled")
        <div style="color: green" class="alert alert-success" role="alert">
            El doble factor de autenticacion está habilitado.
        </div><hr>
    @endif

    <form method="POST" action="/user/two-factor-authentication">
        @csrf

        @if (auth()->user()->two_factor_secret)
            @method("DELETE")

            <div style="position:absolute; left: 50px">
                <h3>Codigo QR:</h3>
            </div>

            <div style="position:absolute; left: 200px;">{!! auth()->user()->twoFactorQrCodeSvg() !!}</div>

            <div style="position: absolute; right: 100px">
                <h3>Codigos de recuperacion:</h3>

                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                    <div style="position: relative; font: oblique bold 60% cursive">{{ $code }}</div>
                @endforeach
            </div>

            <button style="font: oblique bold 100% cursive;padding: 20px;margin: 50px">Deshabilitar</button>
        @else
            <button style="font: oblique bold 100% cursive;padding: 20px; margin: 50px">Habilitar</button>
        @endif 

    </form>

@endsection