@extends('layout.plantillamedico')

@section('title', 'Perfil del Paciente')

@section('content')
<section class="container container-perfilpaciente sectionindex">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1095249842.jpg"
                            alt="Admin" class="rounded-circle" width="150" />
                        <div class="mt-3">
                            <h4>Bruno Oscar Cano</h4>
                            <p class="text-secondary mb-1">Doctor</p>
                            <p class="text-muted font-size-sm">Buenos Aires, Argentina</p>
                            <a class="btn btn-outline-success" href="verTurnosDoctor.html">Ver turnos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nombre y Apellido</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $medico->nombre }} {{ $medico->apellido }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Especialidad</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{$medico->especialidad}}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Teléfono</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $medico->telefono }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Habilitado en</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Buenos Aires, Argentina
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-outline-success" target="__blank"
                                href="{{ route('medicos.edit', $medico->id_medico) }}">Editar mis datos
                                personales</a><a class="btn btn-outline-success mx-3"
                                href="{{ route('users.edit', Auth::user()->id) }}">
                                Editar datos de cuenta
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>

@endsection