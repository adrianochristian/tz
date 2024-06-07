<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'home'])->name('home');

Route::post('/login', [LoginController::class, 'login'])->name('login');