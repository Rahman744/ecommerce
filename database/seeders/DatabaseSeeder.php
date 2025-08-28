<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(10)->create();

        // Если есть другие сидеры, можно их вызвать так:
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
