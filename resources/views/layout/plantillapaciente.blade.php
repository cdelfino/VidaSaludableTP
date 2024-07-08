<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/icono.ico') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bannesColorPacienteArriba">
        <div class="container-fluid">
            <div class="navbar-collapse collapse justify-content-end" id="navbarText">
                <a class="marca" href="{{ route('pacientes.index') }}"><img src="{{ asset('imagenes/icono.png') }}"
                        alt="">
                    VidaSaludable</a>
                <span class="navbar-text">Paciente</span>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>
    <div class="contenido">
        <!-- Botón del menú -->
        <div class="open-btn" onclick="toggleSidebar()">&#9776;</div>

        <!-- Menú lateral -->
        <div class="sidebar" id="sidebar">
            <a href="{{ route('pacientes.index') }}">Inicio</a>
            <a href="miPerfil.html">Mi perfil</a>
            <a href="{{ route('turnos.create') }}">Solicitar un turno</a>
            <a href="{{ route('turnos.index') }}">Mis turnos</a>
            <a href="index.html">Cerrar sesión</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        /* Barra lateral */
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
        }

        /* Función para las secciones del menú */
        function mostrarSeccion(seccion) {
            var secciones = [
                "perfil",
                "solicitarTurno",
                "misTurnos",
                "cerrarSesion",
            ];
            secciones.forEach(function (item) {
                var element = document.getElementById(item);
                if (item === seccion) {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
        }
    </script>
</body>

</html>