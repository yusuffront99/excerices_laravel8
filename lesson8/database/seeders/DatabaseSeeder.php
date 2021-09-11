<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'yusuffront',
            "email" => "yusuffront@gmail.com",
            "password"=> bcrypt('12345')
        ]);

        Category::create([
            "name" => "Education",
            "slug" => "education"
        ]);

        Category::create([
            "name" => "Travelling",
            "slug" => "travelling"
        ]);

        Blog::create([
            'category_id' => 1,
            'user_id'=> 1,
            'title' => 'Blog Pertama',
            'slug' => 'blog_pertama',
            'summary'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, doloribus.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab quaerat pariatur sed recusandae molestiae fuga, dolorem vero provident id, nisi exercitationem repellat voluptates laboriosam hic perspiciatis, commodi esse cum facere veritatis dolore excepturi ipsam. Cumque laudantium, iste animi veritatis adipisci expedita enim explicabo illum consequuntur maiores voluptatibus dolorum nulla, dolorem eaque deserunt, cupiditate ad numquam! Commodi accusamus, ratione asperiores rem nulla reprehenderit praesentium! Cumque aliquid illo magni provident qui velit molestias, necessitatibus libero commodi consequatur in natus aspernatur eveniet, praesentium unde sed modi. Aliquid atque, sapiente, minima itaque inventore quod quos amet magnam laboriosam assumenda, corrupti vel. Adipisci, ex culpa.'

        ]);

        Blog::create([
            'category_id' => 2,
            'user_id'=> 2,
            'title' => 'Blog Kedua',
            'slug' => 'blog_kedua',
            'summary'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, doloribus.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab quaerat pariatur sed recusandae molestiae fuga, dolorem vero provident id, nisi exercitationem repellat voluptates laboriosam hic perspiciatis, commodi esse cum facere veritatis dolore excepturi ipsam. Cumque laudantium, iste animi veritatis adipisci expedita enim explicabo illum consequuntur maiores voluptatibus dolorum nulla, dolorem eaque deserunt, cupiditate ad numquam! Commodi accusamus, ratione asperiores rem nulla reprehenderit praesentium! Cumque aliquid illo magni provident qui velit molestias, necessitatibus libero commodi consequatur in natus aspernatur eveniet, praesentium unde sed modi. Aliquid atque, sapiente, minima itaque inventore quod quos amet magnam laboriosam assumenda, corrupti vel. Adipisci, ex culpa.'

        ]);

        Blog::create([
            'category_id' => 2,
            'user_id'=> 1,
            'title' => 'Blog Ketiga',
            'slug' => 'blog_ketiga',
            'summary'=> 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, doloribus.',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab quaerat pariatur sed recusandae molestiae fuga, dolorem vero provident id, nisi exercitationem repellat voluptates laboriosam hic perspiciatis, commodi esse cum facere veritatis dolore excepturi ipsam. Cumque laudantium, iste animi veritatis adipisci expedita enim explicabo illum consequuntur maiores voluptatibus dolorum nulla, dolorem eaque deserunt, cupiditate ad numquam! Commodi accusamus, ratione asperiores rem nulla reprehenderit praesentium! Cumque aliquid illo magni provident qui velit molestias, necessitatibus libero commodi consequatur in natus aspernatur eveniet, praesentium unde sed modi. Aliquid atque, sapiente, minima itaque inventore quod quos amet magnam laboriosam assumenda, corrupti vel. Adipisci, ex culpa.'

        ]);


    }
}

