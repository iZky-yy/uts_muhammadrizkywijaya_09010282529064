<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Fiksi',
            'description' => 'Buku cerita dan novel fiksi.',
        ]);

        Category::create([
            'name' => 'Teknologi',
            'description' => 'Buku tentang teknologi dan pemrograman.',
        ]);

        Category::create([
            'name' => 'Pendidikan',
            'description' => 'Buku untuk kebutuhan pendidikan dan pembelajaran.',
        ]);
    }
}
