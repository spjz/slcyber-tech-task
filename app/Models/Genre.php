<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * Find books associated with the current genre
     */
    public function genres()
    {
        return $this->belongsToMany(Book::class, 'books_genres', 'books_id', 'genres_id');
    }
}
