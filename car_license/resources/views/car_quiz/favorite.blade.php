<x-app-layout>
    <div class="container mx-auto py-8 px-4 ">
    <div class="bg-gradient-to-r from-blue-100 via-orange-100 to-yellow-100 p-8">
        <h1 class="text-3xl font-bold text-center mb-6">お気に入りクイズ</h1>

        @if ($quizzes->isEmpty())
            <p class="text-center text-lg">お気に入りのクイズがありません。</p>
        @else
            @foreach ($quizzes as $quiz)
            <div class="p-8 rounded-lg shadow-xl mb-6 ">
        
                <div class="p-5">
                    @php
                $color = ''; 
                if ($quiz->favorite_flag== 1) {
                    $color = 'color:orange';
                }else if($quiz->favorite_flag== 0){
                    $color = 'color:';
                }
                @endphp
                    
                <button class="favorite_button font-bold underline decoration-sky-500 ml-0" 
                style="{{ $color }}" title="{{ route('ajaxQuizUpdate', [$quiz->id]) }}">
                <span class=" duration-300 bg-gradient-to-r from-blue-200 to-orange-200 hover:shadow-lg rounded-full px-4 py-2 transform hover:scale-105">お気に入り</span>
                </button>
                <br>
                <br>
                <span class=" text-4xl font-semibold">・{{$quiz->quiz}}</span>
                    
                    @php
                        $color = ($quiz->favorite_flag == 1) ? 'background-color:yellow' : 'background-color:transparent';
                    @endphp

                </div>
                <div class="container mx-auto py-8">
                    <div class="flex justify-center space-x-10 mt-6 answer">
                        <!-- 〇ボタン -->
                        <div class="flex items-center">
                            <?php $answer = 1; ?>
                            <button class="answer_button bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out" title="{{ route('ajaxAnswer',[$answer, $quiz->id]) }}">
                                〇
                            </button>
                        </div>
            
                        <!-- ✕ボタン -->
                        <div class="flex items-center">
                            <?php $answer = 0; ?>
                            <button class="answer_button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out" title="{{ route('ajaxAnswer',[$answer, $quiz->id]) }}">
                                ✕
                            </button>
                        </div>
            
                        <div>
                            <p class="hidden" id='clear_{{$quiz->id}}'>正解</p>
                            <p class="hidden" id='notclear_{{$quiz->id}}'>不正解</p>
                        </div>
                    </div>
            </div>
        </div>
            
            @endforeach
        @endif

    </div>
</div>

</x-app-layout>
