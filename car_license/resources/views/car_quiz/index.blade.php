<x-app-layout>

    <div class="bg-gradient-to-r from-blue-100 via-orange-100 to-yellow-100">
        @foreach ($quizzes as $quiz)
        <div class="ml-64 leading-[6rem]">
        <span class="hover:text-blue-500 text-4xl font-semibold text-shadow1">・{{$quiz->quiz}}</span>
        </div>
    </div>
    @endforeach

</x-app-layout>