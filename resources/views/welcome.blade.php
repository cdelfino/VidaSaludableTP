<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VidaSaludable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/estilos.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"><img src="imagenes/icono.png" alt=""> VidaSaludable</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">¿Quienes somos?</a>
                    </li>
                </ul>
                <form class="d-flex">
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->id_rol == 2)
                                <a href="{{ url('/medicos') }}" class="btn btn-outline-success espacio" role="button">Dashboard</a>
                            @elseif (Auth::user()->id_rol == 3)
                                <a href="{{ url('/pacientes') }}" class="btn btn-outline-success espacio"
                                    role="button">Dashboard</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-success espacio" role="button">Iniciar
                                sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-success espacio" role="button">Registro</a>
                            @endif
                        @endauth
                    @endif
                </form>
            </div>
        </div>
    </nav>
    <header></header>

    <section class="infoBloque sectionindex" id="servicios">
        <div class="container">
            <div class="row align-items-start">
                <div class="col bloque" style="background-color: #d79cf7;">
                    <div class="content">
                        <a>
                            <img src="{{ asset('imagenes/cardiologia.png') }}" alt="">
                            <p>Cardiología</p>
                        </a>
                    </div>
                </div>
                <div class="col bloque" style="background-color: #9a58bd;">
                    <div class="content">
                        <a>
                            <img src="{{ asset('imagenes/psiquiatria.png') }}" alt="">
                            <p>Psiquiatría</p>
                        </a>
                    </div>
                </div>
                <div class="col bloque" style="background-color: #7910b1;">
                    <div class="content">
                        <a>
                            <img src="{{ asset('imagenes/medicoClinico.png') }}" alt="">
                            <p>Médico clínico</p>
                        </a>
                    </div>
                </div>
                <div class="col bloque" style="background-color: #49026f;">
                    <div class="content">
                        <a>
                            <img src="{{ asset('imagenes/neurologia.png') }}" alt="">
                            <p>Neurología</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sectionindex">
        <div class="container">
            <div class="row align-items-start">
                <div class="col espacio">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('imagenes/calendario.png') }}" alt="calendario" class="icono">
                        </div>
                        <div class="col">
                            <h2>Reserva de Turnos en Línea</h2>
                            <p>Reserva tus citas médicas en línea de forma rápida y sencilla. Encuentra disponibilidad,
                                elige tu médico y confirma tu cita.</p>
                        </div>
                    </div>
                </div>
                <div class="col espacio">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('imagenes/reloj.png') }}" alt="reloj" class="icono">
                        </div>
                        <div class="col">
                            <h2>Recordatorios Automáticos</h2>
                            <p>Recibe recordatorios automáticos por correo o mensaje de texto para no olvidar ninguna
                                cita médica.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col espacio">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('imagenes/enfermera.png') }}" alt="enfermera" class="icono">
                        </div>
                        <div class="col">
                            <h2>Gestión Flexible de Turnos</h2>
                            <p>Visualiza y administra tus citas médicas de manera fácil y conveniente.</p>
                        </div>
                    </div>
                </div>
                <div class="col espacio">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('imagenes/telefono.png') }}" alt="telefono" class="icono">
                        </div>
                        <div class="col">
                            <h2>Soporte al Cliente Personalizado</h2>
                            <p>Nuestro equipo de soporte está aquí para ayudarte con cualquier pregunta o problema.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9926695397544!2d-58.39857512441463!3d-34.60434687295403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sDa%20Vinci%20%7C%20Primera%20Escuela%20de%20Arte%20Multimedial!5e0!3m2!1ses!2sar!4v1715259682947!5m2!1ses!2sar"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="sectionindex cuadroAnuncios">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('imagenes/enfoque.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuestro enfoque</h5>
                            <p class="card-text">Nos enfocamos en crear un entorno donde pacientes y médicos puedan
                                interactuar de manera eficiente y segura. Priorizamos la calidad y la accesibilidad en
                                la gestión de turnos médicos, adaptándonos siempre a las necesidades de nuestra
                                comunidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('imagenes/mision.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuestra misión</h5>
                            <p class="card-text">Nuestra misión es brindar atención médica de calidad y compasiva a toda
                                nuestra comunidad. Nos esforzamos por ser líderes en el campo de la salud, ofreciendo
                                servicios innovadores y adaptados a las necesidades de nuestros pacientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('imagenes/valores.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuestros valores</h5>
                            <p class="card-text">Integridad, compromiso y excelencia son los valores que guían todas
                                nuestras acciones. Estamos dedicados a proporcionar servicios de salud con la mayor
                                calidad posible, siempre poniendo al paciente en el centro de todo lo que hacemos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <section class="sectionindex">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/bannerCarusel.png" class="d-block w-100" alt="título de bolso en carusel">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/bannerCarusel2.png" class="d-block w-100" alt="item bolso en carusel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionindex "></section>
    <footer class="pie">
        <div class="container text-center">
            <div class="row align-items-end">
                <div class="col">
                    <ul>
                        <li>
                            <a href="mailto:constanza.delfino@davinci.edu.ar" target="new">
                                Contacta con desarrolladora Delfino Constanza
                                <img src="imagenes/gmail_5968534.png" alt="ícono de gmail" height="25">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <a href="mailto:sandra.leonardelli@davinci.edu.ar" target="new">
                                Contacta con desarrolladora Leonardelli Sofia
                                <img src="imagenes/gmail_5968534.png" alt="ícono de gmail" height="25">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>
                            <a href="mailto:mariana.sosa@davinci.edu.ar" target="new">
                                Contacta con desarrolladora Sosa Nazarena
                                <img src="imagenes/gmail_5968534.png" alt="ícono de gmail" height="25">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <small>
                    Todos los derechos reservados - Grupo NPCs <br>
                    PP:Producción Web - Bruno Cano <br>
                    Copyright &copy; 2024
                </small>
            </div>
        </div>
    </footer>
</body>

</html>