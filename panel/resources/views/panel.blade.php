@extends('layouts.template')

@section('title', 'Bievenido al panel')

@section('scripts')
    <script src="../resources/js/panel.js"></script>
@endsection

@section('content')
<div id="panel">
    <!-- **
     * |||||||||||||||||||||||||||||| ASIDE |||||||||||||||||||||||||||||| 
     * -->
     <aside>
        <a href="" target="_blank" rel="noopener noreferrer">
            <div id="logo">
                <i><img src="../resources/img/logo-b.svg" alt=""></i>
                <span>Ir al catálogo</span>
            </div>
        </a>

        <div class="outl--blue-ow input--ow" id="stock" tabindex="0">
            <i class='bx bx-laptop' ></i>
            <span>Gestionar stock</span>
        </div>

        <div class="outl--blue-ow input--ow" id="users" tabindex="0">
            <i class='bx bxs-user-account'></i>
            <span>Gestionar usuarios</span>
        </div>

        {{-- Botón para cerrar sesión --}}
        <form action="logout" method="POST">
            @csrf
            <div class="outl--blue-ow input--ow" id="logout" onclick="this.closest('form').submit()" tabindex="0">
                <i class='bx bx-power-off' ></i>
                <span>Cerrar sesión</span>
            </div>
        </form>
    </aside>
<!-- **
     * |||||||||||||||||||||||||||||| NAV |||||||||||||||||||||||||||||| 
     * -->
    <nav>
        <h2>Stock</h2>
        <div class="input">
            <label for="text-search"><i class="bx bx-search"></i></label>
            <input id="text-search" type="text" placeholder="Buscar producto" class="input--ow outl--blue-ow">
        </div>

        <button class="button--positive-ow">
            <i class='bx bxs-add-to-queue'></i>
            Nuevo
        </button>

        <button class="button--neutral-ow sq" title="Ver manual">
            <i class='bx bxs-book'></i>
        </button>


        <div class="message message--panel-ow">
            <h3>
                Buen día
            </h3>
            <p class="p--description">
                {{ auth()->user()->email }}
            </p>
            <div>🥑</div>
        </div>
        
    </nav>
<!-- **
     * |||||||||||||||||||||||||||||| MAIN ||||||||||||||||||||||||||||| 
     * -->
    <main>
    </main>     
</div>  
@endsection