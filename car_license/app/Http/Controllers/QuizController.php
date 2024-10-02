<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    public function create()
    {
        $screen_id = "create";
        return view('create_show_edit', compact("screen_id"));
    }

    public function carQuizIndex()
    {
        // $quizzes = Quiz::where("kind",1)->orderBy("created_at","desc")->paginate(5);
        $screen_id = "car_quiz";
        return view('car_quiz.index');
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

    
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
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
