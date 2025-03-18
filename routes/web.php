<?php

use Illuminate\Support\Facades\Route;


$courses = [
    [
        'title' => 'Course 1',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 21,
        'length' => '2h 30m',
    ],
    [
        'title' => 'Course 2',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 16,
        'length' => '1h 50m',
    ],
    [
        'title' => 'Course 3',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 12,
        'length' => '1h 30m',
    ],
    [
        'title' => 'Course 4',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 32,
        'length' => '3h 45m',
    ],
];


Route::get('/', fn () => view('index', ['courses' => $courses]))->name('index');

Route::get('/courses', fn () => view('courses', ['courses' => $courses]))->name('courses');

Route::get('/course', fn () => view('course', ['course' => $courses[0]]))->name('course');


Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

