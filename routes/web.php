<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
});

require __DIR__.'/auth.php';
