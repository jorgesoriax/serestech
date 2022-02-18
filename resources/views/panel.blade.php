@extends('layouts.template')
@section('title', 'Bievenido al panel')
@section('hscripts')
    <script src="{{ asset('vendor/jquery-3.6.0/jquery.min.js') }}"></script>
@endsection
@section('content')
<div id="universal--container">
    <div class="modal-shadow modal-shadow--panel"></div>
    <div class="modal-container">
        <div class="box--ow-max modal">
            <div class="content">
                <div class="loading"><i class='bx bx-loader-alt'></i></div>
            </div>
        </div>
    </div>
    <div id="panel">
        {{--*
            * NAV
        --}}
        <nav>
            <a href="{{ route('home.index') }}" target="_blank" rel="noopener noreferrer">
                <div id="logo">
                    <i><img src="{{ asset('storage/images/logo-b.svg') }}" alt=""></i>
                    <span>Ir al catálogo</span>
                </div>
            </a>

            <a href="{{ route('panel.index') }}"><h2>Stock</h2></a>

            <div class="outl--blue-ow input--ow" id="stock" tabindex="0">
                <i class='bx bx-laptop' ></i>
                <span>Gestionar stock</span>
            </div>

            {{-- <div class="outl--blue-ow input--ow" id="users" tabindex="0">
                <i class='bx bxs-user-account'></i>
                <span>Gestionar usuarios</span>
            </div> --}}

            {{-- Botón para cerrar sesión --}}
            <form action="logout" method="POST">
                @csrf
                <div class="outl--blue-ow input--ow" id="logout" onclick="this.closest('form').submit()" tabindex="0">
                    <i class='bx bx-power-off' ></i>
                    <span>Cerrar sesión</span>
                </div>
            </form>
        </nav>
        {{--*
            * HEADER
        --}}
        <header>
            <a href="{{ route('panel.index') }}"><h2>Stock</h2></a>
            
            <form action="{{ route('panel.search') }}" method="GET">
                <div class="input">
                    <label for="text-search"><i class="bx bx-search"></i></label>
                    <input type="text" name="text-search" class="input--ow outl--blue-ow" id="text-search" placeholder="Buscar producto por marca, línea o modelo...">
                </div>
            </form>

            <button class="button--positive-ow btn-create" id="btn-create">
                <i class='bx bxs-file-plus'></i>
                Nuevo
            </button>

            <a href="https://www.notion.so/Manual-551d6511868642e78ecae9fccb43695d" target="_blank" rel="noopener noreferrer">
                <button class="button--neutral-ow sq manual" title="Ver manual">
                    <i class='bx bxs-book'></i>
                </button>
            </a>

            <div class="message message--panel-ow">
                <h3 id="bienvenida">

                </h3>
                <p class="p--description">
                    {{ auth()->user()->name }}
                </p>
                <div id="emoji"></div>
            </div>
        </header>
        {{--*
            * SCROLL TO TOP
        --}}
        <div class="scrollTop outl--blue-ow">
            <i class='bx bx-arrow-to-top'></i>
        </div>
        {{--*
            * MAIN
        --}}
        <main id="main">
            <table class="panel-crud box--ow-max">
                <thead>
                    <tr>
                        <th class="th--id"><p class="p--description">ID</p></thc>
                        <th class="th--image"><p class="p--description">Imagen</p></thc>
                        <th class="th--name"><p class="p--description">Nombre</p></thc>
                        <th class="th--sku"><p class="p--description">SKU</p></thc>
                        <th class="th--price"><p class="p--description">Precio</p></thc>
                        <th class="th--price-disc"><p class="p--description">Precio c/desc</p></thc>
                        <th class="th--stock"><p class="p--description">Stock</p></thc>
                        <th class="th--label"><p class="p--description">Etiquetas</p></thc>
                        <th class="th--crud" colspan="3"><p class="p--description">Acciones</p></thc>
                    </tr>
                </thead>
                <tbody>
                    @if ($specsLaptop->isNotEmpty())
                        @foreach ($specsLaptop as $specLaptop)
                            <tr>
                                {{-- ID --}}
                                <td>
                                    {{ $specLaptop->id }}
                                </td>
                                {{-- IMAGEN --}}
                                <td>
                                    <a href="{{ route('panel.show', $specLaptop->id) }}">
                                        <div class="img-container">
                                            @if ($specLaptop->product->file->image_1)
                                                <img src="{{ asset($specLaptop->product->file->image_1) }}">
                                            @else
                                                <img src="{{ asset('storage/images/icons/noimage_50.png') }}" class="noimage-50">
                                            @endif
                                        </div>
                                    </a>
                                </td>
                                {{-- MARCA --}}
                                <td class="td--marca">
                                    {{ $specLaptop->equipo_marca }}
                                    {{ $specLaptop->equipo_linea }}
                                    {{ $specLaptop->equipo_modelo }}
                                </td>
                                {{-- SKU --}}
                                <td>
                                    {{ $specLaptop->product->sku }}
                                </td>
                                {{-- PRECIO ORIGINAL --}}
                                <td class="td--price">
                                    @convert($specLaptop->product->price)
                                </td>
                                {{-- PRECIO CON DESCUENTO --}}
                                <td class="td--price">
                                    @if ($specLaptop->product->price_discount)
                                        @convert($specLaptop->product->price_discount)
                                    @else
                                        N/A
                                    @endif
                                </td>
                                {{-- STOCK --}}
                                <td class="td--stock">
                                    {{ $specLaptop->product->inventory->stock}} uds
                                </td>
                                {{-- ETIQUETAS --}}
                                <td class="td--label">
                                    <label class="label">{{ $specLaptop->product->status_usage }}</label><br>
                                    <label class="label label--b">
                                        Garantía por {{ $specLaptop->product->warranty_days }} días
                                    </label>
                                </td>
                                {{-- BTN SHOW --}}
                                <td>
                                    <button class="button--neutral-ow sq btn-show" id="btn-show-{{ $specLaptop->id }}"><i class='bx bxs-show'></i></button>
                                    <script>
                                        $('#btn-show-{{$specLaptop->id}}').on('click', function(){
                                            $('.content').load("{{ route('panel.show', $specLaptop->id) }}");
                                        });
                                    </script>
                                </td>
                                {{-- BTN EDIT --}}
                                <td>
                                    <button class="button--alternative-ow sq btn-edit" id="btn-edit-{{ $specLaptop->id }}"><i class='bx bxs-edit-alt'></i></button>
                                    <script>
                                        /**
                                         * LOAD EDIT
                                         * Permite cargar el template edit en el modal
                                         */
                                        $('#btn-edit-{{ $specLaptop->id }}').on('click', function(){
                                            $('.content').load("{{ route('panel.edit', $specLaptop->id) }}");
                                        });
                                    </script>
                                </td>
                                {{-- BTN DELETE --}}
                                <td>
                                    <button type="button" class="button--negative-ow sq btn-delete" id="btn-delete-{{ $specLaptop->id }}">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                    <script>
                                        /**
                                         * LOAD DELETE
                                         * Permite cargar el template create en el modal
                                         */
                                        $('#btn-delete-{{$specLaptop->id}}').on('click', function(){
                                            $('.content').load("{{ route('panel.delete', $specLaptop) }}");
                                            $('.modal').addClass('modal-mid');
                                        });
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="tr--empty">
                            <td colspan="11">
                                @if ($msgResultEmpty == 'Estoy en blanco. Comencemos a trabajar.')
                                    <p class="p--description">{{ $msgResultEmpty }}</p>
                                @else
                                   <a href="{{ route('panel.index') }}"><p class="p--description">{{ $msgResultEmpty }} Clic aquí para ver todos los registros.</p></a> 
                                @endif
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </main>
        {{ $specsLaptop->links() }}
    </div>
</div>

@section('scripts')
    <script src="{{ asset('storage/js/panel.js') }}"></script>
    <script>
        /**
         * LOAD CREATE
         * Permite cargar el template create en el modal
         */
        $('.btn-create').on('click', function(){
            $('.content').load("{{ route('panel.create') }}");
        });
    </script>
@endsection
@endsection