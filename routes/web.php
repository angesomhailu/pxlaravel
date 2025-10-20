<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/{name}/{id}', [TeacherController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::fallback(function () {
    return "The route you are looking for does not exist.";
});
