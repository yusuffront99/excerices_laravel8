<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;

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
        Phone::create([
            "user_id"=>"1",
            "post_id"=>"1",
            "merk"=>"huawei",
            "price"=>"4500"
        ]);
        
        Phone::create([
            "user_id"=>"2",
            "post_id"=>"2",
            "merk"=>"Apple",
            "price"=>"5500"
        ]);

        User::create([
            "name"=>"ahmad",
            "email"=>"ahmad@gmail.com",
            "password"=>password_hash('12345', PASSWORD_DEFAULT)
        ]);

        User::create([
            "name"=>"zaenal",
            "email"=>"ahmadzaenal@gmail.com",
            "password"=>password_hash('abcde', PASSWORD_DEFAULT)
        ]);

        Post::create([
            "name"=>"Postingan Pertama",
            "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam temporibus tenetur possimus, vel saepe magni? Aut, nemo id nihil, nam architecto provident aperiam omnis esse suscipit, ratione voluptatem explicabo eum voluptatum. Temporibus aut iusto dolorem, culpa repellat ea asperiores harum nisi animi. Odio eos quam vero quod consequuntur, obcaecati officia minus repellendus deserunt ipsum itaque non corrupti quo molestiae consectetur natus id eveniet? Praesentium vitae nesciunt saepe in maiores laudantium animi molestias delectus quisquam aliquam, neque corrupti dolores ab unde ipsa dignissimos eum possimus aliquid voluptate excepturi exercitationem sed voluptatum quasi officia. At cupiditate laborum deserunt nihil? Labore, deleniti illo?"
        ]);

        Post::create([
            "name"=>"Postingan Kedua",
            "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam temporibus tenetur possimus, vel saepe magni? Aut, nemo id nihil, nam architecto provident aperiam omnis esse suscipit, ratione voluptatem explicabo eum voluptatum. Temporibus aut iusto dolorem, culpa repellat ea asperiores harum nisi animi. Odio eos quam vero quod consequuntur, obcaecati officia minus repellendus deserunt ipsum itaque non corrupti quo molestiae consectetur natus id eveniet? Praesentium vitae nesciunt saepe in maiores laudantium animi molestias delectus quisquam aliquam, neque corrupti dolores ab unde ipsa dignissimos eum possimus aliquid voluptate excepturi exercitationem sed voluptatum quasi officia. At cupiditate laborum deserunt nihil? Labore, deleniti illo?"
        ]);

    }
}
