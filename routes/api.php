<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::post('/quiz-response', [QuizController::class, 'store']);
Route::get('/quiz-responses', [QuizController::class, 'index']);