@extends('layouts.auth')

@section('content')
    <div class="text-center mb-4">
        <div class="h3 brand"><span class="text-white">OL&</span><span style="color:#3B82F6;">D</span></div>
        <div class="fw-bold text-white-50">HOLA BIENVENIDO ADMIN</div>
    </div>

    <div class="card shadow-sm p-3 p-md-4">
        <h5 class="text-center mb-3">Iniciar sesión</h5>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" required class="form-control">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Recordarme</label>
                </div>
                @if (Route::has('password.request'))
                    <a class="small ol-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>

            <button type="submit" class="btn btn-ol w-100">Entrar</button>
        </form>

        @if (Route::has('register'))
            <div class="text-center mt-3">
                <span class="text-white-50 me-1">¿Nuevo?</span>
                <a class="ol-link" href="{{ route('register') }}">Crear cuenta</a>
            </div>
        @endif
    </div>
@endsection
