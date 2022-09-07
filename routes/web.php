<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('users/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/', function () {
    return view('welcome');
});
