<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AtheletController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});
Route::fallback(function () {
    return "The route you are looking for does not exist.";
});
//teachers routes
Route::get('/added-teacher', [TeacherController::class, 'create']);
Route::get('/show-teacher/{id}', [TeacherController::class, 'show']);
Route::get('/update-teacher/{id}', [TeacherController::class, 'edit']);
Route::get('/delete-teacher/{id}', [TeacherController::class, 'destroy']);
Route::get('/watch-teacher', [TeacherController::class, 'getData']);
//student routes
Route::get('/add-student', [StudentsController::class, 'create']);
Route::get('/store-student', [StudentsController::class, 'store']);
Route::get('/show-student/{id}', [StudentsController::class, 'show']);
Route::get('/edit-student/{id}', [StudentsController::class, 'edit']);
Route::get('/delete-student', [StudentsController::class, 'destroy']);
//athelets routes
Route::get('/athelets', [AtheletController::class, 'index']);
Route::get('/add-athelet', [AtheletController::class, 'create']);
Route::get('/show-athelet/{id}', [AtheletController::class, 'show']);
Route::get('/edit-athelet/{id}', [AtheletController::class, 'edit']);
Route::get('/delete-athelet/{id}', [AtheletController::class, 'destroy']);
Route::get('/store-athelet', [AtheletController::class, 'store']);
Route::prefix('/student')->controller(StudentsController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'students.create');
});
Route::prefix('/teacher')->controller(TeacherController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'teachers.create');
    Route::post('/create', 'create');
});
//cars routes
Route::prefix('/cars')->controller(CarController::class)->group(function () {
    Route::get('/', 'index');
    Route::view('/create', 'cars.create');
    Route::post('/create', 'create');
});
