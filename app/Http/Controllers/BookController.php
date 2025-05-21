<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\DestroyRequest;
use App\Http\Requests\Book\IndexRequest;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Http\Services\Book\Destroy;
use App\Http\Services\Book\Index;
use App\Http\Services\Book\Store;
use App\Http\Services\Book\Update;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(IndexRequest $request, Index $index)
    {
        return response()->json([
            'message' => 'Successfully fetched the books.',
            'data' => $index()
        ]);
    }

    public function store(StoreRequest $request, Store $store)
    {
        $book = $store($request->validated());

         return response()->json([
            'message' => 'Successfully stored the book.',
            'data' => $book
        ]);
    }

    public function update(UpdateRequest $request, Update $update, Book $bookToUpdate)
    {
        $updatedBook = $update($request->validated(), $bookToUpdate);

        return response()->json([
            'message' => 'Successfully updated the book.',
            'data' => $updatedBook
        ]);
    }

    public function destroy(DestroyRequest $request, Destroy $destroy, Book $book)
    {
        $destroy($book);

        return response()->json([
            'message' => 'Successfully deleted the book.',
        ]);
    }

    public function attachGenres(Request $request, Book $book)
    {
        $request->validate([
            'genre_ids' => 'required|array',
            'genre_ids.*' => 'exists:genres,id'
        ]);

        $book->genres()->attach($request->genre_ids);

        return response()->json([
            'message' => 'Successfully attached genres to the book.',
            'data' => $book->load('genres')
        ]);
    }

    public function detachGenres(Request $request, Book $book)
    {
        $request->validate([
            'genre_ids' => 'required|array',
            'genre_ids.*' => 'exists:genres,id'
        ]);

        $book->genres()->detach($request->genre_ids);

        return response()->json([
            'message' => 'Successfully detached genres from the book.',
            'data' => $book->load('genres')
        ]);
    }
}
