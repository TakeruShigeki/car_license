<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"> 
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        {{-- @vite(['resources/js/app.js', 'resources/css/app.css']) --}}
        <link rel="stylesheet" href="/build/assets/app-BsdchGtb.css">
        <script src="/build/assets/app-CSsv4iKa.js" type="module"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-slate-200 via-slate-300 to-slate-400">
        <div class="">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="/build/assets/app-CSsv4iKa.js" type="module"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
    </body>
</html>
