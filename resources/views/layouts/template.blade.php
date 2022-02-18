<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    {{-- Favicons --}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons-2.1.1/css/boxicons.min.css') }}">
    {{-- Styles --}}
    @yield('css')
    {{-- Head scripts --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    @yield('hscripts')
</head>
<body>
    @yield('content')
    @yield('scripts')
</body>
</html>