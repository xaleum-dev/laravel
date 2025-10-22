<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

// Route untuk Book
Route::apiResource('books', BookController::class);

// Route untuk Author dan Genre
Route::apiResource('authors', AuthorController::class);
Route::apiResource('genres', GenreController::class);
