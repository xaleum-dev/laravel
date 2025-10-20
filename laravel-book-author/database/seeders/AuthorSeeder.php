<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create(['name' => 'Nur Hasanah', 'email' => 'nur@example.com', 'bio' => 'Creative storyteller']);
        Author::create(['name' => 'Raka Dimas', 'email' => 'raka@example.com', 'bio' => 'Fiction writer']);
        Author::create(['name' => 'Siti Aisyah', 'email' => 'siti@example.com', 'bio' => 'Romance novelist']);
        Author::create(['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'bio' => 'Tech blogger']);
        Author::create(['name' => 'Lia Ramadhani', 'email' => 'lia@example.com', 'bio' => 'Children book author']);
    }
}
