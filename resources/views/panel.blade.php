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
        <a href="{{ route('home.index') }}" target="_blank" rel="noopener noreferrer">
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

        <a href="{{ route('panel.create') }}">
            <button class="button--positive-ow">
                <i class='bx bxs-add-to-queue'></i>
                Nuevo
            </button>
        </a>

        <button class="button--neutral-ow sq" title="Ver manual">
            <i class='bx bxs-book'></i>
        </button>


        <div class="message message--panel-ow">
            <h3 id="bienvenida">
                
            </h3>
            <p class="p--description">
                {{ auth()->user()->name }}
            </p>
            <div id="emoji"></div>
        </div>
        
    </nav>
<!-- **
     * |||||||||||||||||||||||||||||| MAIN ||||||||||||||||||||||||||||| 
     * -->
    <main>

        <style>
            img{
                width: 100px;
            }
        </style>

        <h3>Resumen</h3>
        <table border="1" width="100%" style="border-spacing: 0px;">
            <thead>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>SKU</th>
                <th>Precio</th>
                <th>Precio con descuento</th>
                <th>Stock</th>
                <th>Etiquetas</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ($specsLaptop as $specLaptop)
                    <tr>
                        <td><img src="{{ asset($specLaptop->product->file->image_1) }}"></td>
                        <td>{{ $specLaptop->equipo_marca }} {{ $specLaptop->equipo_linea }} {{ $specLaptop->equipo_modelo }}</td>
                        <td>{{ $specLaptop->product->sku }}</td>
                        <td>$ {{ $specLaptop->product->price }}</td>
                        <td>$ {{ $specLaptop->product->price_discount }}</td>
                        <td>{{ $specLaptop->product->inventory->stock}}</td>
                        <td>{{ $specLaptop->product->status_usage}} /
                            Garantía de {{ $specLaptop->product->warranty_days}} días</td>
                        <td><a href="{{ route('panel.show', $specLaptop->id) }}"><i class='bx bxs-show'></i></a></td>
                        <td><a href="{{ route('panel.edit', $specLaptop->id) }}"><i class='bx bxs-edit-alt'></i></a></td>
                        <td>
                            <form action="{{ route('panel.destroy', $specLaptop) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"><i class='bx bxs-trash'></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $specsLaptop->links() }}

        <script>
            let frases = new Array()
                frases[0] = 'Bienvenido';
                frases[1] = 'Hola de nuevo';
                frases[2] = 'Buen día';
                frases[3] = 'Comencemos';
            let F = frases.length;

            let emojis = ['👋', '👀', '💻', '🕓'];
             
            function mostrarFrases() {
                let numAleatorio = Math.round(Math.random() * (F-1));
                document.getElementById("bienvenida").innerHTML = frases[numAleatorio];
                document.getElementById("emoji").innerHTML = emojis[numAleatorio];
            }
            mostrarFrases();
        </script>

    </main>     
</div>  
@endsection