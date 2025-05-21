<?php

namespace App\Http\Services\Genre;

use App\Models\Genre;

class Update
{
    public function __invoke(array $data, Genre $genre): Genre
    {
        $genre->update($data);
        return $genre;
    }
}
