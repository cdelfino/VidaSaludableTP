@extends('layouts.app')
@extends('layouts.plantillabarra')
@section('content')
<section class="container container-paciente sectionindex">
    <div class="row gap">

        <a href="{{ route('historiasclinicas.index') }}" class="col option d-flex flex-column justify-content-center">
            <img src="imagenes/estetoscopio.png" class="img-option py-2" alt="Perfil" />
            <p>Historiales médicos</p>
        </a>
        <a href="{{ route('turnos.show', $medico->id_medico) }}"
            class="col option d-flex flex-column justify-content-center">
            <img src="imagenes/tiempo.png" class="img-option py-2" alt="Perfil" />
            <p>Turnos</p>
        </a>

    </div>
    <div class="row gap">
        <a href="{{ route('medicos.show', $medico->id_medico) }}"
            class="col option d-flex flex-column justify-content-center">
            <img src="imagenes/usuario.png" class="img-option py-2" alt="Perfil" />
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
                            <h5 class="card-title">Conferencia Médica Especializada</h5>
                            <p class="card-text">"¡Conferencia médica sobre cardiología el 21 de mayo! Destacados
                                expertos compartirán sus conocimientos. ¡Inscríbete ahora!"</p>
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
                            <h5 class="card-title">Recordatorio de Reunión de Equipo</h5>
                            <p class="card-text">"Reunión de Equipo Médico el 12 de mayo a las 18:30hs. Discutiremos
                                casos y protocolos actualizados. ¡Tu presencia es vital!"</p>
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
                            <h5 class="card-title">Oportunidad de Investigación Clínica</h5>
                            <p class="card-text">"¡Participa en ensayos clínicos innovadores en el Hospital DaVinci!
                                Comunícate con el departamento de investigación médica."</p>
                        </div>
                        <div class="card-footer text-muted">
                            hace 7 días
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection