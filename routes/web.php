<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AtheletController;

Route::get('/', function () {
    return view('welcome');
});
Route::fallback(function () {
    return "The route you are looking for does not exist.";
});
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/added-teacher', [TeacherController::class, 'create']);
Route::get('/show-teacher/{id}', [TeacherController::class, 'show']);
Route::get('/update-teacher/{id}', [TeacherController::class, 'edit']);
Route::get('/delete-teacher/{id}', [TeacherController::class, 'destroy']);
//student routes
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/add-student', [StudentsController::class, 'create']);
Route::get('/show-student/{id}', [StudentsController::class, 'show']);
Route::get('/edit-student/{id}', [StudentsController::class, 'edit']);
Route::get('/delete-student/{id}', [StudentsController::class, 'destroy']);
//athelets routes
Route::get('/athelets', [AtheletController::class, 'index']);
Route::get('/add-athelet', [AtheletController::class, 'create']);
Route::get('/show-athelet/{id}', [AtheletController::class, 'show']);
Route::get('/edit-athelet/{id}', [AtheletController::class, 'edit']);
Route::get('/delete-athelet/{id}', [AtheletController::class, 'destroy']);
