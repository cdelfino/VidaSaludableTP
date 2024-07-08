@extends('layout.plantilla')
@section('title', 'Turnos')
@section('content')
<div class="container">
    <h2>Medicos</h2>
    <p>Lista de medicos</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Especialidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->especialidad }}</td>
                </tr>
            @endforeach
        </tbody>
</div>
@endsection