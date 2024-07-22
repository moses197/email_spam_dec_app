<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('authenticate');

Route::post('/signup', [UserController::class, 'register'])->name('register');

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/index', [MessageController::class, 'index'])->name('index')->middleware('auth');

Route::get('/user', [UserController::class, 'list_users'])->middleware('auth');


Route::get('/message', function () {
    return view('app-message');
})->middleware('auth');
Route::post('/messages', [MessageController::class, 'store'])->name('messages-store')->middleware('auth');

Route::get('/email', [MessageController::class, 'list_email'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/broke', function() {
    return view('app-mail-detail');
});

Route::post('logout', [UserController::class, 'logout']);