<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nouislider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/skin-demo-10.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/demo-10.css') }}">

        <title>Dehqony</title>
    </head>
    <body>
        @yield("content")
        <script defer src="{{ asset('assets/js/nouislider.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>