<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::delete('users/{id}/delete', [UserController::class, 'delete'])->name('users.delete');

Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('users/{id}', [UserController::class, 'details'])->name('users.details');


Route::get('/', function () {
    return view('welcome');
});
