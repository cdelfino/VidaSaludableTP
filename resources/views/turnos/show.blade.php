@extends('layouts.app')
@extends('layouts.plantillabarra')

@section('title', 'Mis Turnos')

@section('content')
<section class="container cuadro-doctor sectionindex my-4">
    <div class="card">

    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table">
                <tr>
                    <th class="text-center">Paciente</th>
                    <th class="text-center">Hora</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turnos as $turno)
                    <tr>
                        <td>{{ $turno->paciente->nombre }} {{ $turno->paciente->apellido }}</td>
                        <td class="text-center">{{ $turno->hora }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-success btn-sm"
                                href="{{ route('historiasclinicas.show', $turno->historia_clinica_id) }}">Ver
                                historial médico</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
@endsection