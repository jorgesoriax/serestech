@extends('layouts.template')
@section('title', 'Bienvenido a SeresTech')

@section('scripts')
    <script src="{{ asset('storage/js/home.js') }}"></script>
    <script src="{{ asset('storage/js/menu.js') }}"></script>
@endsection

@section('content')
{{--*
    * RESPONSIVE INDICATOR
--}}
<div id="responsive-indicator"></div>
{{--*
    * FACEBOOK PLUGIN
--}}
{{--
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "280004990468494");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>
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
<div id="menu--container" class="menu--container">
    <div id="content">
        Siguenos en nuestras redes
        <div id="content--social-media">
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
        </div>
        
        <div class="static-message">
            <p>
                El envio de nuestros productos se acuerda al momento
                de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
                pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
            </p>
        </div>
        <div id="content--whatsapp">
            <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer">
                <button class="button--whatsapp-ow">
                    Contactanos
                    <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}">
                </button>
            </a>
        </div>
        
    </div>
</div>
<div id="shadow"></div>
{{--*
    * HEADER
--}}
<header class="header">
    <div id="header--logo">
        <a href="{{ route('home.index') }}">
            <img src="{{ asset('storage/images/logo-large-w.svg') }}" id="logo-large">
            <img src="{{ asset('storage/images/logo-w.svg') }}"       id="logo-tiny">
        </a>
    </div>
   
    <div id="header--search" class="input">
        <label for="text-search"><i class="bx bx-search"></i></label>
        <input id="text-search" type="text" 
        placeholder="Buscar marca y más..." 
        class="input--ob outl--white-ob">    
    </div>

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

        <button class="button--neutral-ob popup-message popup-message-top"> Envios 
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

        <button class="menu sq outl--white-ob">
            <i class='bx bx-menu'></i>
        </button>
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
        <h2>Conoce nuestro stock</h2>
        <div id="catalog">

            {{-- Comprueba si la colección no esta vacía --}}
            @if ($specsLaptop->isNotEmpty() )
                @foreach ($specsLaptop as $specLaptop)

                    {{-- Comprueba si el producto cuenta con por lo menos 1 existencia--}}
                    @if ($specLaptop->product->inventory->stock > 0)
                    <a href="{{ $specLaptop->id }}" >
                        <div class="box--ow-max product--card" id="1">
                            <div class="product--image">
                                <label class="label">
                                    {{ $specLaptop->product->status_usage}}
                                </label>

                                {{-- @if ($specLaptop->product->file->image_1)
                                    @if ($specLaptop->product->file->image_2)
                                        <img src="{{ asset($specLaptop->product->file->image_2) }}">
                                    @else
                                        <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75 product--image-cover">
                                    @endif
                                    <img src="{{ asset($specLaptop->product->file->image_1) }}" class="product--image-cover"> 
                                @else
                                    <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75 product--image-cover">
                                @endif --}}

                                @if ($specLaptop->product->file->image_1)
                                    @if ($specLaptop->product->file->image_2)
                                        <img src="{{ asset($specLaptop->product->file->image_2) }}">
                                    @else
                                        <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75 product--image-cover">
                                    @endif 

                                    <img src="{{ asset($specLaptop->product->file->image_1) }}" class="product--image-cover">
                                @else
                                    <img src="{{ asset('storage/images/icons/noimage_75.png') }}" class="noimage-75">
                                @endif
                            </div>
                            <div class="product--info">
                                <h3 id="product--title">
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
                                    {{ $specLaptop->ram_gb }} GB
                                    {{ $specLaptop->ram_tipo }},
                                    {{ $specLaptop->discod_gb }} GB
                                    {{ $specLaptop->discod_tipo }}
                                </p>

                                {{-- Evalúa si el precio tiene descuento --}}
                                @if ($specLaptop->product->price_discount)
                                    <h2 id="product--price">
                                        $ @convert($specLaptop->product->price_discount)
                                    </h2>

                                    <p id="product--orig-price" class="p--description">
                                        $ @convert($specLaptop->product->price)
                                    </p>
                                @else
                                    <h2 id="product--price">
                                        $ @convert($specLaptop->product->price)
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
                <h1>Lo sentimos, por el momento no contamos con stock :(</h1>
            @endif

        </div>
    </div>
    <div>
        {{ $specsLaptop->links() }}
    </div>
</main>
{{--*
    * FOOTER
--}}
<footer class="footer">

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

            <button class="button--neutral-ow popup-message popup-message-bot">
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

    <div class="static-message">
        <p>
            El envio de nuestros productos se acuerda al momento
            de la compra. <br><br> Usted puede solicitar un envio a su domicilio,
            pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.
        </p>
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

