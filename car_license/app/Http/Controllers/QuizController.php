<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Favorite;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function carQuizIndex()
    {   
        $quizzes = Quiz::all();
        return view('car_quiz.index', compact("quizzes"));
    }
    public function store(Request $request)
    {
    $quiz = new Quiz();
    $quiz->quiz = $request->quiz;
    $quiz->kind = $request->kind;
    $quiz->save();
    $quizzes= Quiz::all();
    return view('car_quiz.index',compact("quizzes"));
    
    }

    // 正誤判定
    public function ajaxAnswer($answer,$quiz_id,Quiz $quiz)
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


    //お気に入り
    public function ajaxQuizUpdate($quiz_id)
{
    $favorite = Favorite::where('quiz_id', $quiz_id)->where('user_id', auth()->user()->id)->first();

    if ($favorite == null) {
        $favorite = new Favorite();
        $favorite->quiz_id = $quiz_id;
        $favorite->user_id = auth()->user()->id;
        $favorite->favorite_flag = 1; 
        $favorite->save();
    } else {
        if ($favorite->favorite_flag == 1) {
            $favorite->favorite_flag = 0; // お気に入り解除
        } else {
            $favorite->favorite_flag = 1; // お気に入り登録
        }
        $favorite->save();
    }
    return $favorite->favorite_flag;
}
// 削除機能
    public function favoriteQuizIndex()
    {
        $quizzes = Quiz::all();
        return view('car_quiz.favorite', compact("quizzes"));
    }
    
    public function delete($quiz_id)
    {

        $quiz = Quiz::destroy($quiz_id);
        return redirect()->route('carQuizIndex');
    }
}