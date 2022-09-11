<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/', function () {
    return view('welcome');
});
