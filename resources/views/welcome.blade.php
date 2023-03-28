<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajolotes Saltarines</title>

    </head>

    <body style="font: oblique bold 125% cursive; text-align:center">

        <h1>PROGRAMACION</h1>

        @if (Route::has('login'))

            @auth

                <p>
                    Te encuentras en la PAGINA PRINCIPAL, 
                    como ya has iniciado sesion la unica opcion disponible
                    aqui es volver al HOME
                </p><hr>
            
                <a href="{{ url('/home') }}"><input style="font: oblique bold 150% cursive;padding: 10px; margin:100px" type="button" value="Home"></a>
            
            @else

                <p>
                    Te encuentras en la PAGINA PRINCIPAL, 
                    donde pordras acceder en tu cuenta o, 
                    en caso de no tener una, crearla.
                </p><hr>

                <a href="{{ route('login') }}"><input style="font: oblique bold 150% cursive;padding: 10px; margin:100px" type="button" value="Iniciar sesion"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><input style="font: oblique bold 150% cursive;padding: 10px; margin:100px" type="button" value="Registrarse"></a>
                @endif

            @endauth

        @endif

        <div style="position: absolute; bottom: 0; width: 98.75%">
            <hr><h3 style="position: relative; bottom: 0">CREADORES: Los ajolotes saltarines</h3>
            <h4 style="position: relative; bottom: 0">Santiago Spandonari e Ismael Aloy</h4>
        </div>
        

    </body>
</html>
