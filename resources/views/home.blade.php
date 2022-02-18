@extends('layouts.template')
@section('title', 'SeresTech Monterrey | Laptops seminuevas a precios económicos con envío inmediato')
@section('meta')
    <meta name="description" content="Venta de laptops seminuevas en excelentes condiciones a precios económicos. Visita nuestro negocio establecido en Monterrey y conoce nuestro stock."> 
    <meta name="keywords" content="SeresTech, laptops buenas y baratas, laptops económicas, venta de laptops seminuevas, laptops usadas, entrega inmediata, envío inmediato, ph, dell, acer, lenovo"> 
@endsection
@section('hscripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
@endsection
@section('content')
<div id="universal--container">
    {{--*
        * RESPONSIVE INDICATOR
    --}}
    {{-- <div id="responsive-indicator"></div> --}}
    {{--*
        * FACEBOOK PLUGIN
    --}}
    {{-- <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "280004990468494");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> --}}
    {{--*
        * MENU
    --}}
    <div class="menu--container">
        <div class="content">
            Síguenos en nuestras redes
            <div class="content--social-media">
                <a class="a--icon outl--blue-ow" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" title="Encuéntranos en Facebook SeresTech21">
                    <img src="{{ asset('storage/images/social-media/fb-rounded-style.svg') }}" alt="Encuéntranos en Facebook">
                </a>
            
                <a class="a--icon outl--blue-ow input--ow" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/" title="Síguenos en Instagram serestech21">
                    <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg') }}" alt="Síguenos en Instragram">
                </a>
            </div>
            
            <div class="static-message">
                <p>
                    El envio de nuestros productos se acuerda al momento
                    de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                    pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
                </p>
            </div>
            <div class="content--whatsapp">
                <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer" title="Contáctanos a través de Whatsapp">
                    <button class="button--whatsapp-ow">
                        Contáctanos
                        <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Contáctanos a través de Whatsapp">
                    </button>
                </a>
            </div>
            
        </div>
    </div>
    <div class="modal-shadow"></div>
    {{--*
        * HEADER
    --}}
    <header class="header">
        <div class="header--container">
            <div id="header--logo">
                <a href="{{ route('home.index') }}" title="Volver a serestech.com.mx">
                    <img src="{{ asset('storage/images/original-w.svg') }}" id="logo-large" alt="Logo SeresTech">
                    <img src="{{ asset('storage/images/logo-w.svg') }}" id="logo-tiny" alt="Logo SeresTech">
                </a>
            </div>
        
            <form action="{{ route('home.search') }}" method="GET">
                <div id="header--search" class="input">
                    <label for="text-search"><i class="bx bx-search"></i></label>
                    <input type="text" name="text-search" class="input--ob outl--white-ob" id="text-search" placeholder="Buscar por marca, línea o modelo...">    
                </div>
            </form>
            
            <div id="header--nav--buttons" class="nav--buttons">
                <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" title="Encuéntranos en Facebook SeresTech21">
                    <img src="{{ asset('storage/images/social-media/fb-rounded-style-a.svg')}}" alt="Encuéntranos en Facebook">
                </a>
            
                <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/" title="Síguenos en Instagram serestech21">
                    <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg')}}" alt="Síguenos en Instragram">
                </a>
            
                <button class="button--neutral-ob popup-message popup-message-top"> Envios 
                    <p>
                        El envio de nuestros productos se acuerda al momento
                        de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                        pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
                    </p>
                </button>
            
                <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer" title="Contáctanos a través de Whatsapp">
                    <button class="button--whatsapp-ob">
                        Contáctanos
                        <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Contáctanos a través de Whatsapp">
                    </button>
                </a>
            
                <button class="menu sq outl--white-ob">
                    <i class='bx bx-menu'></i>
                </button>
            </div>
        </div>
    </header>
    {{--*
        * SLIDER
    --}}
    <section class="container--slider">
        <div class="slider" id="slider">
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/img1.webp') }}" alt="">
            </div>
        
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/img2.webp') }}" alt="">
            </div>
        
            <div class="slider--section">
            <img src="{{ asset('storage/images/slider/img3.webp') }}" alt="">
            </div>
        </div>
    
        <button class="button--neutral-ow slider--button slider--button-r" id="button--r">
            <i class='bx bx-chevron-right'></i>
        </button>
    
        <button class="button--neutral-ow slider--button slider--button-l" id="button--l">
            <i class='bx bx-chevron-left'></i>
        </button>
    </section>
    {{--*
        * CATALOG
    --}}
    <main id="main--products">
        <div id="container--catalog">
            @if ($specsLaptop->isNotEmpty())
                <h1>Conoce nuestro stock</h1>
            @endif
            <div id="catalog">
                {{-- Comprueba si la colección no esta vacía --}}
                @if ( $specsLaptop->isNotEmpty() )
                    @foreach ($specsLaptop as $specLaptop)
            
            
                        {{-- Comprueba si el producto cuenta con por lo menos 1 existencia--}}
                        @if ($specLaptop->product->inventory->stock > 0)
                        <a href="{{ $specLaptop->id }}" title="Ver laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_modelo }} {{ $specLaptop->procesador_gen }}a gen, {{ $specLaptop->procesador_ghz }} GHz, {{ $specLaptop->procesador_nucleos }} núcleos, RAM {{ $specLaptop->ram_gb }} GB {{ $specLaptop->ram_tipo }}, Disco duro {{ $specLaptop->discod_gb }} {{ $specLaptop->discod_tipo }}">
                            <div class="box--ow-max product--card">
                                <div class="product--image">
                                    <label class="label">
                                        {{ $specLaptop->product->status_usage}}
                                    </label>
                                
                                    @if ($specLaptop->product->file->image_1)
                                        @if ($specLaptop->product->file->image_2)
                                            <img src="{{ asset($specLaptop->product->file->image_2) }}" alt="Segunda imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_modelo }} {{ $specLaptop->procesador_gen }}a gen, {{ $specLaptop->procesador_ghz }} GHz, {{ $specLaptop->procesador_nucleos }} núcleos, RAM {{ $specLaptop->ram_gb }} GB {{ $specLaptop->ram_tipo }}, Disco duro {{ $specLaptop->discod_gb }} {{ $specLaptop->discod_tipo }}">
                                        @else
                                            <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="product--image-cover noimage-75" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_modelo }} {{ $specLaptop->procesador_gen }}a gen, {{ $specLaptop->procesador_ghz }} GHz, {{ $specLaptop->procesador_nucleos }} núcleos, RAM {{ $specLaptop->ram_gb }} GB {{ $specLaptop->ram_tipo }}, Disco duro {{ $specLaptop->discod_gb }} {{ $specLaptop->discod_tipo }}">
                                        @endif 
                                
                                        <img src="{{ asset($specLaptop->product->file->image_1) }}" class="product--image-cover" alt="Primera imágen de Laptop {{ $specLaptop->equipo_marca }}{{ $specLaptop->equipo_linea }}{{ $specLaptop->equipo_modelo }}, {{ $specLaptop->procesador_marca }} {{ $specLaptop->procesador_modelo }} {{ $specLaptop->procesador_gen }}a gen, {{ $specLaptop->procesador_ghz }} GHz, {{ $specLaptop->procesador_nucleos }} núcleos, RAM {{ $specLaptop->ram_gb }} GB {{ $specLaptop->ram_tipo }}, Disco duro {{ $specLaptop->discod_gb }} {{ $specLaptop->discod_tipo }}">
                                    @else
                                        <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75" alt="Imagen no disponible">
                                    @endif
                                </div>
                                <div class="product--info">
                                    <h3 id="product--title"> Laptop 
                                        {{ $specLaptop->equipo_marca }} 
                                        {{ $specLaptop->equipo_linea }} 
                                        {{ $specLaptop->equipo_modelo }}
                                    </h3>
                                    <p id="product--description" class="p--description" >
                                        {{ $specLaptop->procesador_marca }}
                                        {{ $specLaptop->procesador_modelo }}
                                        {{ $specLaptop->procesador_gen }}a gen, 
                                        {{ $specLaptop->procesador_ghz }} GHz,
                                        {{ $specLaptop->procesador_nucleos }} Núcleos,
                                        RAM {{ $specLaptop->ram_gb }} GB
                                        {{ $specLaptop->ram_tipo }},
                                        Disco duro {{ $specLaptop->discod_gb }} GB
                                        {{ $specLaptop->discod_tipo }}
                                    </p>
                                
                                    {{-- Evalúa si el precio tiene descuento --}}
                                    @if ($specLaptop->product->price_discount)
                                        <h2 id="product--price">
                                            @convert($specLaptop->product->price_discount)
                                        </h2>
                                    
                                        <p id="product--orig-price" class="p--description">
                                            @convert($specLaptop->product->price)
                                        </p>
                                    @else
                                        <h2 id="product--price">
                                            @convert($specLaptop->product->price)
                                        </h2>
                                    @endif
                                    
                                    {{-- Evalúa si es necesario calcular el porcentaje del descuento --}}
                                    @if ($specLaptop->product->price_discount)
                                        <p id="product--discount">
                                            {{-- Cálculo de % descuento --}}
                                            {{ round( 100 - (($specLaptop->product->price_discount / $specLaptop->product->price) * 100)) }} % OFF
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </a>
                        @endif
                    @endforeach
                @else
                    @if ($msgResultEmpty == 'Lo sentimos por el momento no contamos con stock.')
                        <h1>{{ $msgResultEmpty }}</h1>
                    @else
                        <a href="{{ route('home.index') }}" title="Volver a serestech.com.mx"><h1>{{ $msgResultEmpty }} Clic aquí volver a inicio</h1></a>
                    @endif
                @endif
                    
            </div>
        </div>
        {{ $specsLaptop->links() }}
    </main>
    {{--*
        * FOOTER
    --}}
    <footer class="footer">
        <div id="footer--logo">
            <img src="{{ asset('storage/images/logo-large-b.svg') }}" alt="Logo SeresTech">
        </div>
    
        <div id="footer--number">
            <p><i class='bx bxs-phone'></i>
                Llama ahora al +52 81 1064 9320
            </p>
        </div>
    
            <div id="footer--buttons" class="nav--buttons">
                <a class="a--icon outl--blue-ow" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" title="Encuéntranos en Facebook SeresTech21" >
                    <img src="{{ asset('storage/images/social-media/fb-rounded-style.svg') }}" alt="Encuéntranos en Facebook">
                </a>
            
                <a class="a--icon outl--blue-ow input--ow" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/" title="Síguenos en Instagram serestech21">
                    <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg') }}" alt="Síguenos en Instagram">
                </a>
            
                <button class="button--neutral-ow popup-message popup-message-bot">
                    Envios
                    <p>
                        El envio de nuestros productos se acuerda al momento
                        de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                        pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
                    </p>
                </button> 
            
                <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer" title="Contáctanos a través de Whatsapp">
                    <button class="button--whatsapp-ow">
                        Contáctanos
                        <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Contáctanos a través de Whatsapp">
                    </button>
                </a>
            </div>
        
        <div id="footer--adress">
            <p>Mazapil 112, col, Mitras Centro, 64460 Monterrey, N.L.</p>
        </div>
    
        <div class="static-message">
            <p>
                El envio de nuestros productos se acuerda al momento
                de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
            </p>
        </div>
           
        <div id="footer--currencies">
            <img src="{{ asset('storage/images/currencies/mastercard.svg') }}" alt="Contamos con medios de pago como tarjetas de débito y crédito Mastercard">
            <img src="{{ asset('storage/images/currencies/visa.svg') }}" alt="Contamos con medios de pago como tarjetas de débito y crédito Visa">
            <img src="{{ asset('storage/images/currencies/paypal.svg') }}" alt="Contamos con medios de pago como transferencia por Paypal">
            <img src="{{ asset('storage/images/currencies/711.svg') }}" alt="Contamos con medios de pago como depósito y transferencia bancaria por 7Eleven">
            <img src="{{ asset('storage/images/currencies/oxxo.svg') }}" alt="Contamos con medios de pago como depósito y transferencia bancaria por Oxxos">
        
            <div id="cryptocurrencies" class="box--ow-max">
                <img src="{{ asset('storage/images/currencies/shib.svg')}}" alt="Contamos con medios de pago">
                <img src="{{ asset('storage/images/currencies/bitcoin.svg')}}" alt="Contamos con medios de pago">
            </div>
        </div>
    </footer>
</div>

@section('scripts')
    <script src="{{ asset('storage/js/home.js') }}"></script>
    <script src="{{ asset('storage/js/menu.js') }}"></script>
@endsection

@endsection

