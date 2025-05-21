<?php

namespace App\Http\Services\Genre;

use App\Models\Genre;

class Destroy
{
    public function __invoke(Genre $genre): void
    {
        $genre->delete();
    }
}
