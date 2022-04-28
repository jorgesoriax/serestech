@extends('layouts.shop')
@section('title'){{ $specLaptop->equipo_marca }} {{ $specLaptop->equipo_linea }} {{ $specLaptop->equipo_modelo }} | Envío inmediato @endsection
@section('hscripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
@endsection
@section('content')
    {{--*
        * SCROLL TO TOP
    --}}
    <div class="scrollTop outl--blue-ow">
        <i class='bx bx-arrow-to-top' ></i>
    </div>
    {{--*
        * TOUCH SLIDER
    --}}
    <div class="touch-slider">
        <div class="count"><p>0 / 0</p></div>
        <div class="prev-button">
            <button class="button--neutral-ow sq" >
                <i class='bx bx-chevron-left'></i>
            </button>
        </div>
        <div class="next-button">
            <button class="button--neutral-ow sq" >
                <i class='bx bx-chevron-right'></i>
            </button>
        </div>
        <div class="slider-container">
            @if ($specLaptop->product->file->image_1)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_1) }}" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_2)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_3)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_3) }}" alt="Tercera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_4)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_4) }}" alt="Cuarta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_5)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_5) }}" alt="Quinta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_6)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_6) }}" alt="Sexta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
            @if ($specLaptop->product->file->image_7)
                <div class="slide">
                    <img src="{{ asset($specLaptop->product->file->image_7) }}" alt="Séptima imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
            @endif
        </div>
    </div>
    {{-- BREADCRUMB --}}
    <div class="container-breadcrumb container-breadcrumb-product">
        {{ Breadcrumbs::view('breadcrumbs::json-ld', 'product', $specLaptop) }} {{-- breadcrumb SEO --}}
        {{ Breadcrumbs::render('product', $specLaptop) }}
    </div>
    {{--*
        * TOP INFORMATION
    --}}
    <section id="product--info">
        <div  id="container--imgs">
            <div id="img--prod-preview" >
                <img id="img-original">
            </div>
            <div id="zoom"></div>
            <div id="img--prod-items">
                @if ($specLaptop->product->file->image_1)
                <div class="img--miniature outl--blue-ow" id="img--prod-1">
                    <img src="{{ asset($specLaptop->product->file->image_1) }}" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                </div>
                @endif
                @if ($specLaptop->product->file->image_2)
                    <div class="img--miniature outl--blue-ow" id="img--prod-2">
                        <img src="{{ asset($specLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
                @if ($specLaptop->product->file->image_3)
                    <div class="img--miniature outl--blue-ow" id="img--prod-3">
                        <img src="{{ asset($specLaptop->product->file->image_3) }}" alt="Tercera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
                @if ($specLaptop->product->file->image_4)
                    <div class="img--miniature outl--blue-ow" id="img--prod-4">
                        <img src="{{ asset($specLaptop->product->file->image_4) }}" alt="Cuarta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
                @if ($specLaptop->product->file->image_5)
                    <div class="img--miniature outl--blue-ow" id="img--prod-5">
                        <img src="{{ asset($specLaptop->product->file->image_5) }}" alt="Quinta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
                @if ($specLaptop->product->file->image_6)
                    <div class="img--miniature outl--blue-ow" id="img--prod-6">
                        <img src="{{ asset($specLaptop->product->file->image_6) }}" alt="Sexta imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
                @if ($specLaptop->product->file->image_7)
                    <div class="img--miniature outl--blue-ow" id="img--prod-7">
                        <img src="{{ asset($specLaptop->product->file->image_7) }}" alt="Séptima imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}">
                    </div>
                @endif
            </div>
        </div>

        <div id="container--dets">
            <h1>{{ $specLaptop->equipo_marca }} {{ $specLaptop->equipo_linea }} {{ $specLaptop->equipo_modelo }}</h1>
            <h2>{{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_linea }} {{ $specLaptop->procesador_modelo }} @if ($specLaptop->procesador_gen > 0) {{ $specLaptop->procesador_gen }} @endif {{ $specLaptop->procesador_ghz }} {{ $specLaptop->procesador_nucleos }}, RAM {{ $specLaptop->ram_tipo }} {{ $specLaptop->ram_gb }}, Disco duro {{ $specLaptop->discod_tipo }} {{ $specLaptop->discod_gb }}</h2>

            <p id="info--sku" class="p--description">SKU {{ $specLaptop->product->sku }}</p>
            @if ($specLaptop->product->status_usage )
                <label class="label">{{ $specLaptop->product->status_usage }}</label>
            @endif

            <label class="label label--b">Garantía por {{ $specLaptop->product->warranty_days }} días</label>
            @if ($specLaptop->product->price_discount)
                <p id="info--disc-price" class="p--description">@convert($specLaptop->product->price_discount)</p>
            @endif

            <h1 id="info--orig-price">@convert($specLaptop->product->price)</h1>
            {{-- <p id="info--iva" class="p--description">+ IVA en caso de requerir factura</p> --}}
            <p id="info--units">@if ($specLaptop->product->inventory->stock > 1) {{ $specLaptop->product->inventory->stock }} unidades disponibles @else {{ $specLaptop->product->inventory->stock }} unidad disponible @endif</p>

            <a href="https://wa.me/528110649320?text=Hola,%20me%20interesa%20{{ $specLaptop->equipo_marca }}%20{{ $specLaptop->equipo_linea }}%20{{ $specLaptop->equipo_modelo }}%20SKU%20{{ $specLaptop->product->sku }}%20" target="_blank" rel="noopener noreferrer" title="Comprar ahora a través de Whatsapp">
                <button id="info--buy" class="button--whatsapp-ow">Comprar ahora<br>
                    <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Comprar ahora a través de Whatsapp">
                </button>
            </a>
        </div>
    </section>
    {{--*
        * SPECIFICATIONS
    --}}
    <main id="product--specs">
        <div id="product--specs-items">
            <h1>Especificaciones</h1>
            <section>
                {{-- EQUIPO --}}
                <div class="item">
                    <h3>Equipo</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Marca</td>
                                <td>{{ $specLaptop->equipo_marca }}</td>
                            </tr>
                            <tr>
                                <td>Línea</td>
                                <td>{{ $specLaptop->equipo_linea }}</td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td>{{ $specLaptop->equipo_modelo }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- PROCESADOR --}}
                <div class="item">
                    <h3>Procesador</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Marca</td>
                                <td>{{ $specLaptop->procesador_marca }}</td>
                            </tr>
                            <tr>
                                <td>Línea</td>
                                <td>{{ $specLaptop->procesador_linea }}</td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td>{{ $specLaptop->procesador_modelo }}</td>
                            </tr>
                            @if ($specLaptop->procesador_gen > 0)
                                <tr>
                                    <td>Generación</td>
                                    <td>{{ $specLaptop->procesador_gen }}</td>
                                </tr>    
                            @endif
                            <tr>
                                <td>Velocidad</td>
                                <td>{{ $specLaptop->procesador_ghz }}</td>
                            </tr>
                            <tr>
                                <td>Núcleos</td>
                                <td>{{ $specLaptop->procesador_nucleos }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- RAM --}}
                <div class="item">
                    <h3>Memoria RAM</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Cantidad</td>
                                <td>{{ $specLaptop->ram_gb }}</td>
                            </tr>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specLaptop->ram_tipo }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- DISCO DURO --}}
                <div class="item">
                    <h3>Disco duro</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Cantidad</td>
                                <td>{{ $specLaptop->discod_gb }}</td>
                            </tr>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specLaptop->discod_tipo }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- TARJETA GRÁFICA --}}
                @if ($specLaptop->tarjetag)
                    <div class="item">
                        <h3>Tarjeta gráfica</h3>
                        <div class="table-container">
                            <table>
                                <tr>
                                    <td>Marca</td>
                                    <td>{{ $specLaptop->tarjetag_marca }}</td>
                                </tr>
                                <tr>
                                    <td>Modelo</td>
                                    <td>{{ $specLaptop->tarjetag_modelo }}</td>
                                </tr>
                                <tr>
                                    <td>Tipo de memoria</td>
                                    <td>{{ $specLaptop->tarjetag_tipomemoria }}</td>
                                </tr>
                                <tr>
                                    <td>Cantidad de memoria</td>
                                    <td>{{ $specLaptop->tarjetag_gb }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endif
                {{-- PANTALLA --}}
                <div class="item">
                    <h3>Pantalla</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specLaptop->pantalla_tipo }}</td>
                            </tr>
                            <tr>
                                <td>Tamaño</td>
                                <td>{{ $specLaptop->pantalla_tamano }}</td>
                            </tr>
                            <tr>
                                <td>Resolución</td>
                                <td>{{ $specLaptop->pantalla_resolucion }}</td>
                            </tr>
                            <tr>
                                <td>Táctil</td>
                                <td>@if ($specLaptop->pantalla_tactil) Si @else No @endif</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- TECLADO --}}
                <div class="item">
                    <h3>Teclado</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Idioma</td>
                                <td>{{ $specLaptop->teclado_idioma }}</td>
                            </tr>
                            <tr>
                                <td>Retroiluminado</td>
                                <td>@if ($specLaptop->teclado_retroi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Teclado númerico</td>
                                <td>@if ($specLaptop->teclado_num) Si @else No @endif</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- CONECTIVIDAD --}}
                <div class="item">
                    <h3>Conectividad</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Cantidad de puertos USB 2.0</td>
                                <td>{{ $specLaptop->conectv_usb2 }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de puertos USB 3.0</td>
                                <td>{{ $specLaptop->conectv_usb3 }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de puertos USB C</td>
                                <td>{{ $specLaptop->conectv_usbc }}</td>
                            </tr>
                            <tr>
                                <td>Wifi</td>
                                <td>@if ($specLaptop->conectv_wifi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Bluetooth</td>
                                <td>@if ($specLaptop->conectv_bluetooth) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto jack para audífonos</td>
                                <td>@if ($specLaptop->conectv_jack) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto HDMI</td>
                                <td>@if ($specLaptop->conectv_hdmi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto VGA</td>
                                <td>@if ($specLaptop->conectv_vga) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto DisplayPort</td>
                                <td>@if ($specLaptop->conectv_displayp) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto Ethernet</td>
                                <td>@if ($specLaptop->conectv_ethernet) Si @else No @endif</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- SISTEMA OPERATIVO --}}
                <div class="item">
                    <h3>Sistema Operativo</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Nombre</td>
                                <td>{{ $specLaptop->so }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- SOFTWARE --}}
                <div class="item">
                    <h3>Software adicional</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Programas</td>
                                <td>{{ $specLaptop->software_ad }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- AUDIO Y VIDEO --}}
                <div class="item">
                    <h3>Audio y video</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Cámara</td>
                                <td>@if ($specLaptop->audiov_camara) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Micrófono</td>
                                <td>@if ($specLaptop->audiov_microfono) Si @else No @endif</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- BATERÍA --}}
                <div class="item">
                    <h3>Batería</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specLaptop->bateria_tipo }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de celdas</td>
                                <td>{{ $specLaptop->bateria_celdas }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- ESTADO --}}
                <div class="item">
                    <h3>Estado</h3>
                    <div class="table-container">
                        <table>
                            <tr>
                                <td>Uso</td>
                                <td>{{ $specLaptop->product->status_usage }}</td>
                            </tr>
                            <tr>
                                <td>Estética</td>
                                <td>{{ $specLaptop->product->status_aesthetic }} de 10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
    {{--*
        * WARRANTY ELEMENTS
    --}}
    <section id="product--wty">
        <div id="product--wty-items">
            <div class="box--ow-max">
                <i class='bx bxs-check-shield'></i>
                <p>Garantía de {{ $specLaptop->product->warranty_days }} días</p>
            </div>
            <div class="box--ow-max">
                <i class='bx bx-support'></i>
                <p>{{ $specLaptop->product->support }}</p>
            </div>
            <div class="box--ow-max">
                <i class='bx bxs-package'></i>
                <p>{{ $specLaptop->product->delivery }}</p>
            </div>
        </div> 
    </section>
@section('scripts')
    <script src="{{ asset('storage/js/product.js') }}"></script>
    <script src="{{ asset('storage/js/components/touchSlider.js') }}"></script>
@endsection
@endsection