@extends('layouts.app')
@extends('layouts.plantillabarra')
@section('title', 'Perfil del Paciente')

@section('content')
<div class="container container-perfilpaciente sectionindex">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1095249842.jpg"
                            alt="Paciente" class="rounded-circle" width="150" />
                        <div class="mt-3">
                            <h4>{{ $paciente->nombre }} {{ $paciente->apellido }}</h4>
                            <p class="text-secondary mb-1">Paciente</p>
                            <a class="btn btn-outline-success" href="{{ route('turnos.index') }}">Ver turnos</a>
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
                        <div class="col-sm-9 text-secondary">{{ $paciente->nombre }} {{ $paciente->apellido }}</div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">DNI</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <div class="col-sm-9 text-secondary">{{ $paciente->dni }}</div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Fecha de Nacimiento</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $paciente->fecha_nacimiento }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Dirección</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $paciente->direccion }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Teléfono</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $paciente->telefono }}</div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">DNI</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <div class="col-sm-9 text-secondary">{{ $paciente->obra_social }}</div>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-outline-success"
                                href="{{ route('pacientes.edit', Auth::user()->paciente->id_paciente) }}">
                                Editar información personal
                            </a>
                            <a class="btn btn-outline-success mx-3" href="{{ route('users.edit', Auth::user()->id) }}">
                                Editar datos de cuenta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection