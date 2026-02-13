<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
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
            // Product::factory()->count(20)->create()->each(function($p){
        // ensure category exists
        // $p->category_id = Category::inRandomOrder()->first()->id ?? null;
        // randomly mark some products trendy
        // $p->is_trendy = rand(0,1) ? true : false;
        // ensure image path if your factory didn't
    //     $p->image = $p->image ?? 'products/sample.jpg';
    //     $p->save();
    // });

        // Ensure categories exist and get their IDs
        $babiesId = Category::firstOrCreate(
            ['slug' => 'babies_dresses'],
            ['name' => 'Babies',
            'folder_name' => 'babies_dresses',]
        )->id;

        $kidsId = Category::firstOrCreate(
            ['slug' => 'kids'],
            ['name' => 'Kids', 
            'folder_name' => 'kids',]
        )->id;

        $aariblouseId = Category::firstOrCreate(
            ['slug' => 'aari_blouse'],
            ['name' => 'Aari Blouse',
            'folder_name' => 'aari_blouse',]
        )->id;

        $motherdaughterId = Category::firstOrCreate(
            ['slug' => 'mother_daughter'],
            ['name' => 'Mother & Daughter',
            'folder_name' => 'mum_daughter',]
        )->id;

        $menId = Category::firstOrCreate(
            ['slug' => 'men'],
            ['name' => 'Men',
            'folder_name' => 'men',]
        )->id;


        $womenid = Category::firstOrCreate(
            ['slug' => 'women'],
            ['name' => 'Women',
            'folder_name' => 'women',]
        )->id;
      
        $trendyCategoryId = Category::firstOrCreate(
            ['slug' => 'trendystylish'],
            ['name' => 'Trendy & Stylish',
            'folder_name' => 'trendystylish',]
        )->id;

        $trendyBagsId = Category::firstOrCreate(
            ['slug' => 'trendy_bags'],
            ['name' => 'Trendybags',
            'folder_name' => 'trendy_bags',]
        )->id;

        $trendyShoesId = Category::firstOrCreate(
            ['slug' => 'trendy_shoes'],
            ['name' => 'Trendyshoes',
            'folder_name' => 'trendy_shoes',]
        )->id;

        $trendyHatsId = Category::firstOrCreate(
            ['slug' => 'trendy_hats'],
            ['name' => 'Trendyhats', 
            'folder_name' => 'trendy_hats']
        )->id;


        $trendyScarfsId = Category::firstOrCreate(
            ['slug' => 'trendy_scarfs'],
            ['name' => 'Trendyscarfs',
            'folder_name' => 'trendy_scarfs',]
        )->id;

        $trendyDressesId = Category::firstOrCreate(
            ['slug' => 'trendy_dresses'],
            ['name' => 'Trendydresses',
            'folder_name' => 'trendy_dresses',]
        )->id;


        //  Seed all products:Babies
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

        $this->seedProducts($babiesProducts, $babiesId, 'products/babies_dresses/', false);


        
        //  Seed all products:kidsProducts
        $kidsProducts = [
            ['file' => 'kid_1.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
            ['file' => 'kid_2.jpg', 'name' => 'Kids Casual Dress', 'description' => 'Comfortable casual dress for kids', 'price' => 1200],
            ['file' => 'kid_3.jpg', 'name' => 'Kids Fancy Outfit', 'description' => 'Fancy outfit for kids celebrations', 'price' => 2000],
            ['file' => 'kid_4.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
            ['file' => 'kid_5.jpg', 'name' => 'Kids Casual Dress', 'description' => 'Comfortable casual dress for kids', 'price' => 1200],
            ['file' => 'kid_6.jpg', 'name' => 'Kids Fancy Outfit', 'description' => 'Fancy outfit for kids celebrations', 'price' => 2000],
            ['file' => 'kid_7.jpg', 'name' => 'Kids Traditional Outfit', 'description' => 'Traditional kids outfit for special occasions', 'price' => 1500],
          
       
        ];
          $this->seedProducts($kidsProducts, $kidsId, 'products/kids/', false);

       
        
        //  Seed all products:blouseProducts
        $blouseProducts = [
            ['file' => 'aari_black.jpg', 'name' => 'Aari Blouse - Black', 'description' => 'Embroidery blouse with black base', 'price' => 5000],
            ['file' => 'aari_gold.jpg', 'name' => 'Aari Bridal Blouse - Gold', 'description' => 'Bridal blouse with gold embroidery', 'price' => 12000],
            ['file' => 'aari_meroon.jpg', 'name' => 'Aari Blouse - Maroon', 'description' => 'Elegant maroon aari work blouse', 'price' => 8500],
            ['file' => 'aari_redgreen.jpg', 'name' => 'Aari Blouse - Red/Green', 'description' => 'Red and green patterned blouse', 'price' => 7800],
        ];
            $this->seedProducts($blouseProducts, $aariblouseId, 'products/aari_blouse/', false);
      

        //  Seed all products:motherProducts
        $motherProducts = [
            ['file' => 'mum_child_1.jpg', 'name' => 'Mother & Daughter - Traditional', 'description' => 'Matching traditional outfit set', 'price' => 15000],
            ['file' => 'mum_child_2.jpg', 'name' => 'Mother & Daughter - Elegant', 'description' => 'Elegant matching dress set', 'price' => 18000],
            ['file' => 'mum_child_3.jpg', 'name' => 'Mother & Daughter - Festive', 'description' => 'Festive matching outfit for special occasions', 'price' => 16000],
            ['file' => 'mum_child_4.jpg', 'name' => 'Mother & Daughter - Traditional', 'description' => 'Matching traditional outfit set', 'price' => 15000],
            ['file' => 'mum_child_5.jpg', 'name' => 'Mother & Daughter - Elegant', 'description' => 'Elegant matching dress set', 'price' => 18000],
            ['file' => 'mum_child_6.jpg', 'name' => 'Mother & Daughter - Festive', 'description' => 'Festive matching outfit for special occasions', 'price' => 16000],
        
        ];
         $this->seedProducts($motherProducts, $motherdaughterId, 'products/mum_daughter/', false);

        
        
        //  Seed all products:menProducts
        $menProducts = [
            ['file' => 'men_1.jpg', 'name' => 'Men Kurta - Blue', 'description' => 'Comfortable blue kurta for men', 'price' => 5500],
            ['file' => 'men_2.jpg', 'name' => 'Men Kurta - White', 'description' => 'Classic white kurta set', 'price' => 6200],
            ['file' => 'men_3.jpg', 'name' => 'Men Sherwani', 'description' => 'Festive sherwani for ceremonies', 'price' => 15000],
            ['file' => 'men_4.jpg', 'name' => 'Men Casual Set', 'description' => 'Casual men outfit for daily wear', 'price' => 4800],
            ['file' => 'men_5.jpg', 'name' => 'Men Formal Kurta', 'description' => 'Formal kurta for events', 'price' => 9000],
        ];
                $this->seedProducts($menProducts, $menId, 'products/men/', false);


        $womenProducts = [
            ['file' => 'women_1.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
            ['file' => 'women_2.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 1200],
            ['file' => 'women_3.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 5400],
            ['file' => 'women_4.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
            ['file' => 'women_5.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6300],
            ['file' => 'women_6.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 8500],
            ['file' => 'women_7.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6900],
            ['file' => 'women_8.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 8500],
            ['file' => 'women_9.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
            ['file' => 'women_10.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 9500],
            ['file' => 'women_11.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 4500],
            ['file' => 'women_12.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
            ['file' => 'women_13.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
            ['file' => 'women_14.jpg', 'name' => 'Women Kurta', 'description' => 'Stylish kurta for women', 'price' => 6500],
        ];
                $this->seedProducts($womenProducts, $womenid, 'products/women/', false);

      
        // --- SECTION: TRENDY & STYLISH (Home Page) ---
        // These are the 5 items you wanted on your home page with the Overlay
       
       
    
        // Home page trendy section/ Add trendy products in trendy & stylish section
      
        $trendyCategory = [
    [
        'file' => 'bagysl.jpg',
        'name' => 'Ladies Bag',
        'description' => 'Stylish bags',
        'price' => 2500,
        'discount' => 49,
    ],
    [
        'file' => 'hat1.jpg',
        'name' => 'Ladies Hats',
        'description' => 'Trendy hats',
        'price' =>1500,
        'discount' => 20,
    ],
    [
        'file' => 'shoe4.jpg',
        'name' => 'Ladies Shoes',
        'description' => 'Modern shoes',
        'price' => 3500,
        'discount' => 65,
    ],
    [
        'file' => 'scarf11.jpg',
        'name' => 'Trend Scarf',
        'description' => 'Stylish scarves',
        'price' =>1800,
        'discount' => 30,
    ],
    [
        'file' => 'dress1.jpg',
        'name' => 'New Dresses',
        'description' => 'Latest dresses',
        'price' => 4000,
        'discount' => 50,
    ],
];
    $this->seedProducts($trendyCategory, $trendyCategoryId, 'products/trendystylish/', true );

     
    //  Seed all products:trendybags
        $trendyItemsBags = [
        ['file' => 'leisara.jpg', 'name' => 'Leisara', 'description' => 'stylish white bag', 'price' => 5000, 'discount' => 15],
        ['file' => 'pradaMilano.jpg', 'name' => 'Prada Milano', 'description' => 'Silver bag', 'price' => 8000, 'discount' => 20],
        ['file' => 'pradaMilanowhite.jpg', 'name' => 'prada Milano White', 'description' => 'prada Milano white bag', 'price' => 15000, 'discount' => 10],
        ['file' => 'sara.jpg', 'name' => 'Sara', 'description' => 'Blue & White attractive bag', 'price' => 8000, 'discount' => 25],
        ['file' => 'warner.jpg', 'name' => 'Warner', 'description' => 'Blue Warner bag', 'price' => 3500, 'discount' => 30],
        ['file' => 'ysl.jpg', 'name' => 'Yves saint Laurent', 'description' => 'Black yves saint laurent bag', 'price' => 35000, 'discount' => 5],
    ];

        $this->seedProducts($trendyItemsBags, $trendyBagsId, 'products/trendy_bags/', true);

          
    //  Seed all products:trendy shoes

                 $trendyItemsShoes = [
            ['file' => 'blackCutShoe.jpg', 'name' => 'Black Cut Shoe', 'description' => 'stylish Black Cut Shoe', 'price' => 15000, 'discount' => 12],
            ['file' => 'blackshoe.jpg', 'name' => 'Black Shoe', 'description' => 'Black Shoe', 'price' => 5500, 'discount' => 18],
            ['file' => 'blueShoe.jpg', 'name' => 'Blue Shoe', 'description' => 'Attractive Blue Shoe ', 'price' => 5000, 'discount' => 22],
            ['file' => 'goldShoe.jpg', 'name' => 'Gold Shoe', 'description' => 'Gold Shoe attractive ', 'price' => 8090, 'discount' => 15],
            ['file' => 'goldStyleshoe.jpg', 'name' => 'Gold Style shoe', 'description' => 'Gold Style Shoe', 'price' => 6500, 'discount' => 20],
            ['file' => 'whiteShoe.jpg', 'name' => 'white Shoe', 'description' => 'whiteShoe Shoe', 'price' => 5000, 'discount' => 25],
        ];

            $this->seedProducts($trendyItemsShoes, $trendyShoesId, 'products/trendy_shoes/', true);

          //  Seed all products:trendy hats
              $trendyItemsHats = [
            
            ['file' => 'hat2.jpg', 'name' => 'Jute hat', 'description' => 'Jute hat', 'price' => 5500, 'discount' => 15],
            ['file' => 'hat3.jpg', 'name' => 'Black N hat', 'description' => 'Black N hat  ', 'price' => 5000, 'discount' => 20],
            ['file' => 'hat4.jpg', 'name' => 'Black VA RVCA hat', 'description' => 'Gold Shoe attractive ', 'price' => 8090, 'discount' => 18],
            ['file' => 'hat5.jpg', 'name' => 'Black VA hat', 'description' => 'Black VA hat', 'price' => 6500, 'discount'=> 20],
            ['file' => 'hat6.jpg', 'name' => 'Jute', 'description' => 'whiteShoe Shoe', 'price' => 5000, 'discount' => 14],
            ['file' => 'hat7.jpg', 'name' => 'Black & white  stylish hat', 'description' => 'Jute yellow hat', 'price' => 5000, 'discount' => 16],
            ['file' => 'hat9.jpg', 'name' => 'white GIGI PP', 'description' => 'white GIGI PP hat ', 'price' => 5000,'discount' => 11],
            ['file' => 'hat10.jpg', 'name' => 'white GIGI ', 'description' => 'white GIGI attractive ', 'price' => 8090, 'discount' => 19],
            ['file' => 'hat11.jpg', 'name' => 'Jute large', 'description' => 'Jute large hat', 'price' => 6500, 'discount' => 21],
            ['file' => 'hat12.jpg', 'name' => 'white hat', 'description' => 'white hat', 'price' => 5000, 'discount' => 13],
            ['file' => 'hat13.jpg', 'name' => 'Sunshine', 'description' => 'Sunshine hat ', 'price' => 8090, 'discount' => 17],
            ['file' => 'hat14.jpg', 'name' => 'White Pumkin hat', 'description' => 'White Pumkin hat', 'price' => 6500, 'discount' => 23],
            ['file' => 'hat17.jpg', 'name' => 'Blue & white hat', 'description' => 'Blue & white style hat', 'price' => 5000, 'discount' => 24],
        ];

            $this->seedProducts($trendyItemsHats, $trendyHatsId, 'products/trendy_hats/', true);


         
        //  Seed all products:trendy Scrafs   

        $trendyItemsScarfs = [
            ['file' => 'scarf1.jpg', 'name' => 'Green Modern', 'description' => 'Green Modern Scraf', 'price' => 5000, 'discount' => 10],
            ['file' => 'scarf2.jpg', 'name' => 'Cotton scraf', 'description' => 'Cotton scraf', 'price' => 5500, 'discount' => 15],
            ['file' => 'scarf3.jpg', 'name' => 'Dark colors Silk', 'description' => 'Dark colors Silk', 'price' => 5000, 'discount' => 12],
            ['file' => 'scarf4.jpg', 'name' => 'Blue colors Silk', 'description' => 'blue colors Silk', 'price' => 8090, 'discount' => 18],
            ['file' => 'scarf5.jpg', 'name' => 'Designer', 'description' => 'Designer', 'price' => 6500, 'discount' => 20],
            ['file' => 'scarf6.jpg', 'name' => 'White style ', 'description' => 'White style scraf', 'price' => 5000, 'discount' => 14],
            ['file' => 'scarf7.jpg', 'name' => 'Blue & orange scraf ', 'description' => 'Blue & orange scraf', 'price' => 5000, 'discount' => 16],
            ['file' => 'scarf8.jpg', 'name' => 'Stylish scrafs', 'description' => 'Stylish scrafs', 'price' => 5000, 'discount' => 16],
            ['file' => 'scarf9.jpg', 'name' => 'Blue & Brown scarfs ', 'description' => 'Blue & Brown scarfs', 'price' => 8090, 'discount' => 11],
            ['file' => 'scarf10.jpg', 'name' => 'Green & blue scrafs', 'description' => 'Green & blue scrafs', 'price' => 6500, 'discount' => 19],
            ['file' => 'scarf11.jpg', 'name' => 'Yellow Scraf', 'description' => 'Yellow Scraf', 'price' => 5000, 'discount' => 13],
            ['file' => 'scarf12.jpg', 'name' => 'Silk colors scraf', 'description' => 'Silk colors scraf', 'price' => 8090, 'discount' => 17],
            ['file' => 'scarf13.jpg', 'name' => 'Green & Yellow ', 'description' => 'Green & Yellow', 'price' => 6500, 'discount' => 22],
           
        ];

            $this->seedProducts($trendyItemsScarfs, $trendyScarfsId, 'products/trendy_scarfs/', true);

        //  Seed all products:trendy dresses
        $trendyItemsDress = [
            ['file' => 'dress1.jpg', 'name' => 'White Gaown', 'description' => 'Green Modern ', 'price' => 5000, 'discount' => 10],
            ['file' => 'dress2.jpg', 'name' => 'Brown', 'description' => 'Brown sweater', 'price' => 5500, 'discount' => 15],
            ['file' => 'dress3.jpg', 'name' => 'White & salmon Top', 'description' => 'White & salmon Top', 'price' => 5000, 'discount' => 12],
            ['file' => 'dress4.jpg', 'name' => 'Yellow Frock', 'description' => 'Yellow elegant Frock', 'price' => 8090, 'discount' => 18],
            ['file' => 'dress5.jpg', 'name' => 'Flower shirt', 'description' => 'Springtimes shirt', 'price' => 6500, 'discount' => 20],
            ['file' => 'dress7.jpg', 'name' => 'Yellow Gaown ', 'description' => 'Yellow Gaown', 'price' => 5000, 'discount' => 14],
            ['file' => 'dress6.jpg', 'name' => 'Brown Designer Gaown ', 'description' => 'Brown Designer Gaown ', 'price' => 5000, 'discount' => 16],
            ['file' => 'dress8.jpg', 'name' => 'Black combine', 'description' => 'Black combines', 'price' => 5000, 'discount' => 11],
            ['file' => 'dress9.jpg', 'name' => 'White ceremonie ', 'description' => 'White ceremonie', 'price' => 8090, 'discount' => 19],
        ];

            $this->seedProducts($trendyItemsDress, $trendyDressesId, 'products/trendy_dresses/', true);

        
        // Product::factory()->count(5)->state(['is_trendy' => true])->create();
        //  Product::factory()->create();
    }

       /**
     * Helper method to seed products
     */
    private function seedProducts(array $products, int $categoryId, string $imagePath, bool $isTrendy = false): void
    {
        foreach ($products as $p) {
            Product::create([
                'name' => $p['name'],
                'description' => $p['description'],
                'price' => $p['price'],
                'image' => $imagePath . $p['file'],
                'category_id' => $categoryId,
                'discount_percent' => $p['discount'] ?? 0,
                'is_trendy' => $isTrendy,
            ]);
        }
    }

}


