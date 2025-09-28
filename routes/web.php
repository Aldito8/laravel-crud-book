<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
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
