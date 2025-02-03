<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\{
    PreviewController,
    SubjectController,
    DocController,
    AuthController,
    PageController,
};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // this is the link to subject controller
    Route::get('addSubject',[SubjectController::class,'addSubject'])->name('addSubject');
    Route::post('postSubject',[SubjectController::class,'postSubject'])->name('postSubject');
    Route::get('viewsubject',[SubjectController::class,'viewSubject'])->name('viewsubject');
    Route::get('subject/delete{id}',[SubjectController::class,'subjectdelete'])->name('subject.delete');


    //this is the link to questions controller 
    Route::get('viewquestions',[QuestionController::class,'view'])->name('viewquestions');
    Route::get('addquestions',[QuestionController::class,'add'])->name('addquestions');
    Route::post('/postquestions', [QuestionController::class, 'postquestions'])->name('postquestions');
    Route::post('/uploadquestions', [QuestionController::class, 'uploadquestions'])->name('uploadquestions');

    Route::get('/previewquestion', [PreviewController::class, 'question'])->name('preview.question');

    Route::post('/preview', [PreviewController::class, 'preview'])->name('preview');
 
    Route::post('/downloaddoc', [DocController::class, 'downloadDoc'])->name('downloaddoc');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
   
});
