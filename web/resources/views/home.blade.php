@extends('layouts.template')

@section('title', 'SeresTech')

@section('scripts')
    <script src="../resources/js/slider.js"></script>
@endsection

@section('content')

<!--
* RESPONSIVE INDICATOR
-->

{{-- <div id="responsive-indicator"><br>
    <a href="product" target="_blank" rel="noopener noreferrer">
        Clic aquí para ver el diseño de producto o en cualquier tarjeta de producto de abajo
    </a>
</div> --}}

<!--
* MESSENGER PLUGIN
-->

    <!-- <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102771732286590");
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
    </script> -->

<!--
    * HEADER 
-->

{{-- <header>
    <div id="header--logo">
        <a href="../public/">
            <svg width="100%" height="100%" viewBox="0 0 597 73" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,0.000319139,0.00732769)">
                    <g>
                        <path d="M26.62,72C21.974,72.067 17.362,71.211 13.05,69.48C9.298,67.971 6.029,65.464 3.6,62.23C1.238,58.983 -0.023,55.065 0,51.05L15.41,51.05C15.489,53.652 16.601,56.119 18.5,57.9C20.701,59.676 23.485,60.575 26.31,60.42C29.67,60.42 32.31,59.65 34.22,58.1C36.096,56.582 37.162,54.273 37.1,51.86C37.153,49.948 36.432,48.093 35.1,46.72C33.707,45.325 32.019,44.259 30.16,43.6C27.549,42.565 24.877,41.69 22.16,40.98C18.28,39.908 14.469,38.599 10.75,37.06C7.83,35.678 5.264,33.646 3.25,31.12C1.217,28.433 0.203,24.873 0.21,20.44C0.122,16.576 1.233,12.777 3.39,9.57C5.627,6.419 8.734,3.986 12.33,2.57C16.49,0.809 20.973,-0.067 25.49,0C32.89,0 38.89,1.78 43.49,5.34C48.09,8.9 50.653,13.787 51.18,20L35.35,20C35.243,17.643 34.072,15.457 32.17,14.06C29.973,12.357 27.236,11.497 24.46,11.64C22.021,11.522 19.617,12.274 17.68,13.76C15.966,15.323 15.055,17.585 15.21,19.9C15.164,21.661 15.832,23.367 17.06,24.63C18.454,25.893 20.054,26.907 21.79,27.63C23.7,28.37 26.38,29.24 29.79,30.25C33.683,31.311 37.496,32.648 41.2,34.25C44.179,35.61 46.786,37.668 48.8,40.25C50.933,43.03 52,46.613 52,51C52.011,54.706 50.971,58.341 49,61.48C46.867,64.828 43.839,67.513 40.26,69.23C35.985,71.185 31.319,72.132 26.62,72Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M299.11,72C294.549,72.067 290.021,71.209 285.8,69.48C282.102,67.962 278.894,65.453 276.53,62.23C274.205,58.969 272.969,55.055 273,51.05L288.12,51.05C288.183,53.637 289.261,56.099 291.12,57.9C293.266,59.671 296.002,60.571 298.78,60.42C302.08,60.42 304.66,59.65 306.54,58.1C308.393,56.568 309.438,54.263 309.37,51.86C309.437,49.961 308.746,48.11 307.45,46.72C306.092,45.329 304.438,44.262 302.61,43.6C300.052,42.573 297.434,41.705 294.77,41C290.962,39.928 287.225,38.619 283.58,37.08C280.708,35.688 278.193,33.656 276.23,31.14C274.23,28.473 273.23,24.913 273.23,20.46C273.139,16.603 274.232,12.808 276.36,9.59C278.533,6.447 281.584,4.012 285.13,2.59C289.189,0.827 293.575,-0.056 298,0C305.253,0 311.13,1.78 315.63,5.34C320.13,8.9 322.65,13.787 323.19,20L307.67,20C307.577,17.653 306.43,15.469 304.55,14.06C302.406,12.377 299.721,11.531 297,11.68C294.601,11.565 292.24,12.318 290.35,13.8C288.663,15.378 287.773,17.635 287.93,19.94C287.879,21.694 288.531,23.398 289.74,24.67C291.102,25.93 292.672,26.945 294.38,27.67C296.26,28.41 298.88,29.283 302.24,30.29C306.062,31.351 309.801,32.688 313.43,34.29C316.362,35.662 318.921,37.72 320.89,40.29C322.963,43.043 324,46.613 324,51C324.019,54.696 323.008,58.326 321.08,61.48C319.004,64.814 316.035,67.499 312.51,69.23C308.32,71.185 303.731,72.134 299.11,72Z" style="fill:white;fill-rule:nonzero;"/>
                        <path d="M78.67,11.48L78.67,29.22L106,29.22L106,40.7L78.67,40.7L78.67,60.52L106,60.52L106,72L65,72L65,0L106,0L106,11.48L78.67,11.48Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M232.67,11.48L232.67,29.22L260,29.22L260,40.7L232.67,40.7L232.67,60.52L260,60.52L260,72L219,72L219,0L260,0L260,11.48L232.67,11.48Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M416.33,11.48L416.33,29.22L443,29.22L443,40.7L416.33,40.7L416.33,60.52L443,60.52L443,72L403,72L403,0L443,0L443,11.48L416.33,11.48Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M390,0L390,11.66L370.75,11.66L370.75,72L356.25,72L356.25,11.66L337,11.66L337,0L390,0Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M456,36.05C455.888,29.563 457.471,23.158 460.59,17.47C463.547,12.112 467.929,7.674 473.25,4.65C478.745,1.521 484.977,-0.085 491.3,0C498.576,-0.149 505.721,1.97 511.74,6.06C517.592,10.11 521.913,16.016 524,22.82L508,22.82C506.579,19.656 504.209,17.01 501.22,15.25C498.177,13.517 494.721,12.642 491.22,12.72C487.394,12.659 483.627,13.674 480.35,15.65C477.185,17.593 474.636,20.396 473,23.73C471.196,27.581 470.309,31.798 470.41,36.05C470.323,40.3 471.209,44.514 473,48.37C474.657,51.725 477.212,54.557 480.38,56.55C483.679,58.463 487.437,59.441 491.25,59.38C494.751,59.463 498.209,58.588 501.25,56.85C504.218,55.028 506.57,52.355 508,49.18L524,49.18C521.926,56.007 517.604,61.936 511.74,66C505.709,70.06 498.568,72.156 491.3,72C484.991,72.088 478.767,70.523 473.25,67.46C467.961,64.39 463.589,59.959 460.59,54.63C457.471,48.942 455.888,42.537 456,36.05Z" style="fill:white;fill-rule:nonzero;"/>
                        <path class="logo-header--i" d="M596,0L596,72L581.73,72L581.73,41.36L551.27,41.36L551.27,72L537,72L537,0L551.27,0L551.27,29.6L581.73,29.6L581.73,0L596,0Z" style="fill:white;fill-rule:nonzero;"/>
                        <path id="logo-header--shape" 
                        d="M205.25,72L132.62,72L119,45L119,0L191.63,0L191.63,45L205.25,72ZM132.62,13.5L132.62,45L139.43,58.5L184.82,58.5L178,45L178,13.5L132.62,13.5Z" style="fill:white;fill-rule:nonzero;"/>
                        <path id="logo-header--shape" 
                        d="M191.5,0L205.25,0L205.25,45L219,72L205.25,72L191.5,45L191.5,0Z" style="fill:white;fill-opacity:0.5;fill-rule:nonzero;"/>
                        <path id="logo-header--r" d="M154.938,72L139.546,43.943L132.949,43.943L132.949,72L118.956,72L118.956,0L145.143,0C150.54,0 155.138,0.997 158.936,2.991C162.734,4.917 165.566,7.564 167.432,10.934C169.364,14.235 170.33,17.948 170.33,22.075C170.33,26.82 168.998,31.118 166.332,34.969C163.667,38.751 159.702,41.364 154.438,42.808L171.13,72L154.938,72ZM132.949,33.112L144.643,33.112C148.441,33.112 151.273,32.183 153.139,30.327C155.005,28.401 155.938,25.754 155.938,22.384C155.938,19.083 155.005,16.539 153.139,14.751C151.273,12.894 148.441,11.966 144.643,11.966L132.949,11.966L132.949,33.112Z" style="fill:white;fill-rule:nonzero;"/>
                    </g>
                </g>
            </svg>
        </a>
    </div>
   
    <div id="header--search" class="input">
        <label for="text-search"><i class="bx bx-search"></i></label>
        <input id="text-search" type="text" placeholder="Buscar por modelo, marca, componente y más..." class="input--ob outl--white-ob">    
    </div>

    <div id="header--nav--buttons" class="nav--buttons">

        <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer"
        href="https://www.facebook.com/SeresTech21/" >
            <img src="../resources/img/social-media/fb-rounded-style-a.svg" 
            title="Encuentranos en Facebook">
        </a>

        <a class="a--icon outl--white-ob" target="_blank" rel="noopener noreferrer"
        href="https://www.instagram.com/serestech21/">
            <img src="../resources/img/social-media/ig-rounded-style-a.svg" 
            title="Siguenos en Instagram">
        </a>

        <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer">
            <button class="button--whatsapp-ob">
                Contactanos
                <img src="../resources/img/social-media/whatsapp-w.svg" alt="">
            </button>
        </a>

        <!-- 
            * FAQ BUTTON
            <button class="button--neutral-ob"> FAQ </button>
        -->
    </div>

</header> --}}
<!-- 
    * SLIDER
-->   
{{-- <section class="container--slider">

    <div class="slider" id="slider">
        <div class="slider--section">
        <img src="../resources/img/slider/img1.jpg" alt="">
        </div>

        <div class="slider--section">
        <img src="../resources/img/slider/img2.jpg" alt="">
        </div>

        <div class="slider--section">
        <img src="../resources/img/slider/img3.jpg" alt="">
        </div>
    </div>

    <button class="button--neutral-ow slider--button slider--button-r" id="button--r">
        <i class='bx bx-chevron-right'></i>
    </button>

    <button class="button--neutral-ow slider--button slider--button-l" id="button--l">
        <i class='bx bx-chevron-left'></i>
    </button>
    
</section> --}}
<!-- 
    * MAIN
-->
<main id="main--products">

    <div id="container--catalog">
        <h2>Nuestro stock</h2>
        <div id="catalog">

        <!--
            * Consulta de productos desde el modelo SpecificationsLaptop
        -->
        @foreach ($specs as $spec)
    
            <a href="{{ $spec->id }}" >
                <div class="box--ow-max product--card" id="1">
                    <div class="product--image">
                        <label class="label">
                            {{ $spec->product->status_usage}}
                        </label>

                        <img src="../resources/img/products/img4.jpg">
                    </div>
                    <div class="product--info">
                        <h3 id="product--title">
                            {{ $spec->equipo_marca }} 
                            {{ $spec->equipo_linea }} 
                            {{ $spec->equipo_modelo }}
                        </h3>

                        <p id="product--description" class="p--description" >
                           {{ $spec->ram_gb }}
                           {{ $spec->ram_tipo }},
                           {{ $spec->discod_gb }}
                           {{ $spec->discod_tipo }},
                           {{ $spec->procesador_marca }}
                           {{ $spec->procesador_modelo }} Gen
                           {{ $spec->procesador_gen }}, 
                           {{ $spec->procesador_mhz }} MHz,
                           {{ $spec->procesador_nucleos }} Núcleos...
                        </p>

                        <h2 id="product--price">
                            $ {{ $spec->product->price_discount }}
                        </h2>
                        <p id="product--discount">
                            @if ($spec->product->price_discount === "")
                                Nulo    
                            @else
                                {{ round( 100 - (($spec->product->price_discount / $spec->product->price) * 100)) }} % OFF
                            @endif
                        </p>
                        <p id="product--orig-price" class="p--description">
                            $ {{ $spec->product->price }}
                        </p>
                    </div>
                </div>
            </a>

            @endforeach

    
    {{-- <div class="pagination">
        <button class="button--neutral-ow">Anterior</button>
        <button class="button--neutral-ow sq">1</button>
        <button class="button--neutral-ow sq">2</button>
        <button class="button--neutral-ow sq">3</button>
        <button class="button--neutral-ow">Siguiente</button>
    </div> --}}

</main>
<!--
    * FOOTER
-->
<footer>

    <div id="footer--logo">
        <img src="../resources/img/logo-large-b.svg" alt="">
    </div>

    <div id="footer--number">
        
        <p><i class='bx bxs-phone'></i>
            Llamanos al +52 81 1064 9320</p>
    </div>

        <div id="footer--buttons" class="nav--buttons">
            <a class="a--icon outl--blue-ow" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" >
                <img src="../resources/img/social-media/fb-rounded-style.svg" title="Encuentranos en Facebook">
            </a>
    
            <a class="a--icon outl--blue-ow input--ow" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/">
                <img src="../resources/img/social-media/ig-rounded-style-a.svg" title="Siguenos en Instagram">
            </a>

            <!-- 
                * FAQ BUTTON
                <button class="button--neutral-ow"> Preguntas frecuentes </button> 
            -->

            <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer">
                <button class="button--whatsapp-ow">
                    Contactanos
                    <img src="../resources/img/social-media/whatsapp-w.svg" alt="">
                </button>
            </a>
        </div>

    <div id="footer--adress">
        <p>Mazapil 112, col, Mitras Centro, 64460 Monterrey, N.L.</p>
    </div>
       
    <div id="footer--currencies">
        <img src="../resources/img/currencies/mastercard.svg" alt="">
        <img id="i-footer--visa" src="../resources/img/currencies/visa.svg" alt="">
        <img src="../resources/img/currencies/paypal.svg" alt="">
        <img src="../resources/img/currencies/711.svg" alt="">
        <img src="../resources/img/currencies/oxxo.svg" alt="">

        <div id="cryptocurrencies" class="box--ow-max">
            <img src="../resources/img/currencies/shib.svg" alt="">
            <img src="../resources/img/currencies/bitcoin.svg" alt="">
        </div>
    </div>
</footer>

@endsection

