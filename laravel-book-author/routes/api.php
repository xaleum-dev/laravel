<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di file ini kita mendefinisikan semua route API.
| Route publik bisa diakses siapa pun (tanpa login),
| sedangkan route admin dilindungi oleh middleware 'auth:api' dan 'role:admin'.
|
*/

// 🟢 ROUTE PUBLIK (bisa diakses tanpa autentikasi)
Route::get('/authors', [AuthorController::class, 'index']);      // Read all authors
Route::get('/authors/{id}', [AuthorController::class, 'show']);  // Show author by ID

Route::get('/genres', [GenreController::class, 'index']);        // Read all genres
Route::get('/genres/{id}', [GenreController::class, 'show']);    // Show genre by ID


// 🔐 ROUTE ADMIN (hanya bisa diakses oleh user dengan role = 'admin')
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {

    // 🔸 CRUD untuk Author
    Route::post('/authors', [AuthorController::class, 'store']);     // Create new author
    Route::put('/authors/{id}', [AuthorController::class, 'update']); // Update author
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']); // Delete author

    // 🔸 CRUD untuk Genre
    Route::post('/genres', [GenreController::class, 'store']);       // Create new genre
    Route::put('/genres/{id}', [GenreController::class, 'update']);  // Update genre
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']); // Delete genre



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});
