<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Http\Services\Genre\Store;
use App\Http\Services\Genre\Update;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Successfully fetched the genres.',
            'data' => Genre::all()
        ]);
    }

    public function store(StoreRequest $request, Store $store)
    {
        $genre = $store($request->validated());

        return response()->json([
            'message' => 'Successfully created the genre.',
            'data' => $genre
        ], 201);
    }

    public function update(UpdateRequest $request, Update $update, Genre $genre)
    {
        $updatedGenre = $update($request->validated(), $genre);

        return response()->json([
            'message' => 'Successfully updated the genre.',
            'data' => $updatedGenre
        ]);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json([
            'message' => 'Successfully deleted the genre.'
        ]);
    }
}
