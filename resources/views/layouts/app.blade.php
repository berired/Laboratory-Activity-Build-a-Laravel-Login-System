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
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,600;9..144,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased" style="font-family: 'Manrope', sans-serif;">
        <div class="min-h-screen bg-[radial-gradient(circle_at_8%_10%,#fff2c7_0,#ffe8c8_24%,transparent_45%),radial-gradient(circle_at_92%_8%,#ffd9be_0,#ffc7ae_24%,transparent_46%),linear-gradient(155deg,#fff6ec_0%,#ffecd9_60%,#ffe1ca_100%)]">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="mx-auto mt-4 w-full max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="rounded-2xl border border-white/70 bg-white/75 px-6 py-5 shadow-[0_12px_30px_-20px_rgba(15,23,42,0.45)] backdrop-blur">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
