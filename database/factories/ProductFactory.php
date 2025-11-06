<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),  // Ex : "Elegant Saree"
            'description' => $this->faker->sentence(10), // Une phrase aléatoire
            'price' => $this->faker->numberBetween(1000, 25000), // Prix entre 1000 et 25000
            'image' => $this->faker->imageUrl(640, 480, 'fashion', true, 'Product'), // Image fictive
        ];
    }
}
