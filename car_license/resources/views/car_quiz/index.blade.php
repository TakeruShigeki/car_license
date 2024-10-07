<x-app-layout>

    <div class="bg-gradient-to-r from-blue-100 via-orange-100 to-yellow-100">
        @foreach ($quizzes as $quiz)
        <div class="ml-64 leading-[6rem]">
        <span class="hover:text-blue-500 text-4xl font-semibold text-shadow1">・{{$quiz->quiz}}</span>

        @php
        $color = ''; // デフォルトの色
        if ($quiz->favorite_flag== 1) {
            $color = 'background-color:yellow';
        }else if($quiz->favorite_flag== 0){
        $color = 'background-color:transparent';
        }
        @endphp
        <button class="favorite_button" style="{{ $color }}" title="{{ route('ajaxQuizUpdate',[$quiz->id]) }}">
            お気に入り
        </button>
        </div>
    </div>
        
    <div class="flex justify-center space-x-10 mt-6 answer">
            <!-- 〇ボタン -->
            <div class="flex items-center">
                <?php $answer=1; ?>
                <button class="answer_button" title="{{route('ajaxAnswer',[$answer,$quiz->id])}}" >
                    〇
                </button>
                </div>
                <div class="flex items-center">
                    <?php $answer=0; ?>
                    <button class="answer_button" title="{{route('ajaxAnswer',[$answer,$quiz->id])}}" >
                        ✕
                    </button>
                    </div>
                    <div>
                        <p class="hidden" id='clear_{{$quiz->id}}'>正解</p>
                        <p class="hidden"id='notclear_{{$quiz->id}}'>不正解</p>
                    </div>
        </div>
        @endforeach

</x-app-layout>