@extends('layouts.app')
@extends('layouts.plantillabarra')

@section('title', 'Mis Turnos')

@section('content')
<div class="event-schedule-area-two bg-color pad100 sectionindex">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Fecha</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Especialidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($turnos as $turno)
                                        <tr class="inner-box">
                                            <th scope="row">
                                                <div class="event-date">
                                                    <span>{{ \Carbon\Carbon::parse($turno->fecha)->format('d') }}</span>
                                                    <p>{{ \Carbon\Carbon::parse($turno->fecha)->format('F') }}</p>
                                                </div>
                                            </th>
                                            <td>
                                                <div class="event-wrap">
                                                    <h5>{{ $turno->medico->nombre }}</h5>
                                                    <div class="meta">
                                                        <div class="time">
                                                            <span>{{ $turno->hora }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $turno->medico->especialidad }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No tienes turnos agendados.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection