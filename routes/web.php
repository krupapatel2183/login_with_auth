<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('dashboard',[AuthController::class, "dashBoardPage"])->name("dashboard");
