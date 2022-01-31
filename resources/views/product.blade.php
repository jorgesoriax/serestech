@extends('layouts.template')

@section('title')
    {{ $specsLaptop->equipo_marca  }}
    {{ $specsLaptop->equipo_linea  }}
    {{ $specsLaptop->equipo_modelo }}
@endsection

@section('scripts')
    <script src="{{ asset('storage/js/product.js') }}"></script>
@endsection

@section('content')

{{-- <div id="responsive-indicator"><br></div> --}}
<!--
    * HEADER
-->
<header>
    <div id="header--logo">
        <a href="{{ route('home.index') }}">
            <img src="{{ asset('storage/images/logo-large-w.svg') }}">
        </a>
    </div>
   
    {{-- <div id="header--search" class="input">
        <label for="text-search"><i class="bx bx-search"></i></label>
        <input id="text-search" type="text" placeholder="Buscar por modelo, marca, componente y más..." class="input--ob outl--white-ob">    
    </div> --}}

    <div id="header--nav--buttons" class="nav--buttons">

        <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer"
        href="https://www.facebook.com/SeresTech21/" >
            <img src="{{ asset('storage/images/social-media/fb-rounded-style-a.svg')}}" 
            title="Encuentranos en Facebook">
        </a>

        <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer"
        href="https://www.instagram.com/serestech21/">
            <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg')}}" 
            title="Siguenos en Instagram">
        </a>

        <button class="button--neutral-ob popup--message popup--message-top"> Envios 
            <p>
                El envio de nuestros productos se acuerda al momento
                de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
            </p>
        </button>

        <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer">
            <button class="button--whatsapp-ob">
                Contactanos
                <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="">
            </button>
        </a>

    </div>

</header>
<!--
    * IMG AND STOCK INFO
-->
<section id="product--info">

        <div  id="container--imgs">

            <div id="img--prod-preview" >
                <img id="img-original" src="{{ asset($specsLaptop->product->file->image_1) }}">
            </div>
            
            <div id="zoom" class="box--ow-max"></div>

            
            @if ($specsLaptop->product->file->image_1)
                <div class="img--miniature outl--blue-ow" id="img--prod-1">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_1) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_2)
                <div class="img--miniature outl--blue-ow" id="img--prod-2">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_2) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_3)
                <div class="img--miniature outl--blue-ow" id="img--prod-3">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_3) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_4)
                <div class="img--miniature outl--blue-ow" id="img--prod-4">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_4) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_5)
                <div class="img--miniature outl--blue-ow" id="img--prod-5">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_5) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_6)
                <div class="img--miniature outl--blue-ow" id="img--prod-6">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_6) }}">
                </div>
            @endif
            @if ($specsLaptop->product->file->image_7)
                <div class="img--miniature outl--blue-ow" id="img--prod-7">
                    
                    <img src="{{ asset($specsLaptop->product->file->image_7) }}">
                </div>
            @endif

        </div>

        <!-- 
            * ESPECIFICACIONES ESPECIFICACIONES  ESPECIFICACIONES 
        -->
        <div id="container--dets">
            <h1> 
                {{ $specsLaptop->equipo_marca }}
                {{ $specsLaptop->equipo_linea }}
                {{ $specsLaptop->equipo_modelo }}
            </h1>

            <p id="info--sku" class="p--description">
                SKU {{ $specsLaptop->product->sku }}
            </p>

            @if ($specsLaptop->product->status_usage )
                <label class="label">{{ $specsLaptop->product->status_usage }}</label>
            @endif

            <label class="label label--b">
                Garantía por {{ $specsLaptop->product->warranty_days }} días
            </label>

            <p id="info--disc-price" class="p--description">
                $ @convert($specsLaptop->product->price_discount)
            </p>

            <h1 id="info--orig-price">
                $ @convert($specsLaptop->product->price)
            </h1>

            <p id="info--IVA" class="p--description">+ IVA en caso de requerir factura</p>
            
            <p id="info--units">
                @if ($specsLaptop->product->inventory->stock > 1)
                    {{ $specsLaptop->product->inventory->stock }} unidades disponibles
                @else
                    {{ $specsLaptop->product->inventory->stock }} unidad disponible
                @endif
            </p>

            <a href="https://wa.me/528110649320?text=Me%20interesa%20{{ $specsLaptop->equipo_marca }}%20{{ $specsLaptop->equipo_linea }}%20{{ $specsLaptop->equipo_modelo }}%20SKU%20{{ $specsLaptop->product->sku }}%20(Prueba)" target="_blank" rel="noopener noreferrer">
                <button id="info--buy" class="button--whatsapp-ow">
                    Comprar ahora
                    <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}">
                </button>
            </a>

        </div>

    </section>
<!--
    * SPECS
-->
    <main id="product--specs">
        <h1>Especificaciones</h1>
        
        <section id="product--specs-l">

            <!-- 
                * EQUIPO EQUIPO EQUIPO
            -->
            <table class="box--ow-max">
                <caption><h3>Equipo</h3></caption>
                <tr>
                    <td>Marca</td>
                    <td class="td-bold">
                        {{ $specsLaptop->equipo_marca}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Línea</td>
                    <td class="td-w td-bold">
                        {{ $specsLaptop->equipo_linea}}
                    </td>
                </tr>
                <tr>
                    <td>Modelo</td>
                    <td class="td-bold">
                        {{ $specsLaptop->equipo_modelo}}
                    </td>
                </tr>
            </table>
            <!-- 
                * RAM RAM RAM
            -->
            <table class="box--ow-max">
                <caption><h3>Memoria RAM</h3></caption>
                <tr>
                    <td>Cantidad</td>
                    <td class="td-bold">
                        {{ $specsLaptop->ram_gb}} GB
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Tipo</td>
                    <td class="td-w--end td-bold">
                        {{ $specsLaptop->ram_tipo}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Disco duro Disco duro Disco duro
            -->
            <table class="box--ow-max">
                <caption><h3>Disco duro</h3></caption>
                <tr>
                    <td>Cantidad</td>
                    <td class="td-bold">
                        {{ $specsLaptop->discod_gb}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Tipo</td>
                    <td class="td-w--end td-bold">
                        {{ $specsLaptop->discod_tipo}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Procesador Procesador Procesador
            -->
            <table class="box--ow-max">
                <caption><h3>Procesador</h3></caption>
                <tr>
                    <td>Marca</td>
                    <td class="td-bold">
                        {{ $specsLaptop->procesador_marca}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Modelo</td>
                    <td class="td-w td-bold">
                        {{ $specsLaptop->procesador_modelo}}
                    </td>
                </tr>
                <tr>
                    <td>Generación</td>
                    <td class="td-bold">
                        {{ $specsLaptop->procesador_gen}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Velocidad</td>
                    <td class="td-w td-bold">
                        {{ $specsLaptop->procesador_mhz}} MHz
                    </td>
                </tr>
                <tr>
                    <td>Núcleos</td>
                    <td class="td-bold">
                        {{ $specsLaptop->procesador_nucleos}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Tarjeta gráfica Tarjeta gráfica Tarjeta gráfica
            -->
            @if ($specsLaptop->tarjetag)
                <table class="box--ow-max">
                    <caption><h3>Tarjeta gráfica</h3></caption>
                    <tr>
                        <td>Marca</td>
                        <td class="td-bold">
                            {{ $specsLaptop->tarjetag_marca}}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-w">Modelo</td>
                        <td class="td-w td-bold">
                            {{ $specsLaptop->tarjetag_modelo}}
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de memoria</td>
                        <td class="td-bold">
                            {{ $specsLaptop->tarjetag_tipomemoria}}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-w--end">Cantidad de memoria</td>
                        <td class="td-w--end td-bold">
                            {{ $specsLaptop->tarjetag_gb}} GB
                        </td>
                    </tr>
                </table>
            @endif
            <!-- 
                * Pantalla Pantalla Pantalla
            -->
            <table class="box--ow-max">
                <caption><h3>Pantalla</h3></caption>
                <tr>
                    <td>Tipo</td>
                    <td class="td-bold">
                        {{ $specsLaptop->pantalla_tipo}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Tamaño</td>
                    <td class="td-w td-bold">
                        {{ $specsLaptop->pantalla_tamano}} "
                    </td>
                </tr>
                <tr>
                    <td>Táctil</td>
                    <td class="td-bold">
                        @if ($specsLaptop->pantalla_tactil)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
            </table>
            <!-- 
                * Teclado Teclado Teclado
            -->
            <table class="box--ow-max">
                <caption><h3>Teclado</h3></caption>
                <tr>
                    <td>Idioma</td>
                    <td class="td-bold">
                        {{ $specsLaptop->teclado_idioma}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Retroiluminado</td>
                    <td class="td-w td-bold">
                        @if ($specsLaptop->teclado_retroi)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Teclado númerico</td>
                    <td class="td-bold">
                        @if ($specsLaptop->teclado_num)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
            </table>
            <!-- 
                * Conectividad Conectividad Conectividad
            -->
            <table class="box--ow-max">
                <caption><h3>Conectividad</h3></caption>
                <tr>
                    <td>Cantidad de puertos USB 2.0</td>
                    <td class="td-bold">
                        {{ $specsLaptop->conectv_usb2 }}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Cantidad de puertos USB 3.0</td>
                    <td class="td-w td-bold">
                        {{ $specsLaptop->conectv_usb3 }}
                    </td>
                </tr>
                <tr>
                    <td>Cantidad de puertos USB C</td>
                    <td class="td-bold">
                        {{ $specsLaptop->conectv_usbc }}
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Wifi</td>
                    <td class="td-w td-bold">
                        @if ($specsLaptop->conectv_wifi)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td class="td-bold">
                        @if ($specsLaptop->conectv_bluetooth)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Puerto jack para audífonos</td>
                    <td class="td-w td-bold">
                        @if ($specsLaptop->conectv_jack)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Puerto HDMI</td>
                    <td class="td-bold">
                        @if ($specsLaptop->conectv_hdmi)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Puerto VGA</td>
                    <td class="td-w td-bold">
                        @if ($specsLaptop->conectv_vga)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Puerto DisplayPort</td>
                    <td class="td-bold">
                        @if ($specsLaptop->conectv_displayp)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="td-w">Puerto Ethernet</td>
                    <td class="td-w td-bold">
                        @if ($specsLaptop->conectv_ethernet)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Puerto Serial COM</td>
                    <td class="td-bold">
                        @if ($specsLaptop->conectv_serialcom)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Puerto IEEE 1394</td>
                    <td class="td-w--end td-bold">
                        @if ($specsLaptop->conectv_ieee1394)
                            Si
                        @else
                            No
                        @endif
                        
                    </td>
                </tr>
                
            </table>
            <!-- 
                * Sistema Operativo Sistema Operativo Sistema Operativo
            -->
            <table class="box--ow-max">
                <caption><h3>Sistema Operativo</h3></caption>
                <tr>
                    <td>Nombre</td>
                    <td class="td-bold">
                        {{ $specsLaptop->so}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Software adicional Software adicional Software adicional
            -->
            <table class="box--ow-max">
                <caption><h3>Software adicional</h3></caption>
                <tr>
                    <td>Programas</td>
                    <td class="td-bold">
                        {{ $specsLaptop->software_ad}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Audio y video Audio y video Audio y video
            -->
            <table class="box--ow-max">
                <caption><h3>Audio y video</h3></caption>
                <tr>
                    <td>Idioma</td>
                    <td class="td-bold">
                        @if ($specsLaptop->audiov_camara)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Retroiluminado</td>
                    <td class="td-w--end td-bold">
                        @if ($specsLaptop->audiov_microfono)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
            </table>
            <!-- 
                * Batería Batería Batería
            -->
            <table class="box--ow-max">
                <caption><h3>Batería</h3></caption>
                <tr>
                    <td>Tipo</td>
                    <td class="td-bold">
                        {{ $specsLaptop->bateria_tipo}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Cantidad de celdas</td>
                    <td class="td-w--end td-bold">
                        {{ $specsLaptop->bateria_celdas}}
                    </td>
                </tr>
            </table>
            <!-- 
                * Estado Estado Estado
            -->
            <table class="box--ow-max">
                <caption><h3>Estado</h3></caption>
                <tr>
                    <td>Uso</td>
                    <td class="td-bold">
                        {{ $specsLaptop->product->status_usage}}
                    </td>
                </tr>
                <tr>
                    <td class="td-w--end">Estética</td>
                    <td class="td-w--end td-bold">
                        {{ $specsLaptop->product->status_aesthetic}} de 10
                    </td>
                </tr>
                
            </table>
        </section>
    
    </main>
<!--
    * WTY 
-->
    <section id="product--wty">
        
        <div class="box--ow-max">
            <i class='bx bxs-check-shield'></i>
            <p>
                Garantía de {{ $specsLaptop->product->warranty_days }} días
            </p>
        </div>

        <div class="box--ow-max">
            <i class='bx bx-support' ></i>
            <p>
                {{ $specsLaptop->product->support }}
            </p>
        </div>

        <div class="box--ow-max">
            <i class='bx bxs-package' ></i>
            <p>
                {{ $specsLaptop->product->delivery }}
            </p>
        </div>

    </section>
<!--
    * FOOTER
-->
<footer>

    <div id="footer--logo">
        <img src="{{ asset('storage/images/logo-large-b.svg') }}" alt="">
    </div>

    <div id="footer--number">
        <p><i class='bx bxs-phone'></i>
            Llamanos al +52 81 1064 9320
        </p>
    </div>

        <div id="footer--buttons" class="nav--buttons">
            <a class="a--icon outl--blue-ow" target="_blank" rel="noopener noreferrer" 
            href="https://www.facebook.com/SeresTech21/">
                <img src="{{ asset('storage/images/social-media/fb-rounded-style.svg') }}" 
                title="Encuentranos en Facebook">
            </a>
    
            <a class="a--icon outl--blue-ow input--ow" target="_blank" rel="noopener noreferrer" 
            href="https://www.instagram.com/serestech21/">
                <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg') }}" 
                title="Siguenos en Instagram">
            </a>

            <button class="button--neutral-ow popup--message popup--message-bot">
                Envios
                <p>
                    El envio de nuestros productos se acuerda al momento
                    de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                    pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
                </p>
            </button> 

            <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer">
                <button class="button--whatsapp-ow">
                    Contactanos
                    <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}">
                </button>
            </a>
        </div>

    <div id="footer--adress">
        <p>Mazapil 112, col, Mitras Centro, 64460 Monterrey, N.L.</p>
    </div>
       
    <div id="footer--currencies">
        <img src="{{ asset('storage/images/currencies/mastercard.svg') }}">
        <img src="{{ asset('storage/images/currencies/visa.svg') }}" >
        <img src="{{ asset('storage/images/currencies/paypal.svg') }}">
        <img src="{{ asset('storage/images/currencies/711.svg') }}">
        <img src="{{ asset('storage/images/currencies/oxxo.svg') }}">

        <div id="cryptocurrencies" class="box--ow-max">
            <img src="{{ asset('storage/images/currencies/shib.svg')}}">
            <img src="{{ asset('storage/images/currencies/bitcoin.svg')}}">
        </div>
    </div>
</footer>
    
@endsection