<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('build/assets/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Botón para abrir el menú lateral -->
        <div class="open-btn sectionindex" onclick="toggleSidebar()">&#9776;</div>

        <!-- Menú lateral -->
        <div class="sidebar" id="sidebar">
            <div class="sectionindex"></div>
            @if (Auth::check() && Auth::user()->id_rol == 2)
                <a href="{{ route('medicos.index') }}" onclick="toggleSidebar()">Inicio</a>
                @if(isset($medico))
                    <a href="{{ route('medicos.show', $medico->id_medico) }}" onclick="toggleSidebar()">Perfil</a>
                    <a href="{{ route('turnos.show', $medico->id_medico) }}" onclick="toggleSidebar()">Turnos</a>
                @endif
                <a href="{{ route('historiasclinicas.index') }}" onclick="toggleSidebar()">Historial Médico</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            @elseif (Auth::check() && Auth::user()->id_rol == 3)
                <a href="{{ route('pacientes.index') }}" onclick="toggleSidebar()">Inicio</a>
                <a href="{{ route('pacientes.show', Auth::user()->id) }}" onclick="toggleSidebar()">Mi perfil</a>
                <a href="{{ route('turnos.create', ['paciente' => Auth::user()->id]) }}" onclick="toggleSidebar()">Solicitar
                    un turno</a>
                <a href="{{ route('turnos.index', ['paciente' => Auth::user()->id]) }}" onclick="toggleSidebar()">Mis
                    turnos</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
            @endif
        </div>

        <!-- Contenido Principal -->

    </div>

    <script>
        /* Barra lateral */
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
        }

        /* Función para las secciones del menú */
        function mostrarSeccion(seccion) {
            var secciones = ["perfil", "historialMedico", "turnos", "cerrarSesion"];
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