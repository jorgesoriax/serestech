@extends('layouts.shop')
@section('title'){{ $specsLaptop->equipo_marca }} {{ $specsLaptop->equipo_linea }} {{ $specsLaptop->equipo_modelo }} | Envío inmediato @endsection
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
        <div class="slider-container">
            @if ($specsLaptop->product->file->image_1)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_1) }}" alt="Primera imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_2)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_3)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_3) }}" alt="Tercera imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_4)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_4) }}" alt="Cuarta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_5)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_5) }}" alt="Quinta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_6)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_6) }}" alt="Sexta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_7)
                <div class="slide">
                    <img src="{{ asset($specsLaptop->product->file->image_7) }}" alt="Séptima imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
            @endif
        </div>
    </div>
    {{-- BREADCRUMB --}}
    <div class="container-breadcrumb container-breadcrumb-product">
        {{-- breadcrumb SEO --}}
        {{ Breadcrumbs::view('breadcrumbs::json-ld', 'product', $specsLaptop) }}
        {{ Breadcrumbs::render('product', $specsLaptop) }}
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
                @if ($specsLaptop->product->file->image_1)
                <div class="img--miniature outl--blue-ow" id="img--prod-1">
                    <img src="{{ asset($specsLaptop->product->file->image_1) }}" alt="Primera imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                </div>
                @endif
                @if ($specsLaptop->product->file->image_2)
                    <div class="img--miniature outl--blue-ow" id="img--prod-2">
                        <img src="{{ asset($specsLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
                @if ($specsLaptop->product->file->image_3)
                    <div class="img--miniature outl--blue-ow" id="img--prod-3">
                        <img src="{{ asset($specsLaptop->product->file->image_3) }}" alt="Tercera imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
                @if ($specsLaptop->product->file->image_4)
                    <div class="img--miniature outl--blue-ow" id="img--prod-4">
                        <img src="{{ asset($specsLaptop->product->file->image_4) }}" alt="Cuarta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
                @if ($specsLaptop->product->file->image_5)
                    <div class="img--miniature outl--blue-ow" id="img--prod-5">
                        <img src="{{ asset($specsLaptop->product->file->image_5) }}" alt="Quinta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
                @if ($specsLaptop->product->file->image_6)
                    <div class="img--miniature outl--blue-ow" id="img--prod-6">
                        <img src="{{ asset($specsLaptop->product->file->image_6) }}" alt="Sexta imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
                @if ($specsLaptop->product->file->image_7)
                    <div class="img--miniature outl--blue-ow" id="img--prod-7">
                        <img src="{{ asset($specsLaptop->product->file->image_7) }}" alt="Séptima imágen de Laptop {{ $specsLaptop->equipo_marca }}{{ $specsLaptop->equipo_linea }}{{ $specsLaptop->equipo_modelo }}, {{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} {{ $specsLaptop->procesador_gen }}a gen, {{ $specsLaptop->procesador_ghz }} GHz, {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_gb }} GB {{ $specsLaptop->ram_tipo }}, Disco duro {{ $specsLaptop->discod_gb }} {{ $specsLaptop->discod_tipo }}">
                    </div>
                @endif
            </div>
        </div>

        <div id="container--dets">
            <h1>{{ $specsLaptop->equipo_marca }} {{ $specsLaptop->equipo_linea }} {{ $specsLaptop->equipo_modelo }}</h1>
            <h2>{{ $specsLaptop->procesador_marca }} {{ $specsLaptop->procesador_modelo }} @if ($specsLaptop->procesador_gen > 0) {{ $specsLaptop->procesador_gen }}a gen @endif {{ $specsLaptop->procesador_ghz }} GHz {{ $specsLaptop->procesador_nucleos }} núcleos, RAM {{ $specsLaptop->ram_tipo }} {{ $specsLaptop->ram_gb }} GB, Disco duro {{ $specsLaptop->discod_tipo }} {{ $specsLaptop->discod_gb }}</h2>

            <p id="info--sku" class="p--description">SKU {{ $specsLaptop->product->sku }}</p>
            @if ($specsLaptop->product->status_usage )
                <label class="label">{{ $specsLaptop->product->status_usage }}</label>
            @endif

            <label class="label label--b">Garantía por {{ $specsLaptop->product->warranty_days }} días</label>
            @if ($specsLaptop->product->price_discount)
                <p id="info--disc-price" class="p--description">@convert($specsLaptop->product->price_discount)</p>
            @endif

            <h1 id="info--orig-price">@convert($specsLaptop->product->price)</h1>
            <p id="info--iva" class="p--description">+ IVA en caso de requerir factura</p>
            <p id="info--units">@if ($specsLaptop->product->inventory->stock > 1) {{ $specsLaptop->product->inventory->stock }} unidades disponibles @else {{ $specsLaptop->product->inventory->stock }} unidad disponible @endif</p>

            <a href="https://wa.me/528110649320?text=Hola,%20me%20interesa%20{{ $specsLaptop->equipo_marca }}%20{{ $specsLaptop->equipo_linea }}%20{{ $specsLaptop->equipo_modelo }}%20SKU%20{{ $specsLaptop->product->sku }}%20" target="_blank" rel="noopener noreferrer" title="Comprar ahora a través de Whatsapp">
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
                                <td>{{ $specsLaptop->equipo_marca }}</td>
                            </tr>
                            <tr>
                                <td>Línea</td>
                                <td>{{ $specsLaptop->equipo_linea }}</td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td>{{ $specsLaptop->equipo_modelo }}</td>
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
                                <td>{{ $specsLaptop->procesador_marca }}</td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td>{{ $specsLaptop->procesador_modelo }}</td>
                            </tr>
                            @if ($specsLaptop->procesador_gen > 0)
                                <tr>
                                    <td>Generación</td>
                                    <td>{{ $specsLaptop->procesador_gen }}a</td>
                                </tr>    
                            @endif
                            <tr>
                                <td>Velocidad</td>
                                <td>{{ $specsLaptop->procesador_ghz }} GHz</td>
                            </tr>
                            <tr>
                                <td>Núcleos</td>
                                <td>{{ $specsLaptop->procesador_nucleos }}</td>
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
                                <td>{{ $specsLaptop->ram_gb }} GB</td>
                            </tr>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specsLaptop->ram_tipo }}</td>
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
                                <td>{{ $specsLaptop->discod_gb }}</td>
                            </tr>
                            <tr>
                                <td>Tipo</td>
                                <td>{{ $specsLaptop->discod_tipo }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- TARJETA GRÁFICA --}}
                @if ($specsLaptop->tarjetag)
                    <div class="item">
                        <h3>Tarjeta gráfica</h3>
                        <div class="table-container">
                            <table>
                                <tr>
                                    <td>Marca</td>
                                    <td>{{ $specsLaptop->tarjetag_marca }}</td>
                                </tr>
                                <tr>
                                    <td>Modelo</td>
                                    <td>{{ $specsLaptop->tarjetag_modelo }}</td>
                                </tr>
                                <tr>
                                    <td>Tipo de memoria</td>
                                    <td>{{ $specsLaptop->tarjetag_tipomemoria }}</td>
                                </tr>
                                <tr>
                                    <td>Cantidad de memoria</td>
                                    <td>{{ $specsLaptop->tarjetag_gb }} GB</td>
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
                                <td>{{ $specsLaptop->pantalla_tipo }}</td>
                            </tr>
                            <tr>
                                <td>Tamaño</td>
                                <td>{{ $specsLaptop->pantalla_tamano }} pulgadas</td>
                            </tr>
                            <tr>
                                <td>Resolución</td>
                                <td>{{ $specsLaptop->pantalla_resolucion }} px</td>
                            </tr>
                            <tr>
                                <td>Táctil</td>
                                <td>@if ($specsLaptop->pantalla_tactil) Si @else No @endif</td>
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
                                <td>{{ $specsLaptop->teclado_idioma }}</td>
                            </tr>
                            <tr>
                                <td>Retroiluminado</td>
                                <td>@if ($specsLaptop->teclado_retroi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Teclado númerico</td>
                                <td>@if ($specsLaptop->teclado_num) Si @else No @endif</td>
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
                                <td>{{ $specsLaptop->conectv_usb2 }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de puertos USB 3.0</td>
                                <td>{{ $specsLaptop->conectv_usb3 }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de puertos USB C</td>
                                <td>{{ $specsLaptop->conectv_usbc }}</td>
                            </tr>
                            <tr>
                                <td>Wifi</td>
                                <td>@if ($specsLaptop->conectv_wifi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Bluetooth</td>
                                <td>@if ($specsLaptop->conectv_bluetooth) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto jack para audífonos</td>
                                <td>@if ($specsLaptop->conectv_jack) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto HDMI</td>
                                <td>@if ($specsLaptop->conectv_hdmi) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto VGA</td>
                                <td>@if ($specsLaptop->conectv_vga) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto DisplayPort</td>
                                <td>@if ($specsLaptop->conectv_displayp) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto Ethernet</td>
                                <td>@if ($specsLaptop->conectv_ethernet) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto Serial COM</td>
                                <td>@if ($specsLaptop->conectv_serialcom) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Puerto IEEE 1394</td>
                                <td>@if ($specsLaptop->conectv_ieee1394) Si @else No @endif</td>
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
                                <td>{{ $specsLaptop->so }}</td>
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
                                <td>{{ $specsLaptop->software_ad }}</td>
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
                                <td>@if ($specsLaptop->audiov_camara) Si @else No @endif</td>
                            </tr>
                            <tr>
                                <td>Micrófono</td>
                                <td>@if ($specsLaptop->audiov_microfono) Si @else No @endif</td>
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
                                <td>{{ $specsLaptop->bateria_tipo }}</td>
                            </tr>
                            <tr>
                                <td>Cantidad de celdas</td>
                                <td>{{ $specsLaptop->bateria_celdas }}</td>
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
                                <td>{{ $specsLaptop->product->status_usage }}</td>
                            </tr>
                            <tr>
                                <td>Estética</td>
                                <td>{{ $specsLaptop->product->status_aesthetic }} de 10</td>
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
                <p>Garantía de {{ $specsLaptop->product->warranty_days }} días</p>
            </div>
            <div class="box--ow-max">
                <i class='bx bx-support'></i>
                <p>{{ $specsLaptop->product->support }}</p>
            </div>
            <div class="box--ow-max">
                <i class='bx bxs-package'></i>
                <p>{{ $specsLaptop->product->delivery }}</p>
            </div>
        </div> 
    </section>
</div>
@section('scripts')
    <script src="{{ asset('storage/js/product.js') }}"></script>
    <script src="{{ asset('storage/js/touchSlider.js') }}"></script>
    <script src="{{ asset('storage/js/menu.js') }}"></script>
@endsection
@endsection