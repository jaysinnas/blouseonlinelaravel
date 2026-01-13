<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a single test user for admin access/testing
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call all application-specific seeders
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class, // Populates the products table
            CommentSeeder::class, // Populates the comments table (FIXED: Added this line)
        ]);
    }
}