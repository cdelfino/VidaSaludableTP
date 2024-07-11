@extends('layouts.app')

@section('content')
<div class="registro">
    <div class="container-loggin">
        <div class="volver-btn volver-btn-loggin ">
            <a href="{{ route('welcome') }}" class="btn btn-outline-success espacio">Volver</a>
        </div>
        <div class="login-form">
            <h2>Iniciar sesión</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <!-- <div>
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
                    </div> -->
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Correo electrónico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <!-- <div>
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                    </div> -->
                    <div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary botonLoggin">
                        {{ __('Iniciar sesion') }}
                    </button>
                </div>

                <div>
                    <!--<div class="register-link espacio">
                    @if (Route::has('password.request'))
                    <a class=" btn-link" href="{{ route('password.request') }}">
                        {{ __('¿No recuerdas tu contraseña?') }}
                    </a>
                    @endif
                
                </div>
                </div> -->
            </form>
            <div class="register-link espacio">
                <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
    <div class="image-container"></div>
</div>
@endsection