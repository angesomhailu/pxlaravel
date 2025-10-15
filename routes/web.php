<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', function () {
    return 'student ';
});
Route::get('/about/{name}/{age}', function ($name, $age) {
    return view('aboutus')->with('name', $name)->with('age', $age);
});
Route::fallback(function () {
    return "the page you access is not founded";
});
