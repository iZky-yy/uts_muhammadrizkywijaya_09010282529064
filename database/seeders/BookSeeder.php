<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'category_id' => 1,
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year' => 2005,
            'stock' => 10,
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Bumi',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia',
            'year' => 2014,
            'stock' => 8,
        ]);

        Book::create([
            'category_id' => 2,
            'title' => 'Belajar Laravel',
            'author' => 'Joko Santoso',
            'publisher' => 'Informatika',
            'year' => 2024,
            'stock' => 15,
        ]);

        Book::create([
            'category_id' => 2,
            'title' => 'Pemrograman Web',
            'author' => 'Budi Raharjo',
            'publisher' => 'Elex Media',
            'year' => 2023,
            'stock' => 12,
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'Dasar-Dasar Pendidikan',
            'author' => 'Ahmad Fauzi',
            'publisher' => 'Prenada Media',
            'year' => 2022,
            'stock' => 7,
        ]);
    }
}
