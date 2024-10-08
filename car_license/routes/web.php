<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('create_quiz',[QuizController::class,'create'])
->name('createQuiz');
Route::get('car_quiz_index',[QuizController::class,'carQuizIndex'])
->name('carQuizIndex');
Route::post('store_quiz',[QuizController::class,'store'])
->name('storeQuiz');
Route::get('ajax_answer/{answer}/{quiz_id}', [QuizController::class, 'ajaxAnswer'])
->name('ajaxAnswer');
Route::get('ajax_quiz_update/{quiz_id}/', [QuizController::class, 'ajaxQuizUpdate'])
->name('ajaxQuizUpdate');
Route::get('favorite_quiz_index',[QuizController::class,'favoriteQuizIndex'])
->name('favoriteQuizIndex');




