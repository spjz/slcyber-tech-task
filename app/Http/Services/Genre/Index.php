<?php

namespace App\Http\Services\Genre;

use App\Models\Genre;

class Index
{
    public function __invoke()
    {
        return Genre::get();
    }
}
