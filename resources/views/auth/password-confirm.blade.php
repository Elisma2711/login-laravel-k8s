@extends('layouts.app')

@section('content')
    
    <hr><p>
        Te encuentras en el formulario de CONFIRMACION DE CONTRASEÑA.
        Vuelva a ingresar su contraseña para continuar.
    </p><hr> 

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <label style="font: oblique bold 125% cursive;padding: 5px; margin: 10px">Contraseña:</label>

            <input style="font: oblique bold 100% cursive" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <hr><button type="submit" style="font: oblique bold 100% cursive;padding: 10px; margin: 5px">
            Confirmar contrseña
        </button>


    </form>

@endsection