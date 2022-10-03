<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ajolotes Saltarines</title>

</head>

<body style="font: oblique bold 125% cursive; text-align:center">

    <h1>LOGIN CON DOBLE FACTOR DE AUTENTICACION</h1>
    <h2>INGENIERIA DE SOFTWARE II</h2><hr>

    <a href="{{ url('/') }}"><input style="font: oblique bold 100% cursive;padding: 10px; margin: 10px" type="button" value="Pagina principal"></a>

    @guest

        @if (Route::has('login'))
            <a href="{{ route('login') }}"><input style="font: oblique bold 100% cursive;padding: 10px; margin: 10px" type="button" value="Iniciar Sesion"></a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}"><input style="font: oblique bold 100% cursive;padding: 10px; margin: 10px" type="button" value="Registrarse"></a>
        @endif

    @else
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <input style="font: oblique bold 100% cursive;padding: 10px; margin: 10px" type="button" value="Cerrar sesion">
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <hr>
            <p>¡Bienvenido {{ Auth::user()->name }}!</p>

    @endguest
                
    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>