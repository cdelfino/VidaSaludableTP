<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>VidaSaludable</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/icono.ico') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bannesColorDoctorArriba">
        <div class="container-fluid">
            <div class="navbar-collapse collapse justify-content-end" id="navbarText">
                <a class="marca" href="{{ route('medicos.index') }}"><img src="{{ asset('imagenes/icono.png') }}"
                        alt="">
                    VidaSaludable</a>
                <span class="navbar-text">
                    Médico
                </span>
            </div>
        </div>
    </nav>
    <main>@yield('content')</main>

    <!-- Botón para abrir el menú lateral -->
    <div class="open-btn" onclick="toggleSidebar()">&#9776;</div>

    <!-- Menú lateral -->
    <div class="sidebar" id="sidebar">
        <a href="{{ route('medicos.index') }}" onclick="toggleSidebar()">Inicio</a>
        <a href="{{ route('medicos.show', auth()->user()->id) }}" onclick="toggleSidebar()">Perfil</a>
        <a href="{{ route('historiasclinicas.index') }}" onclick="toggleSidebar()">Historial Médico</a>
        <a href="{{ route('turnos.show', auth()->user()->id) }}" onclick="toggleSidebar()">Turnos</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <!-- Función para alternar la visibilidad del menú lateral -->
    <script>
        /* Barra lateral */
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
        }
    </script>
</body>

</html>