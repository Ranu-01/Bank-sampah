<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin2',
            'email' => 'admind2@gmail.com',
            'password' => 'admin2123',
            'role' => 'admin',
            'status' => '1',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => 'admin1123',
            'role' => 'admin',
            'status' => '1',
        ]);
        
    }

}
