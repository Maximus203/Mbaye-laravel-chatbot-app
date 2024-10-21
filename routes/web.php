<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('register', 'pages.authentication.register')->name('register');
Route::view('login', 'pages.authentication.login')->name('login');
Route::view('dashboard', 'pages.dashboard')->middleware('auth')->name('dashboard');
