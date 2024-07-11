@extends('layouts.app')
@extends('layouts.plantillabarra')

@section('title', 'Historias Clínicas')
@section('content')
<div class="container sectionindex">
    <h2>Historias Clínicas</h2>
    <p>Lista de historias clínicas</p>
    <!-- Formulario de búsqueda -->
    <form method="GET" action="{{ route('historiasclinicas.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por nombre de paciente"
                value="{{ $search }}">
            <button type="submit" class="btn btn-outline-secondary">Buscar</button>
        </div>
    </form>

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
                        <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}"
                            class="letraRosita">
                            {{ $historiaclinica->paciente ? $historiaclinica->paciente->nombre . ' ' . $historiaclinica->paciente->apellido : 'Sin paciente' }}
                        </a>
                    </td>
                    <td>
                        {{ $historiaclinica->medico ? $historiaclinica->medico->nombre . ' ' . $historiaclinica->medico->apellido : 'Sin médico' }}
                    </td>
                    <td>
                        {{ $historiaclinica->diagnostico }}
                    </td>
                    <td>
                        {{ $historiaclinica->tratamiento }}
                    </td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}"
                                class="btn btn-primary botonLoggin espacio">Ver Detalles</a>
                            <a href="{{ route('historiasclinicas.edit', $historiaclinica->id_historiaclinica) }}"
                                class="btn btn-outline-success espacio">Editar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('historiasclinicas.create') }}" class="btn btn-primary botonVerde espacio">Agregar historia
        clínica</a>
</div>
@endsection