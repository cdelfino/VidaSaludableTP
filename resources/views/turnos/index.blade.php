@extends('layout.plantillapaciente')
@section('title', 'Turnos')
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
                                        <th scope="col">Consultorio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>16</span>
                                                <p>Mayo</p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h5>Dr. Gustavo Arias</h5>
                                                <div class="meta">
                                                    <div class="time">
                                                        <span>05:35 PM - 07:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Cardiología</td>
                                        <td>Consultorio 4</td>
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>18</span>
                                                <p>Mayo</p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h5>Dra. Laura Gómez</h5>
                                                <div class="meta">
                                                    <div class="time">
                                                        <span>10:25 AM - 11:30 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Cardiología</td>
                                        <td>Consultorio 6</td>
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>26</span>
                                                <p>Junio</p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h5>Dr. Alejandro Pérez</h5>
                                                <div class="meta">
                                                    <div class="time">
                                                        <span>05:15 PM - 06:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Neurología</td>
                                        <td>Consultorio 10</td>
                                    </tr>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>06</span>
                                                <p>Julio</p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h5>Dr. Manuel Sánchez</h5>
                                                <div class="meta">
                                                    <div class="time">
                                                        <span>08:35 AM - 9:30 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Gastroenterología</td>
                                        <td>Consultorio 2</td>
                                    </tr>
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