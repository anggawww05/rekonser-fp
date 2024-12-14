<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create([
            'role_name' => 'Admin',
        ]);

        Category::create([
            'category_name' => 'Alat Musik',
        ]);

        Category::create([
            'category_name' => 'Multimedia',
        ]);

        Category::create([
            'category_name' => 'Audio',
        ]);

        Category::create([
            'category_name' => 'Alat Panggung',
        ]);

        Role::create([
            'role_name' => 'User',
        ]);


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
