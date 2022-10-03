@extends('layouts.app')

@section('content')

    <hr><p>
        Te encuentras en el formulario de INICIO DE SESION.
        Ingresa los datos correspondientes para iniciar sesion.
    </p><hr> 

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Direccion de Email:</label>

            <input style="font: oblique bold 100% cursive" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">
            <label>Contraseña:</label>

            <input style="font: oblique bold 100% cursive" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">

            <input style="width: 20px; height: 20px" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label>Recuerdame</label>

        </div>

        <hr><button type="submit" style="font: oblique bold 100% cursive;padding: 10px; margin: 5px">
            Iniciar sesion
        </button>

    </form>
@endsection