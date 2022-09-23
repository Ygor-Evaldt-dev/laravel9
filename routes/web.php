<?php

use App\Http\Controllers\{
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

// COMMENTS ROUTES
Route::get('users/{id}/create', [CommentController::class, 'create'])->name('comments.create');

Route::get('users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');

Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');

Route::delete('comments/{id}', [CommentController::class, 'delete'])->name('comments.delete');

Route::post('users/{id}/create', [CommentController::class, 'store'])->name('comments.store');

Route::get('users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

// USERS ROUTES
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
