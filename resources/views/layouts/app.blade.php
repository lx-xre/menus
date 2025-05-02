<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menús</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .nav-link.active {
            font-weight: bold;
            background-color: #e2e6ea;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">Menús</a>
        <div class="d-flex">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
            <a class="nav-link {{ request()->is('fotos') ? 'active' : '' }}" href="{{ route('fotos') }}">Fotos</a>
            <a class="nav-link {{ request()->is('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <small>Actividad realizada por Lore Juarez ^-^ Desarrollo Web</small>
    </footer>
</body>
</html>
