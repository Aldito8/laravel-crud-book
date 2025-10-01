<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);

Route::get('/book', [BookController::class, 'index'])->name('book.index');

Route::post('/book', [BookController::class, 'store'])->name('book.store');

Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');

Route::put('/book/{id}/update', [BookController::class, 'update'])->name('book.update');

Route::delete('/book/{id}/delete', [BookController::class, 'destroy'])->name('book.destroy');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

Route::get('/register', [UserController::class, 'registerPage'])->name('user.registerPage');

Route::post('/user/login', [UserController::class, 'login'])->name('user.login');

Route::get('/login', [UserController::class, 'loginPage'])->name('user.loginPage');
