@extends('layouts.app')
@extends('layouts.plantillabarra')
@section('content')
<div class="container sectionindex">
    <h2>Historias Clínicas</h2>
    <p>Lista de pacientes</p>    
    <a href="{{ route('historiasclinicas.create') }}" class="btn btn-primary botonVerde espacio">Agregar historia clínica</a> 

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Diagnóstico</th>
                <th scope="col">Tratamiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- @foreach ($historiasclinicas as $historiaclinica)-->
            <tr>
                <td>
                    <a href="{{ route('register') }}" class="letraRosita">
                         <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}" class="letraRosita">
                         {{ $historiaclinica->paciente ? $historiaclinica->paciente->nombre . ' ' . $historiaclinica->paciente->apellido : 'Sin paciente' }}        
                        <!-- <p>Fulanito</p> -->
                    </a>
                </td>
                <td>
                  <!--  <p>El que sabe</p>  -->
                    {{ $historiaclinica->medico ? $historiaclinica->medico->nombre . ' ' . $historiaclinica->medico->apellido : 'Sin médico' }}
                </td>
                <td>
                    <!--  <p>Tiene extra estres, parece un mapache/panda, y no se expresa con claridad en idioma humano</p> -->
                      {{ $historiaclinica->diagnostico }}
                </td>
                <td>
                   <!-- <p>Un mes de descanso ininterrumpido</p> -->
                    {{ $historiaclinica->tratamiento }}
                </td>
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('historiasclinicas.show', $historiaclinica->id_historiaclinica) }}" class="btn btn-primary botonLoggin espacio">Ver Detalles</a>
                        <a href="{{ route('historiasclinicas.edit', $historiaclinica->id_historiaclinica) }}" class="btn btn-outline-success espacio">Editar</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    



</div>
@endsection