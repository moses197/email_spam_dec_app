<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/signup', [UserController::class, 'register'])->name('register');

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
})->name('index')->middleware('auth');

Route::get('/user', function() {
    return view('app-user');
})->middleware('auth');


Route::get('/message', function () {
    return view('app-message');
})->middleware('auth');
Route::post('/messages', [MessageController::class, 'store'])->name('messages-store')->middleware('auth');

Route::get('/email', function () {
    return view('app-mail');
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

