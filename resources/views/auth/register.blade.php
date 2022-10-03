@extends('layouts.app')

@section('content')

    <hr><p>
        Te encuentras en el formulario de REGISTRO de usuaio.
        Ingresa los datos que quieras en tu sesion.
    </p><hr> 

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Nombre de usuario:</label>

            <input style="font: oblique bold 100% cursive" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Direccion de Email:</label>

            <input style="font: oblique bold 100% cursive" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Contraseña:</label>

            <input style="font: oblique bold 100% cursive" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Confirmar contraseña:</label>

            <input style="font: oblique bold 100% cursive" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <hr><button type="submit" style="font: oblique bold 100% cursive;padding: 10px; margin: 5px">Registrar</button>

    </form>
@endsection