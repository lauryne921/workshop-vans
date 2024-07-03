<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'show']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register');
