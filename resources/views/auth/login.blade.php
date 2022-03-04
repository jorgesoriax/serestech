@extends('layouts.template')

@section('title', 'Iniciar sesión')

@section('scripts')
    <script src="{{ asset('storage/js/login.js') }}"></script>
@endsection

@section('content')
<div class="container-login">
    <div class="panel--logo">
        <img src="{{ asset('storage/images/panel-logo-large-b.svg') }}" alt="">
    </div>
    <div class="panel--login">
        @if($errors->any())
            <div class="message message--error">
                <h3>
                    Algo salió mal, intente de nuevo
                </h3>
                <p class="p--description">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <div>⛔</div>
            </div>
        @else
            <div class="message">
                <h3>
                    Bienvenido al panel de control
                </h3>
                <p class="p--description">
                    Para comenzar ingrese sus credenciales.
                </p>
                <div>⚙️</div>
            </div>
        @endif

        <form method="POST">
            @csrf
            <div class="input">
                <label for="text-a"><i class='bx bx-meh-blank'></i></label>
                <input name="email" id="text-a" type="email" required autofocus value="{{ old('email') }}" placeholder="Email" class="input--ow outl--blue-ow">
            </div>
    
            <div class="input">
                <label for="input--pass"><i class="bx bxs-lock-alt"></i></label>
                <input name="password" id="input--pass" type="password" required placeholder="Contraseña" class="input--ow outl--blue-ow">
                <i class="bx bxs-hide" id="icon--pass"></i>
            </div>
    
            <label class="checkbox">
                <input name="remember" type="checkbox">
                <div class="checkmark outl--blue-ow input--ow" tabindex="0"><i class='bx bx-check'></i></div>Mantener la sesión iniciada<br>
            </label>
    
            <input class="button--positive-ow" type="submit" value="Entrar">
        </form>
        
    </div>
</div>
@endsection