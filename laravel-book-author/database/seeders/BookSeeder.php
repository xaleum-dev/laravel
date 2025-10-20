<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $authors = Author::all();

        Book::create([
            'title' => 'The Hidden Path',
            'author_id' => $authors[0]->id,
            'genre' => 'Romance',
            'year_published' => 2022,
        ]);

        Book::create([
            'title' => 'Code of Shadows',
            'author_id' => $authors[1]->id,
            'genre' => 'Science Fiction',
            'year_published' => 2021,
        ]);

        Book::create([
            'title' => 'Ocean Whisper',
            'author_id' => $authors[2]->id,
            'genre' => 'Drama',
            'year_published' => 2023,
        ]);

        Book::create([
            'title' => 'Digital Dreams',
            'author_id' => $authors[3]->id,
            'genre' => 'Technology',
            'year_published' => 2020,
        ]);

        Book::create([
            'title' => 'Magic of Words',
            'author_id' => $authors[4]->id,
            'genre' => 'Fantasy',
            'year_published' => 2024,
        ]);
    }
}
