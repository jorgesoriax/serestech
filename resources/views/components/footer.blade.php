<footer class="footer">
    <div id="footer--logo">
        <img src="{{ asset('storage/images/logo-large-b.svg') }}" alt="Logo SeresTech">
    </div>

    <div id="footer--number">
        <p><i class='bx bxs-phone'></i>Llame ahora al +52 81 1064 9320</p>
    </div>

        <div id="footer--buttons" class="nav--buttons">
            <a class="a--icon outl--blue-ow" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/SeresTech21/" title="Encuéntranos en Facebook SeresTech21" >
                <img src="{{ asset('storage/images/social-media/fb-rounded-style.svg') }}" alt="Encuéntranos en Facebook">
            </a>
        
            <a class="a--icon outl--blue-ow input--ow" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/serestech21/" title="Síguenos en Instagram serestech21">
                <img src="{{ asset('storage/images/social-media/ig-rounded-style-a.svg') }}" alt="Síguenos en Instagram">
            </a>
        
            <button class="button--neutral-ow popup-message popup-message-bot">Envios<br>
                <p>El envio de nuestros productos se acuerda al momento de la compra.<br><br>Usted puede solicitar un envio a su domicilio, pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.</p>
            </button> 
        
            <a href="https://wa.me/528110649320" target="_blank" rel="noopener noreferrer" title="Contáctanos a través de Whatsapp">
                <button class="button--whatsapp-ow">Contáctanos<img src="{{ asset('storage/images/social-media/whatsapp-w.svg') }}" alt="Contáctanos a través de Whatsapp"></button>
            </a>
        </div>
    
    <div id="footer--adress">
        <p>Mazapil 112, col, Mitras Centro, 64460 Monterrey, N.L.</p>
    </div>
    <div class="static-message">
        <p>El envio de nuestros productos se acuerda al momento de la compra.<br><br>Usted puede solicitar un envio a su domicilio, pasar a recogerlo a nuestras oficinas o acordar un punto de encuentro.</p>
    </div>
       
    <div id="footer--currencies">
        <img src="{{ asset('storage/images/currencies/mastercard.svg') }}" alt="Contamos con medios de pago como tarjetas de débito y crédito Mastercard">
        <img src="{{ asset('storage/images/currencies/visa.svg') }}" alt="Contamos con medios de pago como tarjetas de débito y crédito Visa">
        <img src="{{ asset('storage/images/currencies/paypal.svg') }}" alt="Contamos con medios de pago como transferencia por Paypal">
        <img src="{{ asset('storage/images/currencies/711.svg') }}" alt="Contamos con medios de pago como depósito y transferencia bancaria por 7Eleven">
        <img src="{{ asset('storage/images/currencies/oxxo.svg') }}" alt="Contamos con medios de pago como depósito y transferencia bancaria por Oxxos">
    
        <div id="cryptocurrencies" class="box--ow-max">
            <img src="{{ asset('storage/images/currencies/shib.svg')}}" alt="Contamos con medios de pago como SHIBA INU">
            <img src="{{ asset('storage/images/currencies/bitcoin.svg')}}" alt="Contamos con medios de pago como BITCOIN">
        </div>
    </div>

    <div id="footer--links">
        <a href="{{ route('docs.cookies') }}"><p class="p--description">Política de cookies</p></a>
    </div>
</footer>