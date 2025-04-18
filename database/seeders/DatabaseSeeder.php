<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories=Category::factory(5)->create();

        User::factory(10)->create()->each(function ($user) use ($categories) {
            Post::factory(rand(1,3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id
            ]);
        });
    }
}
