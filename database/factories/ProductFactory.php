<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'category_id' => Category::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 50, 1000),
            'old_price' => null,
            'stock' => fake()->numberBetween(0, 100),
            'image' => fake()->randomElement([
                'product01.png', 'product02.png', 'product03.png',
                'product04.png', 'product05.png', 'product06.png',
                'product07.png', 'product08.png', 'product09.png',
            ]),
        ];
    }
}
