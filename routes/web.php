<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/HomeC', [HomeC::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});