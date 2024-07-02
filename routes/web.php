<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [RegistrationController::class, 'show']);
Route::post('/', [RegistrationController::class, 'register'])->name('register');
