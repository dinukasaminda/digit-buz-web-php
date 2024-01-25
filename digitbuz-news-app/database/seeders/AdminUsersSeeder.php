<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'dinuka bandara',
                'email' => 'digitbuz@admin.com',
                'email_verified_at' => now(),
                'password' =>  bcrypt('dIn1234xYz'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
