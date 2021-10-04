<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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
            'name' => 'yusuffront',
            'username' => 'yusuffront',
            'email' => 'y_front@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(4)->create();

        Post::factory(20)->create();

        Category::create([
            "name"=>"Education",
            "slug"=>"education"
        ]);

        Category::create([
            "name"=>"Saint",
            "slug"=>"saint"
        ]);

        Category::create([
            "name"=>"Health",
            "slug"=>"health"
        ]);
        
    }
}
