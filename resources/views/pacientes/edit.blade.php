@extends('layouts.app')
@extends('layouts.plantillabarra')
@section('title', 'Editar Información Personal')
@section('content')

<div class="container-lg sectionindex">
    <div class="card p-4">
        <h2 class="text-center mb-4">Editar Información Personal</h2>
        <form action="{{ route('pacientes.update', $paciente->id_paciente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                    value="{{ old('nombre', $paciente->nombre) }}" required>
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control"
                    value="{{ old('apellido', $paciente->apellido) }}" required>
                @error('apellido')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label"><i class="far fa-calendar-alt me-2"></i>Fecha de
                    Nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"
                    value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento) }}" required>
                @error('fecha_nacimiento')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control"
                    value="{{ old('telefono', $paciente->telefono) }}">
                @error('telefono')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">Teléfono</label>
                <input type="text" id="dni" name="dni" class="form-control" value="{{ old('dni', $paciente->dni) }}">
                @error('dni')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="obra_social" class="form-label">Teléfono</label>
                <input type="text" id="obra_social" name="obra_social" class="form-control"
                    value="{{ old('obra_social', $paciente->obra_social) }}">
                @error('dni')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control"
                    value="{{ old('direccion', $paciente->direccion) }}">
                @error('direccion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="text-center">
                <input type="submit" value="Guardar Cambios" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</div>

@endsection