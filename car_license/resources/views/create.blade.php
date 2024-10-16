<x-app-layout>
    <div class="mt-10">
    <div class="min-h-screen bg-gradient-to-r from-slate-200 via-slate-300 to-slate-400 ">
    <div class="w-full flex flex-col">
        
        
        <label for="body" name="quiz" class="font-semibold leading-none mt-4 text-center text-4xl ">問題文</label>
        <form method="post" action="{{route('storeQuiz')}}" enctype="multipart/form-data">
        @csrf
        <textarea name="quiz" class="mx-auto py-2 border border-gray-300 rounded-md " id="body" rows="10" style="width: 80%; max-width: 600px; margin: 0 auto; display: block;" >
        </textarea> 
        <!--画像をアップロード-->
        <div class="mt-6 text-center">
            <label class="block font-semibold leading-none text-xl" for="image">画像をアップロード</label>
            <input type="file" name="image" class="mt-2">
        </div>
        <div class="flex justify-center space-x-10 mt-6">
            <!-- 〇ボタン -->
            <div class="flex items-center">
            <input type="radio" id="maru" name="kind" value=1 class="hidden peer">
            <label for="maru" class="flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-green-600 hover:bg-green-100 peer-checked:bg-green-500 peer-checked:text-white">
                〇
            </label>
            </div>
        
            <!-- ✕ボタン -->
            <div class="flex items-center">
            <input type="radio" id="batsu" name="kind" value=0 class="hidden peer">
            <label for="batsu" class="flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-red-600 hover:bg-red-100 peer-checked:bg-red-500 peer-checked:text-white">
                ✕
            </label>
            </div>
        </div>
            <!-- 解説 -->
            <div for="body"class="font-semibold leading-none mt-4 text-center text-4xl ">解説</div>
            <textarea name="commentary" class="mx-auto py-2 border border-gray-300 rounded-md " id="body" rows="5" style="width: 80%; max-width: 600px; margin: 0 auto; display: block;" >
            </textarea>
        </div>
            
        
            <div class="flex justify-center items-center mt-10">
                <button class="bg-gradient-to-r from-teal-400 to-blue-500 text-white font-bold py-3 px-6 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                送信
                </button>
            </div>
            
        
    </div>
</div>
</div>
</x-app-layout>
