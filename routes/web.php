<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/porto', function () {
    return view('porto');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/achievement', function () {
    return view('achievement');
});
