<x-app-layout>
    @php
    $user = Auth::user();
    @endphp
    <div class="container mx-auto py-8 px-4 ">
        <div class=" p-8">
            <h1 class="text-stone-700/80 text-3xl font-bold text-center mb-6">問題一覧</h1>
            @foreach ($quizzes as $quiz)
            <div class="p-8 rounded-lg shadow-xl mb-6 ">
                
                    
                    <div class="p-5">
                        @php 
                    $color = ''; 
                    if ($quiz->favorite) {
                        $quiz->favorite->user_id;
                        if($user->id == $quiz->favorite->user_id) {
                            $quiz->favorite->favorite_flag;
                            if ($quiz->favorite->favorite_flag == 1) {
                                $color = 'color:aqua';
                            } else if ($quiz->favorite->favorite_flag == 0) {
                                $color = 'color:';
                            }
                        } else if (null == $quiz->favorite->user_id) {
                            $color = 'color:';
                        }
                    }
                        @endphp
                    <!-- お気に入りボタン -->
                    <button class="favorite_button font-bold ml-0" 
                        style="{{ $color }}" title="{{ route('ajaxQuizUpdate', [$quiz->id]) }}">
                        <span class=" duration-300 bg-gradient-to-r from-slate-500 via-slate-400 to-slate-500 hover:shadow-lg rounded-full px-4 py-2 transform hover:scale-105">お気に入り</span>
                    </button>
                    </div>
                    <!-- 問題テキスト -->
                    <span class="font-semibold text-base sm:text-lg md:text-2xl lg:text-4xl xl:text-2xl" >・{{$quiz->quiz}}</span>
                    <!-- 画像 -->
                    @if($quiz->image)
                    <div class="text-center mt-6 ">
                    <img src="{{ asset('storage/images/'.$quiz->image)}}" alt="画像" class="mx-auto" style="width: 50%;">
                    </div>
                    @endif
        <!-- 回答ボタンエリア -->
        
        <div class="text-center">
            <br>
            <br>
            <p class="hidden font-bold text-green-500" id='clear_{{$quiz->id}}'>正解
                <br><span class="">{{$quiz->commentary}}
            </p>
            <p class="hidden font-bold text-rose-500" id='notclear_{{$quiz->id}}'>不正解</p>
        </div>
        <div class="container mx-auto py-8">
            
            <div class="flex justify-center space-x-10 mt-6 answer">
                <!-- 〇ボタン -->
                <div class="flex items-center">
                    <?php $answer = 1; ?>
                    <button class="answer_button bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out" title="{{ route('ajaxAnswer',[$answer,$quiz->id]) }}">
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
                @can('admin')
                    <form action="{{ route('delete', [$quiz->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded" onClick="return confirm('本当に削除しますか？');">削除</button>
                        
                    </form>
                    @endcan
            </div>
        </div>
    </div>
        @endforeach
        <!-- ページネーションリンク -->
        <div class="mt-4">
            {{ $quizzes->links('vendor.pagination.tailwind') }} <!-- ページネーションのリンク -->
        </div>
        </div>
    </div>
</x-app-layout>