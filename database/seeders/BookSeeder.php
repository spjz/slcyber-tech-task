<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Book::truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Book::factory()
            ->count(5)
            ->create()
            ->each(function ($book) {
                // Attach one random genre to each book
                $book->genres()->attach(
                    Genre::inRandomOrder()
                        ->take(1)
                        ->get()
                );
            });
    }
}
