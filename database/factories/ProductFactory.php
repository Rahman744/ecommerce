<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'quantity' => $this->faker->numberBetween(1, 100),
            'is_top' => $this->faker->boolean(20),
            'is_sale' => $this->faker->boolean(30),
            'category_id' => Category::inRandomOrder()->first()->id,
            'image' => 'default.png', // временно
        ];
    }
}
