@extends('layouts.app')
@extends('layouts.plantillabarra')
@section('title', 'Editar Información Personal')
@section('content')

<div class="container-lg sectionindex">
    <div class="card p-4">
        <h2 class="text-center mb-4">Editar Información Personal</h2>
        <form action="{{ route('medicos.update', $medico->id_medico) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                    value="{{ old('nombre', $medico->nombre) }}" required>
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control"
                    value="{{ old('apellido', $medico->apellido) }}" required>
                @error('apellido')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" id="especialidad" name="especialidad" class="form-control"
                    value="{{ old('email', $medico->especialidad) }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control"
                    value="{{ old('telefono', $medico->telefono) }}">
                @error('telefono')
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