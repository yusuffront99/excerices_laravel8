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
        User::factory(3)->create();

        Post::factory(10)->create();

        // Post::create([
        //     "title"=>"blog pertama",
        //     "category_id"=>"1",
        //     "slug"=>"blog_pertama",
        //     "summary"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cupiditate.",
        //     "content"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, autem ab, quas optio odit ut molestiae facilis itaque vitae ipsam dolores harum! Aperiam perspiciatis labore, totam dolore nostrum quibusdam, consectetur fugit vitae hic impedit iusto culpa iure, pariatur molestiae voluptatum. Quae culpa, veniam, recusandae consequuntur amet consectetur nobis soluta quo doloribus vel, a omnis qui facilis magni odio iure eius illum. Odio ullam id laborum ex ratione incidunt doloribus veniam illum voluptatibus atque, voluptates, ipsa ea quibusdam, ut illo. Incidunt eum labore ipsa ipsam harum nisi cupiditate repudiandae consequatur suscipit id molestias sequi repellat, nam maiores beatae, doloremque error iste."
        // ]);
        
        // Post::create([
        //     "title"=>"blog kedua",
        //     "category_id"=>"2",
        //     "slug"=>"blog_kedua",
        //     "summary"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cupiditate.",
        //     "content"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, autem ab, quas optio odit ut molestiae facilis itaque vitae ipsam dolores harum! Aperiam perspiciatis labore, totam dolore nostrum quibusdam, consectetur fugit vitae hic impedit iusto culpa iure, pariatur molestiae voluptatum. Quae culpa, veniam, recusandae consequuntur amet consectetur nobis soluta quo doloribus vel, a omnis qui facilis magni odio iure eius illum. Odio ullam id laborum ex ratione incidunt doloribus veniam illum voluptatibus atque, voluptates, ipsa ea quibusdam, ut illo. Incidunt eum labore ipsa ipsam harum nisi cupiditate repudiandae consequatur suscipit id molestias sequi repellat, nam maiores beatae, doloremque error iste."
        // ]);

        Category::create([
            "name"=>"Education",
            "slug"=>"education"
        ]);

        Category::create([
            "name"=>"Sains",
            "slug"=>"sains"
        ]);
        Category::create([
            "name"=>"Technology",
            "slug"=>"technology"
        ]);
        Category::create([
            "name"=>"Art",
            "slug"=>"art"
        ]);

        
        
        


    }
}
