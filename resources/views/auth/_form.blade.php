<div class="text-center mb-4">
    <div class="h3 brand"><span class="text-white">OL&amp;</span><span style="color:#3B82F6;">D</span></div>
    <div class="fw-bold text-white-50">HOLA BIENVENIDO ADMIN</div>
</div>

<div class="card shadow-sm p-3 p-md-4">
    <h5 class="text-center mb-3">
        {{ $mode === 'register' ? 'Crear cuenta' : 'Iniciar sesión' }}
    </h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ $mode === 'register' ? route('register') : route('login') }}">
        @csrf

        @if ($mode === 'register')
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="form-control" autofocus>
        </div>

        <div class="mb-2">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" required class="form-control">
        </div>

        @if ($mode === 'register')
            <div class="mb-3">
                <label class="form-label">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" required class="form-control">
            </div>
        @endif

        @if ($mode !== 'register')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Recordarme</label>
                </div>
                @if (Route::has('password.request'))
                    <a class="small ol-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
        @endif

        <button type="submit" class="btn btn-ol w-100">
            {{ $mode === 'register' ? 'Crear cuenta' : 'Entrar' }}
        </button>
    </form>

    <div class="text-center mt-3">
        @if ($mode === 'register')
            <span class="text-white-50 me-1">¿Ya tienes cuenta?</span>
            <a class="ol-link" href="{{ route('login') }}">Inicia sesión</a>
        @else
            @if (Route::has('register'))
                <span class="text-white-50 me-1">¿Nuevo?</span>
                <a class="ol-link" href="{{ url('register') }}">Crear cuenta</a>
            @endif
        @endif
    </div>
</div>
