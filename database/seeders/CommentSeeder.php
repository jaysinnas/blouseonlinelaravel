<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create a few specific, visible comments to start
        Comment::create([
            'name' => 'Aarav',
            'email' => 'aarav@example.com',
            'comment' => 'I love the traditional designs! The Aari Work Blouse is stunning. Keep up the beautiful craftsmanship!',
            'product_id' => 1, // Change this to a real product ID you have
            ]);

        Comment::create([
            'name' => 'Priya',
            'email' => 'priya@example.com',
            'comment' => 'The mother-daughter collection is so unique and adorable. Planning to place an order soon!',
        ]);

        // 2. Create a batch of 20 dummy comments using the factory
        Comment::factory(20)->create();

    }
}