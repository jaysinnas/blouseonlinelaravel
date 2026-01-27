<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use App\Models\Category;

// class CategorySeeder extends Seeder
// {
    /**
     * Run the database seeds.
     */
//     public function run(): void
//     {
//         $categories = [
//             ['name' => 'Babies', 'slug' => 'babies_dresses'],
//             ['name' => 'Kids', 'slug' => 'kids'],
//             ['name' => 'Aari Blouse', 'slug' => 'aari_blouse'],
//             ['name' => 'Mother & Daughter', 'slug' => 'mum_daughter'],
//             ['name' => 'Women', 'slug' => 'women'],
//             ['name' => 'Men', 'slug' => 'men'],
//             ['name' => 'Accessories', 'slug' => 'accessories'],
//            ['name' => 'Shoes', 'slug' => 'shoes', 'folder' => 'trendy_shoes'],
//         ];

//         foreach ($categories as $category) {
//             Category::firstOrCreate(
//                 ['slug' => $category['slug']],
//                 ['name' => $category['name'],
//                 'folder_name' => $category['folder']
//                 ]
//             );
//         }
//     }
// }


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Babies', 'slug' => 'babies-dresses'],
            ['name' => 'Kids', 'slug' => 'kids'],
            ['name' => 'Aari Blouse', 'slug' => 'aari-blouse'],
            ['name' => 'Mother & Daughter', 'slug' => 'mother-daughter'],
            ['name' => 'Women', 'slug' => 'women'],
            ['name' => 'Men', 'slug' => 'men'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'folder_name' => 'trendy_bag'],
            ['name' => 'Shoes', 'slug' => 'shoes', 'folder_name' => 'trendy_shoes'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'folder_name' => $category['folder_name'] ?? null,
                ]
            );
        }
    }
}
