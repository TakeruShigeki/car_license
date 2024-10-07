<x-app-layout>

    <div class="bg-gradient-to-r from-blue-100 via-orange-100 to-yellow-100 p-8">
        <h1 class="text-3xl font-bold text-center mb-6">お気に入りクイズ</h1>

        @if ($quizzes->isEmpty())
            <p class="text-center text-lg">お気に入りのクイズがありません。</p>
        @else
            @foreach ($quizzes as $quiz)
                <div class="ml-64 mb-6 leading-[6rem]">
                    <span class="hover:text-blue-500 text-4xl font-semibold">・{{$quiz->quiz}}</span>
                    
                    @php
                        $color = ($quiz->favorite_flag == 1) ? 'background-color:yellow' : 'background-color:transparent';
                    @endphp

                    <button class="favorite_button" style="{{ $color }}" title="{{ route('ajaxQuizUpdate',[$quiz->id]) }}">
                        お気に入り
                    </button>
                </div>
            @endforeach
        @endif

    </div>

</x-app-layout>
