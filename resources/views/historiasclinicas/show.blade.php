@extends('layout.plantillamedico')
@section('title', 'Historial Médico del Paciente')

@section('content')
<section class="container mt-5 historiales">
    <div>
        <div class="row historialMedico">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-start-lg border-start-primary">
                    <div class="card-header">
                        <h4>Datos paciente</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Nombre y Apellido:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->nombre . ' ' . $historiaclinica->paciente->apellido : 'No disponible' }}
                            </li>
                            <li><strong>DNI:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->dni : 'No disponible' }}
                            </li>
                            <li><strong>Sexo:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->sexo : 'No disponible' }}
                            </li>
                            <li><strong>Fecha de Nacimiento:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->fecha_nacimiento : 'No disponible' }}
                            </li>
                            <li><strong>Domicilio:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->domicilio : 'No disponible' }}
                            </li>
                            <li><strong>Provincia:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->provincia : 'No disponible' }}
                            </li>
                            <li><strong>Teléfono/Celular:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->telefono : 'No disponible' }}
                            </li>
                            <li><strong>Obra Social:</strong>
                                {{ $historiaclinica->paciente ? $historiaclinica->paciente->obra_social : 'No disponible' }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-start-lg border-start-success">

                    <div class="card-header">
                        <h4>Antecedentes familiares</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $historiaclinica->antecedentes_familiares ?? 'No disponible' }}
                        </p>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-start-lg border-start-success">

                    <div class="card-header">
                        <h4>Antecedentes Médicos</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $historiaclinica->antecedentes_medicos ?? 'No disponible' }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                <h4>Examen Físico</h4>
            </div>
            <div class="card-body">
                <p>{{ $historiaclinica->examen_fisico ?? 'No disponible' }}
                </p>

            </div>
        </div>
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                <h4>Diagnostico</h4>
            </div>
            <div class="card-body">
                <p>
                    {{ $historiaclinica->diagnostico ?? 'No disponible' }}
                </p>
            </div>
        </div>
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                <h4>Tratamiento</h4>
            </div>
            <div class="card-body">
                <p>
                    {{ $historiaclinica->tratamiento ?? 'No disponible' }}
                </p>
            </div>
        </div>
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                <h4>Derivaciones</h4>
            </div>
            <div class="card-body">
                <p>
                    {{ $historiaclinica->derivaciones ?? 'No disponible' }}
                </p>
            </div>
        </div>
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                <h4>Médico</h4>
            </div>
            <div class="card-body">
                <p>
                    {{ $historiaclinica->medico ? $historiaclinica->medico->nombre . ' ' . $historiaclinica->medico->apellido : 'No disponible' }}
                </p>
            </div>
        </div>
    </div>

    </div>
    <div class="mx-auto">
        <a href="{{ route('historiasclinicas.index') }}" class="btn btn-outline-success espacio">Volver a la lista</a>
        <a href="{{ route('historiasclinicas.edit', $historiaclinica->id_historiaclinica) }}"
            class="btn btn-outline-success espacio">Editar</a>
    </div>
    </div>
    </div>
</section>
@endsection