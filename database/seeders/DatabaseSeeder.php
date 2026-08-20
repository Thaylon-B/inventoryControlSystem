<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
    

        User::factory()->create([
            'name' => 'Admin Mercearia',
            'email' => 'admin@admin.com',
            'role' => 'admin',
        ]);

        Category::factory(5)->create()->each(function($category){
            Product::factory(10)->create([
                'category_id'=>$category->id,
            ]);
        });
    }
}
