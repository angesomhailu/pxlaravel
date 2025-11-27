<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::fallback(function () {
    return view('notfoundpage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/edit/{id}', [TeacherController::class, 'edit']);
//teachers routes
Route::prefix('/teacher')->controller(TeacherController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'teachers.create');
    Route::post('/create', 'create');
    Route::get('/edit/{id}', 'edit');
    Route::post('/edit/{id}', 'update');
    Route::get('/delete/{id}', 'destroy');
    Route::get('/show/{id}', 'show');
});
//students routes
Route::prefix('/student')->controller(StudentController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'students.create');
    Route::post('/create', 'create');
    Route::get('/edit/{id}', 'edit');
    Route::post('/edit/{id}', 'update');
    Route::get('/delete/{id}', 'destroy');
    Route::get('/show/{id}', 'show');
});
