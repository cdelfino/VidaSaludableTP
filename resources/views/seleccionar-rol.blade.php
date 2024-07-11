@extends('layouts.app')
@section('title', 'Registro rol')
@section('content')

<body>
  <img src="imagenes/inicioPyD.png" alt="InicioPacientes/Doctor" class="bannesSecciones w-100" />
  <section class="container container-paciente sectionindex">
    <div>
      <div class="volver-btn-iniciarsesion">
        <a href="index.html" class="btn btn-outline-success espacio">Volver</a>
      </div>
      <div class="row gap">
        <a href="{{ route('register-paciente') }}" class="col option d-flex flex-column justify-content-center">
          <img src="imagenes/usuario.png" class="img-option py-2" alt="Perfil" />
          <p>Paciente</p>
        </a>
        <a href="{{ route('register-doctor') }}" class="col option d-flex flex-column justify-content-center">
          <img src="imagenes/estetoscopio.png" class="img-option py-2" alt="Perfil" />
          <p>Doctor</p>
        </a>
      </div>
    </div>
  </section>

</body>

</html>
@endsection