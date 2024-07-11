@extends('layouts.app')
@extends('layouts.plantillabarra')

@section('title', 'Agregar turno')
@section('content')

<div class="container-lg sectionindex">
    <div class="card p-4">
        <h2 class="text-center mb-4">Agendar un turno</h2>
        <form action="{{ route('turnos.store') }}" method="post">
            @csrf
            <!-- Campo oculto para enviar el id_paciente -->
            <input type="hidden" name="id_paciente" id="paciente" class="form-control" value="{{ $pacienteId }}"
                required>

            <div class="mb-3">
                <label for="medico" class="form-label">Seleccione un médico:</label>
                <select name="id_medico" id="medico" class="form-select" required>
                    <option value="">Seleccione un médico</option>
                    @foreach($medicos as $medico)
                        <option value="{{ $medico->id_medico }}" {{ old('medico') == $medico->id_medico ? 'selected' : '' }}>
                            {{ $medico->nombre }} - {{ $medico->especialidad }}
                        </option>
                    @endforeach
                </select>
                @error('medico')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label"><i class="far fa-calendar-alt me-2"></i>Fecha</label>
                <input type="date" name="fecha" class="form-control" id="fecha" required value="{{ old('fecha') }}">
                @error('fecha')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label"><i class="far fa-clock me-2"></i>Hora</label>
                <input type="time" name="hora" class="form-control" id="hora" required value="{{ old('hora') }}">
                @error('hora')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <input type="submit" value="Agendar turno" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</div>

@endsection