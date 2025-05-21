<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    /**
     * Find genres associated with the current book
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'books_genres', 'genres_id', 'books_id');
    }
}
