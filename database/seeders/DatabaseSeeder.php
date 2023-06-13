<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Meizhika putra',
            'username' => 'meihizika',
            'email' => 'meizhika@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web design',
            'slug' => 'web design',
        ]);

        Post::factory(20)->create();
    }
}
