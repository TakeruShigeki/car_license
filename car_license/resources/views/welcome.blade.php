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
        <link rel="stylesheet" href="/build/assets/app-l3Xj1WLY.css">
        <script src="/build/assets/app-CSsv4iKa.js" type="module"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-slate-200 via-slate-300 to-slate-400 min-h-screen  items-center justify-center">
        <div class="text-center mb-10 shadow-md">
            <h1 class="text-5xl font-extrabold text-stone-700 tracking-wide bg-clip-text text-transparent bg-gradient-to-r from-slate-700 to-slate-500">
                Car License
            </h1>
        </div>
        
        <div class="max-w-4xl  mx-auto px-7.5 py-8 bg-gradient-to-r from-slate-200 via-slate-300 to-slate-400 bg-opacity-80 rounded-2xl backdrop-blur-md shadow-md">
            <div class="text-center text-3xl font-extrabold text-stone-700/80 mb-8 ">
                いつでもどこでも手軽に運転免許の勉強ができるサービスです
            </div>
    
            <ul class="list-none font-bold text-lg text-gray-700 mb-6 space-y-3 pl-6">
                <li><span class="animate-ping">・</span>教習所の先生が出題されやすい問題をピックアップ！</li>
                <li><span class="animate-ping">・</span>お気に入り機能で、自分だけの問題集が作れちゃう！</li>
                <li><span class="animate-ping">・</span>解説付きだから深く理解できる！</li>
            </ul>   
    
            @if (Route::has('login'))
                <nav class="flex justify-center space-x-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="px-5 py-3 bg-cyan-700 text-white font-semibold rounded-lg shadow-lg hover:bg-teal-500 transition-transform transform hover:scale-105"
                        >
                            ダッシュボード
                        </a>
                    @else
                    <div class="animate-bounce">
                        <a
                            href="{{ route('login') }}"
                            class="px-5 py-3 bg-cyan-700 text-white font-semibold rounded-lg shadow-lg hover:bg-teal-500 transition-transform transform hover:scale-105"
                        >
                            ログイン
                        </a>
                    </div>
                    <div class="animate-bounce">
                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="px-5 py-3 bg-sky-800 text-white font-semibold rounded-lg shadow-lg hover:bg-teal-500 transition-transform transform hover:scale-105"
                                >
                                    新規登録
                                </a>
                            @endif
                    </div>
                    @endauth
                </nav>
            @endif
        </div>
    </body>
    
</html>
