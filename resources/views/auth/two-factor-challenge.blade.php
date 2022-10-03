@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf

        <hr><p>
            Te encuentras en el formulario de DOBLE FACTOR DE AUTENTICACION.
            Ingresa el codigo QR o una de las claves de recuperacion.
        </p><hr> 

        <div>
            <label style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">Codigo QR:</label>

            <input style="font: oblique bold 100% cursive" id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-code">

            @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr><button type="submit" style="font: oblique bold 100% cursive;padding: 10px; margin: 5px">
            Enviar
        </button>

    </form><hr>

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf

        <div>
            <label style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">Codigos de recuperacion:</label>

            <input style="font: oblique bold 100% cursive" id="recovery_code" type="recovery_code" class="form-control @error('recovery_code') is-invalid @enderror" name="recovery_code" required autocomplete="current-recovery_code">

            @error('recovery_code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr><button type="submit" style="font: oblique bold 100% cursive;padding: 10px; margin: 5px">
            Enviar
        </button>

    </form>

@endsection