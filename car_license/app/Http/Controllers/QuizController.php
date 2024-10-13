<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function carQuizIndex()
    {   
        $quizzes = Quiz::all();
        //ページネーション
        $quizzes = Quiz::with('favorite')->paginate(10); // 1ページに10件表示
        
        return view('car_quiz.index', compact("quizzes"));
    }
    public function store(Request $request)
    {
    $quiz = new Quiz();
    $quiz->quiz = $request->quiz;
    $quiz->kind = $request->kind;
    $quiz->commentary = $request->commentary;
    $quiz->image = $request->image;
    if (request('image')){
        $image = request()->file('image')->getClientOriginalName();
        request()->file('image')->move('storage/images', $image);
        $quiz->image = $image;
    }
    $quiz->save();
    $quizzes= Quiz::all();
    return view('create',compact("quizzes"));
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

    public function favoriteQuizIndex()
    {
        
        $user = Auth::user();
    
        // お気に入りのクイズを取得
        $quizzes = Quiz::with('favorite')
            ->whereHas('favorite', function ($query) use ($user) {
                $query->where('user_id', $user->id)
                      ->where('favorite_flag', 1); // お気に入りフラグが1のもののみ
            })
            ->get();
        
        
        
        return view('car_quiz.favorite', compact("quizzes"));
    }

    // 削除機能
    public function delete($quiz_id)
    {
        // まず、クイズを削除
    Quiz::destroy($quiz_id);

    // そのクイズに関連するFavoriteを削除
    $favorite = Favorite::where('quiz_id', $quiz_id)->first();
    if ($favorite) {
        $favorite->delete(); // $favoriteインスタンスに対してdeleteを実行
    }

    // デバッグ用コードを削除し、リダイレクト
    return redirect()->route('carQuizIndex');
    }
    
}