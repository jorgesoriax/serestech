@extends('layouts.template')

@section('title', 'Login panel')

@section('scripts')
    <script src="../resources/js/main.js"></script>
@endsection

@section('content')

<body id="login-panel">
    <div id="panel--logo">
        <img src="../resources/img/panel-logo-large-b.svg" alt="">
    </div>
    <div id="panel--login">
            
        <div class="message">
            <h3>
                Bienvenido al panel de control
            </h3>
            <p class="p--description">
                Para iniciar ingrese sus credenciales
            </p>
            <div>🥑</div>
        </div>

        <form action="#">
            <div class="input">
                <label for="text-a"><i class="bx bx-search"></i></label>
                <input id="text-a" type="text" placeholder="Search bar" class="input--ow outl--blue-ow">
            </div>
    
            <div class="input">
                <label for="input--pass"><i class="bx bxs-lock-alt"></i></label>
                <input id="input--pass" type="password" placeholder="Password bar" class="input--ow outl--blue-ow">
                <i class="bx bxs-hide" id="icon--pass"></i>
            </div>
    
            <label class="checkbox">
                <input type="checkbox">
                <div class="checkmark outl--blue-ow"><i class='bx bx-check'></i></div>
                Mantener la sesión iniciada
            </label>
    
            <input class="button--positive-ow" type="submit" value="Entrar">
        </form>
        
    </div>

@endsection