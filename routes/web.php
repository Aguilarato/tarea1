<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PublishersController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/books', [BooksController::class, 'Books'])->name('books');

route::get('/authors', [AuthorsController::class, 'authors'])->name('authors');

route::get('/publishers', [PublishersController::class, 'publishers'])->name('publishers');
