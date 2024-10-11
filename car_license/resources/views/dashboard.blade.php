<x-app-layout>
        


        

        <div class="min-h-screen
        bg-gradient-to-r from-slate-200 via-slate-300 to-slate-400">
                <div class="text-center pt-40">
                <a href="{{route('carQuizIndex')}}">

                <span class="text-blue-600 text-5xl font-bold text-center my-20 hover:text-blue-500 text-shadow1">問題一覧</span>
        
                </a>
                </div>
        
                <div class="text-center my-20">
                <a href="{{route('favoriteQuizIndex')}}">
                <span class="text-blue-600 text-5xl font-bold text-center my-20 hover:text-blue-500 text-shadow">お気に入り</span>
                </a>
                </div>
        </div>
</x-app-layout>
