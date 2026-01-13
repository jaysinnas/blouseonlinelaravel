<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure categories exist and get their IDs
        $babiesId = Category::firstOrCreate(
            ['slug' => 'babies_dresses'],
            ['name' => 'Babies']
        )->id;

        $kidsId = Category::firstOrCreate(
            ['slug' => 'kids'],
            ['name' => 'Kids']
        )->id;

        $aariblouseId = Category::firstOrCreate(
            ['slug' => 'aari_blouse'],
            ['name' => 'Aari Blouse']
        )->id;

        $motherdaughterId = Category::firstOrCreate(
            ['slug' => 'mum_daughter'],
            ['name' => 'Mother & Daughter']
        )->id;

        $menId = Category::firstOrCreate(
            ['slug' => 'men'],
            ['name' => 'Men']
        )->id;

        // Babies
        $babiesProducts = [
            ['file' => 'baby_1.jpg', 'name' => 'Blue Baby Dress', 'description' => 'Soft blue babies outfit for comfort', 'price' => 950],
            ['file' => 'baby_2.jpg', 'name' => 'Yellow Baby Dress', 'description' => 'Cheerful yellow babies dress', 'price' => 899],
            ['file' => 'baby_3.jpg', 'name' => 'Green Baby Dress', 'description' => 'Green babies dress with traditional patterns', 'price' => 1100],
            ['file' => 'baby_4.jpg', 'name' => 'Pink Baby Set', 'description' => 'Pretty pink set for little ones', 'price' => 1200],
            ['file' => 'baby_5.jpg', 'name' => 'Blue Baby Dress', 'description' => 'Soft blue babies outfit for comfort', 'price' => 950],
            ['file' => 'baby_6.jpg', 'name' => 'Yellow Baby Dress', 'description' => 'Cheerful yellow babies dress', 'price' => 899],
            ['file' => 'baby_7.jpg', 'name' => 'Rose Baby Dress', 'description' => 'Green babies dress with traditional patterns', 'price' => 1100],
            ['file' => 'baby_8.jpg', 'name' => 'Green Baby Set', 'description' => 'Pretty pink set for little ones', 'price' => 1200],
            ['file' => 'baby_9.jpg', 'name' => 'White Baby Dress', 'description' => 'Soft blue babies outfit for comfort', 'price' => 950],
            ['file' => 'baby_10.jpg', 'name' => 'Red Baby Dress', 'description' => 'Cheerful yellow babies dress', 'price' => 899],
           
        
        ];

        foreach ($babiesProducts as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => 'products/babies_dresses/' . $p['file'],
                'category_id' => $babiesId,
            ]);
        }

        $kidsProducts = [
            ['file' => 'kid_1.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
            ['file' => 'kid_2.jpg', 'name' => 'Kids Casual Dress', 'description' => 'Comfortable casual dress for kids', 'price' => 1200],
            ['file' => 'kid_3.jpg', 'name' => 'Kids Fancy Outfit', 'description' => 'Fancy outfit for kids celebrations', 'price' => 2000],
            ['file' => 'kid_4.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
            ['file' => 'kid_5.jpg', 'name' => 'Kids Casual Dress', 'description' => 'Comfortable casual dress for kids', 'price' => 1200],
            ['file' => 'kid_6.jpg', 'name' => 'Kids Fancy Outfit', 'description' => 'Fancy outfit for kids celebrations', 'price' => 2000],
            ['file' => 'kid_7.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
          
       
        ];

        foreach ($kidsProducts as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => 'products/kids/' . $p['file'],
                'category_id' => $kidsId,
            ]);
        }

        $blouseProducts = [
            ['file' => 'aari_black.jpg', 'name' => 'Aari Blouse - Black', 'description' => 'Embroidery blouse with black base', 'price' => 5000],
            ['file' => 'aari_gold.jpg', 'name' => 'Aari Bridal Blouse - Gold', 'description' => 'Bridal blouse with gold embroidery', 'price' => 12000],
            ['file' => 'aari_meroon.jpg', 'name' => 'Aari Blouse - Maroon', 'description' => 'Elegant maroon aari work blouse', 'price' => 8500],
            ['file' => 'aari_redgreen.jpg', 'name' => 'Aari Blouse - Red/Green', 'description' => 'Red and green patterned blouse', 'price' => 7800],
        ];

        foreach ($blouseProducts as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => 'products/aari_blouse/' . $p['file'],
                'category_id' => $aariblouseId,
            ]);
        }

        $motherProducts = [
            ['file' => 'mum_child_1.jpg', 'name' => 'Mother & Daughter - Traditional', 'description' => 'Matching traditional outfit set', 'price' => 15000],
            ['file' => 'mum_child_2.jpg', 'name' => 'Mother & Daughter - Elegant', 'description' => 'Elegant matching dress set', 'price' => 18000],
            ['file' => 'mum_child_3.jpg', 'name' => 'Mother & Daughter - Festive', 'description' => 'Festive matching outfit for special occasions', 'price' => 16000],
            ['file' => 'mum_child_4.jpg', 'name' => 'Mother & Daughter - Traditional', 'description' => 'Matching traditional outfit set', 'price' => 15000],
            ['file' => 'mum_child_5.jpg', 'name' => 'Mother & Daughter - Elegant', 'description' => 'Elegant matching dress set', 'price' => 18000],
            ['file' => 'mum_child_6.jpg', 'name' => 'Mother & Daughter - Festive', 'description' => 'Festive matching outfit for special occasions', 'price' => 16000],
        
        ];

        foreach ($motherProducts as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => 'products/mum_daughter/' . $p['file'],
                'category_id' => $motherdaughterId,
            ]);
        }

        $menProducts = [
            ['file' => 'men_1.jpg', 'name' => 'Men Kurta - Blue', 'description' => 'Comfortable blue kurta for men', 'price' => 5500],
            ['file' => 'men_2.jpg', 'name' => 'Men Kurta - White', 'description' => 'Classic white kurta set', 'price' => 6200],
            ['file' => 'men_3.jpg', 'name' => 'Men Sherwani', 'description' => 'Festive sherwani for ceremonies', 'price' => 15000],
            ['file' => 'men_4.jpg', 'name' => 'Men Casual Set', 'description' => 'Casual men outfit for daily wear', 'price' => 4800],
            ['file' => 'men_5.jpg', 'name' => 'Men Formal Kurta', 'description' => 'Formal kurta for events', 'price' => 9000],
        ];

        foreach ($menProducts as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => 'products/men/' . $p['file'],
                'category_id' => $menId,
            ]);
        }

        // Extra fake products
        Product::factory(50)->create();
    }

}


