<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request)
{
    // Filter book titles by search query term if present
    //
    if ($term = $request->get('term')) {
        $books = Book::where('title', 'LIKE', '%'.$term.'%')->get();
    }
    else {
        $books = Book::all();
    }

    return view('welcome', [
        'books' => $books,
        'term' => $term
    ]);
});

Route::get('/edit/{id}', function (int $id) {
    $book = Book::findOrFail($id);

    return view('edit', [
        'book' => $book
    ]);
});

Route::post('/edit/{id}', function (Request $request, int $id) {
    $book = Book::find($id);

    $validated = $request->validate([
        'title' => 'required|string',
        'author' => 'required|string',
        'rating' => 'required|numeric|min:1|max:10'
    ]);

    $book->update($validated);

    return view('edit', [
        'book' => $book,
    ]);
});


