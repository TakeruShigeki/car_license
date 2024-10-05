<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    public function create()
    {
        return view('create', );
    }

    public function carQuizIndex()
    {
        $quizzes = Quiz::all();
        return view('car_quiz.index', compact("quizzes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $quiz = new Quiz();
    $quiz->quiz = $request->quiz;
    $quiz->kind = $request->kind;
    $quiz->save();
    $quizzes= Quiz::all();
    return view('car_quiz.index' , compact("quizzes"));
    
    }

    // 正誤判定↓
    public function ajaxAnswerUpdate($answer,$quiz_id,Quiz $quiz)
    {
            $item =Quiz::find($quiz_id);
        if($answer==$item->kind){
            $answer_flag=1;
        }else{
            $answer_flag=0;
        }
        return [
            'answer_flag' => $answer_flag,
            'quiz_id' => $quiz_id
        ];

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
