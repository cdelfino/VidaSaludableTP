@extends('layout.plantilla')
@section('title', 'Historias Clinicas')
@section('content')
<div class="container">
    <h2>Historias Clinicas</h2>
    <p>Lista de historias clinicas</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Medico</th>
                <th scope="col">Diagnostico</th>
                <th scope="col">Tratamiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historiasclinicas as $historiaclinica)
                <tr>
                    <td>{{ $historiaclinica->paciente ? $historiaclinica->paciente->nombre : 'Sin paciente' }}</td>
                    <td>{{ $historiaclinica->medico ? $historiaclinica->medico->nombre : 'Sin medico' }}</td>
                    <td>{{ $historiaclinica->diagnostico }}</td>
                    <td>{{ $historiaclinica->tratamiento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('historiasclinicas.create') }}" class="btn btn-primary">Agregar historia clinica</a>
</div>
@endsection