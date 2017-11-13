<?php function activeMenu($url) {
    return request()->is($url) ? 'active' : '';
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Sitio</title>
    <style>
        .active {
            text-decoration: none;
            color: orange;
        }
        .error {
            color: red;
            font-weight: 700;
            font-size: 12px;
        }
        .aprobado {
            background-color: #fff;
        }
    </style>
</head>
<body>

    <header>        
        <nav>
            <a class="{{ activeMenu('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('mensajes/create') ? 'active' : '' }}" href="{{ route('mensajes.create') }}">Contacto</a>
            @if (auth()->check())
                <a class="{{ activeMenu('mensajes') ? 'active' : '' }}" href="{{ route('mensajes.index') }}">Mensajes</a>
                <a href="logout">Cerrar Sesión de {{ auth()->user()->email }}</a>
            @endif    
            @if(auth()->guest())
                <a class="{{ activeMenu('login') }}" href="login">Login</a>
            @endif

        </nav>
    </header>

    @yield('content')

    <footer>Copyright ® {{ date('Y') }} </footer>

</body>
</html>