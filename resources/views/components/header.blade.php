<header class="header">
    <div class="header--container">
        <div id="header--logo">
            <a href="{{ route('home.index') }}" title="Volver a serestech.com.mx">
                <img src="{{ asset('storage/images/logo-large-w.svg') }}" id="logo-large" alt="Logo SeresTech">
                <img src="{{ asset('storage/images/logo-w.svg') }}" id="logo-tiny" alt="Logo SeresTech">
            </a>
        </div>
    
        <form action="{{ route('home.search') }}" method="GET" class="form-search-home">
            @include('components/search', ['style' => "input--ob outl--white-ob"])
        </form>
        
        <div id="header--nav--buttons" class="nav--buttons">
            <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" title="Encuéntranos en Facebook SeresTech21">
                <img src="{{ asset('storage/images/social-media/fb-rounded-style-a.svg')}}" alt="Encuéntranos en Facebook">
            </a>
        
            <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/" title="Síguenos en Instagram serestech21">
                <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg')}}" alt="Síguenos en Instragram">
            </a>
        
            <button class="button--neutral-ob popup-message popup-message-top">Envios<br>
                <p>El envio de nuestros productos se acuerda al momento de la compra.<br><br>Usted puede solicitar un envio a su domicilio, pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.</p>
            </button>
        
            <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer" title="Contáctanos a través de Whatsapp">
                <button class="button--whatsapp-ob">Contáctanos<br>
                    <img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Contáctanos a través de Whatsapp">
                </button>
            </a>
        
            <button class="menu sq outl--white-ob">
                <i class='bx bx-menu'></i>
            </button>
        </div>
    </div>
</header>