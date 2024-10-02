<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <div class="main-wrapper">
            {{-- livewire header  --}}
            <livewire:layout.header />

            {{-- livewire side bar  --}}
            <livewire:layout.sidebar />
            {{ $slot }}
        </div>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/js/chart.js') }}"></script>
        <script src="{{ asset('assets/js/greedynav.js') }}"></script>

        <script src="{{ asset('assets/js/layout.js') }}"></script>
        <script src="{{ asset('assets/js/theme-settings.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="78f80dba05c6277541b31a48-|49" defer></script>
        @livewireScripts
    </body>
</html>
