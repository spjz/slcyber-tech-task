<?php

namespace App\Http\Services\Book;

use App\Models\Book;
use App\Models\Genre;

class Store
{
    public function __invoke(array $data): Book
    {
        $book = Book::create([
            'title' => $data['title'],
            'author' => $data['author'],
            'rating' => $data['rating']
        ]);

        // Attach genre if defined
        // if (!empty($data['genre'])) {
        //     $genres = Genre::create([
        //         'name' => $data['genre']
        //     ]);
        //     $book->genres()->attach($genres);
        // }

        return $book;
    }
}
