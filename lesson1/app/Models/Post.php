<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "judul"=>"Title_first",
            "slug"=>"title_1",
            "author"=>"Yusuf",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi debitis qui iusto in, pariatur aperiam, sed dignissimos suscipit aut quia ut harum quaerat doloribus quidem? Minima reiciendis facilis similique. Obcaecati nemo officia laudantium earum"
        ],
        [
            "judul"=>"Title_second",
            "slug"=>"title_2",
            "author"=>"Dewi",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi debitis qui iusto in, pariatur aperiam, sed dignissimos suscipit aut quia ut harum quaerat doloribus quidem? Minima reiciendis facilis similique. Obcaecati nemo officia laudantium earum "
        ]
    ];

    public static function All()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}


