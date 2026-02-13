<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Babies',
             'slug' => 'babies_dresses',
             'folder_name' => 'babies_dresses'
             ],
            ['name' => 'Kids',
             'slug' => 'kids',
             'folder_name' => 'kids',
             ],
            ['name' => 'Aari Blouse',
             'slug' => 'aari_blouse',
             'folder_name' => 'aari_blouse',
             ],
            ['name' => 'Mother & Daughter',
             'slug' => 'mother-daughter',
             'folder_name' => 'mum_daughter',
             ],
            ['name' => 'Women',
             'slug' => 'women',
             'folder_name' => 'women',
             ],
            ['name' => 'Men',
             'slug' => 'men',
             'folder_name' => 'men',],
            
            ['name' => 'Shoes',
             'slug' => 'trendy_shoes',
             'folder_name' => 'trendy_shoes',
             ],
            ['name' => 'Bags',
             'slug' => 'trendy_bags',
             'folder_name' => 'trendy_bags',
            ],
            ['name' => 'Scarfs',
             'slug' => 'trendy_scarfs',
              'folder_name' => 'trendy_scarfs',
            ],
            ['name' => 'Hats',
             'slug' => 'trendy_hats',
             'folder_name' => 'trendy_hats',
            ],
            ['name' => 'Dresses',
             'slug' => 'trendy_dresses',
              'folder_name' => 'trendy_dresses',
            ],
            ['name' => 'Trendy & Stylish',
             'slug' => 'trendystylish',
             'folder_name' => 'trendystylish',]
        
         ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
                // [
                //   'name' => $category['name'],
                //   'folder_name' => $category['folder_name'],
                // ]
            );
        }
    }
} 
