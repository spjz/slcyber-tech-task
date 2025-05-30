<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books_genres', function (Blueprint $table) {
            $table->id();

            // Books foreign key
            $table->unsignedBiginteger('books_id')->unsigned();
            $table->foreign('books_id')->references('id')
                ->on('books')->onDelete('cascade');

            // Genres foreign key
            $table->unsignedBiginteger('genres_id')->unsigned();
            $table->foreign('genres_id')->references('id')
                ->on('genres')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_genres');
    }
};
