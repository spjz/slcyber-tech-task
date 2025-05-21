<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/books', BookController::class);
Route::apiResource('/genres', GenreController::class);

// Add genres to a book
Route::post('books/{book}/genres', [BookController::class, 'attachGenres']);
// Remove genres from a book
Route::delete('books/{book}/genres', [BookController::class, 'detachGenres']);
