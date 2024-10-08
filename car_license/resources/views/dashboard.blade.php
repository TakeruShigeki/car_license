<x-app-layout>

        <div class="min-h-screen
        bg-no-repeat bg-cover bg-center">
                <div class="text-center pt-40">
                <a href="{{route('carQuizIndex')}}">

                <span class="text-blue-600 text-5xl font-bold text-center my-20 hover:text-blue-500 text-shadow1">問題一覧</span>
        
                </a>
                </div>
        
                <div class="text-center my-20">
                <a href="{{route('favoriteQuizIndex')}}">
                <sapn class="text-blue-600 text-5xl font-bold text-center my-20 hover:text-blue-500 text-shadow">お気に入り</sapn>
                </a>
                </div>
        </div>
</x-app-layout>
