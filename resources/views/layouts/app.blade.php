<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- SEO is Must -->
        <title>{{ isset($metatitle) ? $metatitle : 'Ceylon Sport Club'  }}</title>
        <meta name="description" content="{{ isset($metadescription) ? $metadescription : 'Ceylon Sport Club' }}">
        <meta name="keywords" content="{{ isset($metakeywords) ? $metakeywords : 'Ceylon Sport Club' }}">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
        <link rel="icon" href="{{asset('images\new_logo.svg')}}" type="image/x-icon" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>
            body {
                font-family: 'Helvetica Neue Bold', sans-serif;
            }
        </style>
    </head>



    <body>
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            <x-navigation-menu :pages="$pages" :teams="$teams" />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
