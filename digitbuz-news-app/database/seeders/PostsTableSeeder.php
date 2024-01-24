<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data from the table
        //DB::table('posts')->truncate();

        // Seed the "posts" table with sample data
        DB::table('posts')->insert([
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more posts as needed
        ]);
    }
}
