@extends('layout.plantillapaciente')

@section('title', 'Detalles del Paciente')

@section('content')

<section class="container container-paciente sectionindex">
    <div class="row gap">
        <a href="{{ route('turnos.create') }}" class="col option d-flex flex-column justify-content-center">
            <img src="{{ asset('imagenes/estetoscopio.png') }}" class="img-option py-2" alt="Perfil" />
            <p>Solicitar un turno</p>
        </a>
        <a href="{{ route('turnos.index') }}" class="col option d-flex flex-column justify-content-center">
            <img src="{{ asset('imagenes/tiempo.png') }}" class="img-option py-2" alt="Perfil" />
            <p>Mis turnos</p>
        </a>
    </div>
    <div class="row gap">
        <a href="{{ route('pacientes.show', Auth::user()->id) }}"
            class="col option d-flex flex-column justify-content-center">
            <img src="{{ asset('imagenes/usuario.png') }}" class="img-option py-2" alt="Perfil" />
            <p>Mi perfil</p>
        </a>
    </div>
</section>

<div class="cuadroAnuncios">
    <section>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card text-center espacio">
                        <div class="card-header">
                            Anuncio
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vacunación Gratuita contra la Gripe</h5>
                            <p class="card-text">"¡Vacúnate gratis contra la gripe y protege tu salud! Visítanos hoy
                                mismo para recibir tu vacuna. ¡Prevenir la gripe es fácil y importante! ¡No esperes
                                más!"</p>
                        </div>
                        <div class="card-footer text-muted">
                            hace 2 días
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center espacio">
                        <div class="card-header">
                            Anuncio
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cuidado con el Dengue:</h5>
                            <p class="card-text">"¡Prevenir el dengue es tarea de todos! Elimina agua estancada, usa
                                repelente y busca atención médica si presentas síntomas. Juntos podemos detener el
                                dengue. ¡Cuida tu salud!"</p>
                        </div>
                        <div class="card-footer text-muted">
                            hace 5 días
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center espacio">
                        <div class="card-header">
                            Anuncio
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nuevos Horarios de Atención</h5>
                            <p class="card-text">"Atención comunidad: ¡Actualizamos nuestros horarios! A partir de
                                ahora, te atenderemos de lunes a viernes de 8:00 a.m. a 6:00 p.m. ¡Planifica tu visita
                                dentro de estos horarios! ¡Gracias por tu confianza!"</p>
                        </div>
                        <div class="card-footer text-muted">
                            hace 7 días
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection