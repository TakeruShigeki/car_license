<x-app-layout>

    <div class="bg-gradient-to-r from-blue-100 via-orange-100 to-yellow-100">
        @foreach ($quizzes as $quiz)
        <div class="ml-64 leading-[6rem]">
        <span class="hover:text-blue-500 text-4xl font-semibold text-shadow1">・{{$quiz->quiz}}</span>
        </div>
    </div>
        
    <div class="flex justify-center space-x-10 mt-6 answer">
            <!-- 〇ボタン -->
            <div class="flex items-center">
                
                {{-- <input type="radio" id="maru_{{$quiz->id}}" title="{{route('checkAnswer',[$quiz->id])}}" name="kind_{{$quiz->id}}" value="1" class="hidden peer">
                <label for="maru_{{$quiz->id}}" class="maru-label flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-green-600 hover:bg-green-100 peer-checked:bg-green-500 peer-checked:text-white">
                    〇
                </label> --}}
                <?php $answer=1; ?>
                <button class="answer_button" title="{{route('ajaxAnswerUpdate',[$answer,$quiz->id])}}" >
                    〇
                </button>
                </div>
                <div class="flex items-center">
                    <?php $answer=0; ?>
                    <button class="answer_button" title="{{route('ajaxAnswerUpdate',[$answer,$quiz->id])}}" >
                        ✕
                    </button>
                    </div>
                    <div>
                        <p class="hidden" id='clear_{{$quiz->id}}'>正解</p>
                        <p class="hidden"id='notclear_{{$quiz->id}}'>不正解</p>
                    </div>


            <!-- ✕ボタン -->
            {{-- <div class="flex items-center">
                <input type="radio" id="batsu_{{$quiz->id}}" title="{{route('checkAnswer',[$quiz->id])}}" name="kind_{{$quiz->id}}" value="0" class="hidden peer">
                <label for="batsu_{{$quiz->id}}" class="batsu-label flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-red-600 hover:bg-red-100 peer-checked:bg-red-500 peer-checked:text-white">
                    ✕
                </label>

            </div> --}}
        </div>
        @endforeach

</x-app-layout>