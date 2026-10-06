<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);

    Route::resource('categories', CategoryController::class)
        ->except(['show']);
});

require __DIR__.'/auth.php';
