<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('questions/view/{exam_id}', 'viewquestion_exam')->name('view.exam.question');
        Route::get('question/view/{id}', 'viewquestion_exam')->name('view.question');
        Route::view('question/add/{exam_id}', 'admin.question.add')->name('add.question');
        Route::post('question/store/{exam_id}', 'questionstore')->name('question.store');
        Route::get('question/delete/{question_id}', 'deletequestion')->name('question.delete');
    });
    Route::controller(StudentController::class)->group(function () {
        Route::get('student/view', 'viewstudent')->name('view.student');
        Route::get('student/add', 'addstudent')->name('add.student');
        Route::post('student/store', 'storestdent')->name('store.student');
        Route::get('student/edit/{id}', 'editstudent')->name('edit.student');
        Route::post('student/update/{id}', 'updatestudent')->name('update.student');
    });
    Route::controller(ExamController::class)->group(function () {
        Route::get('exam/view', 'index')->name('view.exam');
        Route::view('exam/add', 'admin.exam.add')->name('add.exam');
        Route::post('exam/store', 'storeexam')->name('store.exam');
    });
});
