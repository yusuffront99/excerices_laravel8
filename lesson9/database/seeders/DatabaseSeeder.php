<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\User;

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
            "merk"=>"huawei",
            "price"=>"4500"
        ]);
        
        Phone::create([
            "user_id"=>"2",
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

    }
}
