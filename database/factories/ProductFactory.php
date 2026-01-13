<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
    //  * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),  
            // Ex : "Elegant Saree"
            'description' => $this->faker->sentence(10), 
            // Une phrase aléatoire
            'price' => $this->faker->numberBetween(1000, 25000),
             // Prix entre 1000 et 25000
            'image' => $this->faker->imageUrl(640, 480, 'fashion', true, 'Product'), 
            // Image fictive
        ];
    }
}
// ***********************************

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Product;
// use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
// class ProductFactory extends Factory
// {
//     protected $model = Product::class;
    
    // A list of dummy filenames that we can cycle through
    // protected static $imageFiles = [
    //     'saree_a.jpg',
    //     'blouse_fancy.png',
    //     'trousers_linen.jpg',
    //     'dress_ethnic.jpeg',
    //     'kurta_simple.jpg',
    // ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
        // Use a counter to cycle through the image file names for variety
        // $imageKey = $this->faker->numberBetween(0, count(self::$imageFiles) - 1);

        // Try to pick a real file from storage to reduce repeated images
        // $files = [];
        // try {
        //     $files = Storage::disk('public')->allFiles('products');
        // } catch (\Exception $e) {
            // ignore and fallback to the static list
        //     $files = [];
        // }

        // $imagePath = null;
        // if (!empty($files)) {
        //     try {
                // attempt to get a unique file for this faker instance
            //     $imagePath = $this->faker->unique()->randomElement($files);
            // } catch (\Throwable $e) {
                // if unique can't be satisfied, pick any file
        //         $imagePath = $this->faker->randomElement($files);
        //     }
        // }

        // return [
            // 'name' => $this->faker->words(2, true) . ' ' . $this->faker->randomElement(['Blouse', 'Saree', 'Tunic', 'Dress']),
            // 'description' => $this->faker->sentence(10),
            // 'price' => $this->faker->randomFloat(2, 500, 25000), // Ensures a decimal price
            
              // Store path relative to the public disk so the accessor returns '/storage/products/...'
    //           'image' => $imagePath ?? ('products/' . self::$imageFiles[$imageKey]),
    //     ];
    // }



    
// }