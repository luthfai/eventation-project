<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
        {{-- playfair --}}
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet'>
        {{-- roboto --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <div class="w-full sm:max-w-md mt-6 px-10 py-8 bg-white shadow-md overflow-hidden sm:rounded-xl">
                <div>
                    <a href="/">
                        <h1 class="font-[Merriweather] tracking-widest text-center font-extrabold mb-10 px-10 text-2xl text-gray-900">Eventation</h1>
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
