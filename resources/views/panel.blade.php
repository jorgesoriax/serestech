@extends('layouts.template')

@section('title', 'Bievenido al panel')

@section('content')
<div id="universal--container">
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

            <h2>Stock</h2>
            
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
        </header>
        {{--*
            * MAIN
        --}}
        <main>
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
                                <a href="{{ route('panel.show', $specLaptop->id) }}">
                                    <button class="button--neutral-ow sq"><i class='bx bxs-show'></i></button>
                                </a>
                            </td>
                            {{-- BTN EDIT --}}
                            <td>
                                <a href="{{ route('panel.edit', $specLaptop->id) }}">
                                    <button class="button--alternative-ow sq"><i class='bx bxs-edit-alt'></i></button>
                                </a>
                            </td>
                            {{-- BTN DELETE --}}
                            <td>
                                <form action="{{ route('panel.destroy', $specLaptop) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="button--negative-ow sq"><i class='bx bxs-trash'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>     
        {{ $specsLaptop->links() }}
    </div>
</div>  

@section('scripts')
    <script src="{{ asset('storage/js/panel.js') }}"></script>
@endsection

@endsection