@extends('layouts.shop')
@section('title', 'SeresTech Monterrey | Laptops seminuevas a precios económicos con envío inmediato')
@section('meta')
    <meta name="description" content="Venta de laptops seminuevas en excelentes condiciones a precios económicos. Visita nuestro negocio establecido en Monterrey y conoce nuestro stock."> 
    <meta name="keywords" content="SeresTech, laptops buenas y baratas, laptops económicas, venta de laptops seminuevas, laptops usadas, entrega inmediata, envío inmediato, ph, dell, acer, lenovo"> 
@endsection
@section('content')
    {{-- SLIDER --}}
    <section class="container--slider">
        <div class="slider" id="slider">
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/slider_1.webp') }}">
            </div>
        
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/slider_2.webp') }}">
            </div>
        
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/slider_3.webp') }}">
            </div>
        </div>
    
        <button class="button--neutral-ow slider--button slider--button-r" id="button--r">
            <i class='bx bx-chevron-right'></i>
        </button>
    
        <button class="button--neutral-ow slider--button slider--button-l" id="button--l">
            <i class='bx bx-chevron-left'></i>
        </button>
    </section>
    {{-- CATALOG --}}
    <main id="main--products">
        <div id="container--catalog">
            {{-- Si existe una query se imprime en breadcrumb --}}
            @if (isset($query))
                <div class="catalog-header">
                    <div class="container-breadcrumb container-breadcrumb-home">
                        {{ Breadcrumbs::render('search', count($specsLaptop).' resultado(s) para '.$query) }}
                    </div>

                    {{-- <div class="catalog-filter">
                        <form method="GET">
                            Ordenar por:
                            <select class="input--ow outl--blue-ow" name="direction" id="direction">
                                <option value="all">Predeterminado</option>
                                <option value="desc">Precio más alto</option>
                                <option value="asc">Precio más bajo</option>
                            </select>
                        </form>
                    </div> --}}
                </div>
            @else
                <div class="catalog-header">
                    <h1>Conoce nuestro stock</h1>

                    <div class="catalog-filter">
                        <form action="{{ route('home.sort') }}" method="GET">
                            Ordenar por:
                            <select class="input--ow outl--blue-ow" name="direction" id="direction" onchange="this.form.submit()">
                                <option value="all">Predeterminado</option>
                                <option value="desc">Precio más alto</option>
                                <option value="asc">Precio más bajo</option>
                            </select>
                        </form>
                    </div>
                </div>
                @if (isset($direction))
                    <script>
                        const optionsSelectDirection = document.getElementById('direction').getElementsByTagName('option');

                        for(i = 0; i < optionsSelectDirection.length; i++){
                            // Comparamos valor
                            if(optionsSelectDirection[i].value == '{{ $direction }}'){
                                optionsSelectDirection[i].setAttribute('selected', true);
                            }
                        }
                    </script>
                @endif
            @endif
            {{-- Comprueba si la colección no esta vacía --}}
            @if ( $specsLaptop->isNotEmpty() )
                <div id="catalog">
                    @foreach ($specsLaptop as $specLaptop)
                        {{-- Comprueba si el producto cuenta con por lo menos 1 existencia--}}
                        @if ($specLaptop->product->inventory->stock > 0)
                            <a href="{{ route('product.index', $specLaptop) }}" title="Ver laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                                <div class="box--ow-max product--card">
                                <div class="product--image">
                                    <label class="label">
                                        {{ $specLaptop->product->status_usage}}
                                    </label>
                                
                                    @if ($specLaptop->product->file->image_1)
                                        @if ($specLaptop->product->file->image_2)
                                            <img src="{{ asset($specLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                                            <img src="{{ asset($specLaptop->product->file->image_1) }}" class="product--image-cover" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                                        @else
                                            <img src="{{ asset($specLaptop->product->file->image_1) }}" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                                        @endif 
                                    @else
                                        <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75" alt="Imagen no disponible">
                                    @endif
                                </div>
                                <div class="product--info">
                                    <h3 id="product--title">{{ $specLaptop->equipo_marca }} {{ $specLaptop->equipo_linea }} {{ $specLaptop->equipo_modelo }}</h3>

                                    <p id="product--description" class="p--description">{{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}</p>
                                
                                    {{-- Evalúa si el precio tiene descuento --}}
                                    @if ($specLaptop->product->price_discount)
                                        <h2 id="product--price">@convert($specLaptop->product->price_discount)</h2>
                                    
                                        <p id="product--orig-price" class="p--description">@convert($specLaptop->product->price)</p>
                                    @else
                                        <h2 id="product--price">@convert($specLaptop->product->price)</h2>
                                    @endif
                                    
                                    {{-- Evalúa si es necesario calcular el porcentaje del descuento --}}
                                    @if ($specLaptop->product->price_discount)
                                        {{-- Cálculo de descuento --}}
                                        <p id="product--discount">{{ round( 100 - (($specLaptop->product->price_discount / $specLaptop->product->price) * 100)) }} % OFF</p>
                                    @endif
                                </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            @else
                @if (isset($query))
                    <h2>{{ $msgEmpty }} <a href="{{ route('home.index') }}" title="Volver a serestech.com.mx">Puede volver catálogo completo.</a></h2>
                @else
                    <h2>{{ $msgEmpty }}</h2>
                @endif
            @endif
        </div>
        {{ $specsLaptop->links() }}
    </main>
@section('scripts')
    <script src="{{ asset('storage/js/components/slider.js') }}"></script>
@endsection
@endsection

