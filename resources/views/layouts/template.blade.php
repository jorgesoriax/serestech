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
    {{-- Aditional styles --}}
    @yield('css')
    {{-- Head scripts --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <script src="{{ asset('vendor/jquery-3.6.0/jquery.min.js') }}"></script>
    @yield('hscripts')
</head>
<body>
    <div id="universal--container">
        @yield('content')
    </div>
    <script src="{{ asset('vendor/shortcut/shortcut.js') }}"></script>
    @yield('scripts')
</body>
</html>