@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Historia Clínica</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('historiasclinicas.update', $historiaClinica->id_historiaclinica) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_paciente">Paciente</label>
            <select class="form-control" id="id_paciente" name="id_paciente" required>
                <option value="">Seleccione un paciente</option>
                @foreach($paciente as $p)
                    <option value="{{ $p->id_paciente }}" {{ $p->id_paciente == $historiaClinica->id_paciente ? 'selected' : '' }}>
                        {{ $p->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_medico">Médico</label>
            <select class="form-control" id="id_medico" name="id_medico" required>
                <option value="">Seleccione un médico</option>
                @foreach($medico as $m)
                    <option value="{{ $m->id_medico }}" {{ $m->id_medico == $historiaClinica->id_medico ? 'selected' : '' }}>
                        {{ $m->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tratamiento">Tratamiento</label>
            <textarea class="form-control" id="tratamiento" name="tratamiento"
                required>{{ old('tratamiento', $historiaClinica->tratamiento) }}</textarea>
        </div>

        <div class="form-group">
            <label for="diagnostico">Diagnóstico</label>
            <textarea class="form-control" id="diagnostico" name="diagnostico"
                required>{{ old('diagnostico', $historiaClinica->diagnostico) }}</textarea>
        </div>

        <div class="form-group">
            <label for="antecedentes_familiares">Antecedentes Familiares</label>
            <textarea class="form-control" id="antecedentes_familiares"
                name="antecedentes_familiares">{{ old('antecedentes_familiares', $historiaClinica->antecedentes_familiares) }}</textarea>
        </div>

        <div class="form-group">
            <label for="antecedentes_medicos">Antecedentes Médicos</label>
            <textarea class="form-control" id="antecedentes_medicos"
                name="antecedentes_medicos">{{ old('antecedentes_medicos', $historiaClinica->antecedentes_medicos) }}</textarea>
        </div>

        <div class="form-group">
            <label for="examen_fisico">Examen Físico</label>
            <textarea class="form-control" id="examen_fisico"
                name="examen_fisico">{{ old('examen_fisico', $historiaClinica->examen_fisico) }}</textarea>
        </div>

        <div class="form-group">
            <label for="derivaciones">Derivaciones</label>
            <textarea class="form-control" id="derivaciones"
                name="derivaciones">{{ old('derivaciones', $historiaClinica->derivaciones) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Historia Clínica</button>
    </form>
</div>
@endsection