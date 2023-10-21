<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('dashboard', [StudentController::class, 'index'])->name('dashboard');
Route::get('viewexam/{id}', [ExamController::class, 'viewexam'])->name('view.exam');
Route::get('viewquestion/{id}', [ExamController::class, 'viewquestion'])->name('student.view.question');

Route::post('student/store/question',[ExamController::class,'storequestion'])->name('student.store.question');

Route::get('/questions/{questionId}', [ExamController::class, 'showQuestion'])->name('stt');