@extends('layouts.app')

@section('content')
<div class="registro">
    <div class="container-loggin">
        <div class="volver-btn volver-btn-loggin ">
            <a href="{{ route('welcome') }}" class="btn btn-outline-success espacio">Volver</a>
        </div>
        <div class="login-form">
            <h2>Registro</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <!--  <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                    <div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Nombre de usuario">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <!--  <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Correo electrónico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                    <div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                    <div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirmar cotraseña">
                    </div>
                </div>

                <div>
                    <div>
                        <button type="submit" class="btn btn-primary botonLoggin">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="image-container-registro"></div>
    </div>

</div>

@endsection