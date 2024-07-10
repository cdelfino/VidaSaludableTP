@extends('layout.plantillamedico')
@section('title', 'Historias Clínicas')
@section('content')
<div class="container">
    <h2>Historias Clínicas</h2>
    <p>Lista de historias clínicas</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Diagnóstico</th>
                <th scope="col">Tratamiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historiasclinicas as $historiaclinica)
                <tr>
                    <td>
                        <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}">
                            {{ $historiaclinica->paciente ? $historiaclinica->paciente->nombre . ' ' . $historiaclinica->paciente->apellido : 'Sin paciente' }}
                        </a>
                    </td>
                    <td>{{ $historiaclinica->medico ? $historiaclinica->medico->nombre . ' ' . $historiaclinica->medico->apellido : 'Sin médico' }}
                    </td>
                    <td>{{ $historiaclinica->diagnostico }}</td>
                    <td>{{ $historiaclinica->tratamiento }}</td>
                    <td>
                        <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}"
                            class="btn btn-primary">Ver Detalles</a>


                        <a href="{{ route('historiasclinicas.edit', $historiaclinica->id_historiaclinica) }}"
                            class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('historiasclinicas.create') }}" class="btn btn-primary">Agregar historia clínica</a>
</div>
@endsection