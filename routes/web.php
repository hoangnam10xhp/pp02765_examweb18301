<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/books', [BooksController::class, 'index'])->name('BooksIndex');
Route::get('/books/create', [BooksController::class, 'create']);
Route::post('/books/store', [BooksController::class, 'store']);
Route::get('/books/update/{id}', [BooksController::class, 'edit']);
Route::post('/books/update/{id}', [BooksController::class, 'update']);
Route::get('/books/delete/{id}', [BooksController::class, 'destroy']);
