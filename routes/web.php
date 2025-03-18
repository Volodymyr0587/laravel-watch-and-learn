<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = DB::select("SELECT * FROM courses");

    return view('index', compact('courses'));
})->name('index');

Route::get('/courses', function () {
    $courses = DB::select("SELECT * FROM courses");

    return view('courses', compact('courses'));
})->name('courses');

Route::get("/course/{id}", function ($id) {
    $course = DB::selectOne("SELECT * FROM courses WHERE id = :id", compact('id'));

    return view('course', compact('course'));
})->name('course');


Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

