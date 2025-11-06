<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create some products
        Product::create([
            'name' => 'Aari Work Blouse',
            'price'=> 5000,
            'description' => 'Embroidery Blouse traditionnelle ',
            'image' => 'storage/products/aari_redgreen.jpg',

        ]);
        Product::create([
            'name' => 'Bridal Blouse Design',
            'price' => 12000,
            'description' => 'Blouse de mariage avec design unique',
            'image' => 'storage/products/aari_gold.jpg',
        ]);

        Product::create([
            'name' => 'Mother and Daughter',
            'price' => 15000,
            'description' => 'Tenue assortie mère-fille',
            'image'=> 'storage/products/aari_maroon.jpg',
        ]);

         Product::factory(10)->create();
        
    }
}
