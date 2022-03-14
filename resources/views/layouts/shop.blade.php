<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    {{-- Favicons --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" />
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons-2.1.1/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/fonts.css') }}">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    {{-- Aditional styles --}}
    @yield('css')
    {{-- Head scripts --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <script src="{{ asset('vendor/jquery-3.6.0/jquery.min.js') }}"></script>
    @yield('hscripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
  <div id="universal--container">
        {{--*
        * RESPONSIVE INDICATOR
        --}}
        {{-- <div id="responsive-indicator"></div> --}}
        {{--*
            * FACEBOOK PLUGIN
        --}}
        {{-- <div id="fb-root"></div>

        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

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

        {{-- * MENU --}}
        @include('components/menuHamburguer')

        {{-- * HEADER --}}
        @include('components/header')

        {{-- * CONTENT--}}
        @yield('content')

        {{-- * FOOTER --}}
        @include('components/footer')

        {{-- * COOKIES CONCENT --}}
        @include('cookieConsent::index')
  </div>
  <script src="{{ asset('storage/js/components/menu.js') }}"></script>
  <script src="{{ asset('vendor/shortcut/shortcut.js') }}"></script>
  @yield('scripts')
</body>
</html>