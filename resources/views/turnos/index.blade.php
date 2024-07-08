@extends('layout.plantilla')
@section('title', 'Turnos')
@section('content')
<div class="container">
    <h2>Turnos</h2>
    <p>Lista de turnos</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Paciente</th>
                <th scope="col">Medico</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($turnos as $turno)
                <tr>
                    <td>{{ $turno->fecha }}</td>
                    <td>{{ $turno->paciente ? $turno->paciente->nombre : 'Sin paciente' }}</td>
                    <td>{{ $turno->medico ? $turno->medico->nombre : 'Sin medico' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('turnos.create') }}" class="btn btn-primary">Agregar turno</a>
</div>
@endsection