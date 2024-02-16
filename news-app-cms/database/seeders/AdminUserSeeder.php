<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create default admin user
         User::create([
            'name' => 'Admin',
            'email' => 'admin@digitbuz.com',
            'password_hash' => Hash::make('1234din'),
        ]);
    }
}
