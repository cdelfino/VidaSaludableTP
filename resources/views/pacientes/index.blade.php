@extends('layout.plantilla')
@section('title', 'Pacientes')
@section('content')<div class="container">
<h2>Pacientes</h2>
<p>Lista de pacientes</p>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
            <tr>
                <th scope="row">{{ $paciente->id }}</th>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->email }}</td>
                <td>
                    <a href="{{ route('pacientes.show', $paciente) }}" class="btn btn-primary">Ver</a>
                    <a href="{{ route('pacientes.edit', $paciente) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('pacientes.create') }}" class="btn btn-primary">Agregar paciente</a>
</div>