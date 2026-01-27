<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

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
             // Product name: 2 random words, capitalized
            'name' => ucfirst($this->faker->words(2, true)),
            
             // Description: 2 sentences
            'description' => $this->faker->paragraph(2),
            
             // Price between 500 and 15000
            'price' => $this->faker->numberBetween(500, 15000),
            
             // Image placeholder
            'image' => 'products/placeholder.jpg',
            
                        // Safe category assignment: pick a random existing category, or create a new one if none exists
            'category_id' => Category::query()
                ->inRandomOrder()
                ->first()?->id
                ?? Category::factory(),
            
             // 20% chance of being trendy
            'is_trendy' => $this->faker->boolean(20),
            
              // Random discount
            'discount_percent' => $this->faker->randomElement([0, 10, 20, 50]),
        ];
    }
}