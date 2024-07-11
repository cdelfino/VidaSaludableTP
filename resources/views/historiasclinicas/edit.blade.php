@extends('layouts.app')
@extends('layouts.plantillabarra')

@section('title', 'Editar historial clínico')

@section('content')
<section class="d-flex justify-content-center vh-100">
    <div class="container-lg sectionindex">
        <div class="card p-4">
            <h2 class="text-center mb-4">Formulario de edición de historial clínico</h2>
            <form action="{{ route('historiasclinicas.update', $historiaClinica->id_historiaclinica) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="id_paciente" id="paciente" class="form-control"
                    value="{{ $historiaClinica->id_paciente }}">
               
                <div class="mb-3">
                    <label for="tratamiento" class="form-label">Tratamiento:</label>
                    <input type="text" name="tratamiento" id="tratamiento" class="form-control"
                        value="{{ old('tratamiento', $historiaClinica->tratamiento) }}" required>
                    @error('tratamiento')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="diagnostico" class="form-label">Diagnóstico:</label>
                    <input type="text" name="diagnostico" id="diagnostico" class="form-control"
                        value="{{ old('diagnostico', $historiaClinica->diagnostico) }}" required>
                    @error('diagnostico')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="antecedentes_familiares" class="form-label">Antecedentes Familiares:</label>
                    <input type="text" name="antecedentes_familiares" id="antecedentes_familiares" class="form-control"
                        value="{{ old('antecedentes_familiares', $historiaClinica->antecedentes_familiares) }}">
                    @error('antecedentes_familiares')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="antecedentes_medicos" class="form-label">Antecedentes Médicos:</label>
                    <input type="text" name="antecedentes_medicos" id="antecedentes_medicos" class="form-control"
                        value="{{ old('antecedentes_medicos', $historiaClinica->antecedentes_medicos) }}">
                    @error('antecedentes_medicos')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div><input type="hidden" name="id_medico" id="medico" class="form-control" value="{{ $medicoId }}">

                <div class="mb-3">
                    <label for="examen_fisico" class="form-label">Examen Físico:</label>
                    <input type="text" name="examen_fisico" id="examen_fisico" class="form-control"
                        value="{{ old('examen_fisico', $historiaClinica->examen_fisico) }}">
                    @error('examen_fisico')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="derivaciones" class="form-label">Derivaciones:</label>
                    <input type="text" name="derivaciones" id="derivaciones" class="form-control"
                        value="{{ old('derivaciones', $historiaClinica->derivaciones) }}">
                    @error('derivaciones')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Historia Clínica</button>
            </form>
        </div>
    </div>
</section>
@endsection
