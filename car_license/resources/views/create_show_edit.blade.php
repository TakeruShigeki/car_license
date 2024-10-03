<x-app-layout>

    <div class="w-full flex flex-col">
        @if ($screen_id == 'create')
        <label for="body" class="font-semibold leading-none mt-4 text-center text-4xl ">問題文</label>

        <textarea name="quiz" class="mx-24 py-2 border border-gray-300 rounded-md " id="body" cols="30"
        rows="10">
        </textarea>
        @endif
        <div class="flex justify-center space-x-10 mt-6">
            <!-- 〇ボタン -->
            <div class="flex items-center">
            <input type="radio" id="maru" name="marubatsu" value="maru" class="hidden peer">
            <label for="maru" class="flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-green-600 hover:bg-green-100 peer-checked:bg-green-500 peer-checked:text-white">
                〇
            </label>
            </div>
        
            <!-- ✕ボタン -->
            <div class="flex items-center">
            <input type="radio" id="batsu" name="marubatsu" value="batsu" class="hidden peer">
            <label for="batsu" class="flex items-center justify-center cursor-pointer w-16 h-16 rounded-full border border-gray-400 text-2xl text-red-600 hover:bg-red-100 peer-checked:bg-red-500 peer-checked:text-white">
                ✕
            </label>
            </div>
        </div>
        
            <div class="flex justify-center items-center mt-10">
                <button class="bg-gradient-to-r from-teal-400 to-blue-500 text-white font-bold py-3 px-6 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                送信
                </button>
            </div>
        
        
    </div>

        
</x-app-layout>
