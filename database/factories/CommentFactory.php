<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'    => $this->faker->name(),
            'email'   => $this->faker->unique()->safeEmail(),
            'comment' => $this->faker->paragraph(),
            //This picks a random ID from your exisiting products table
            'product_id' =>\App\Models\Product::pluck('id')->random(),
        ];
    }
}
