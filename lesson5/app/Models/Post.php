<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "blog first",
            "slug" => "post_1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, esse dolorum eius soluta atque ipsa perspiciatis asperiores pariatur rem corrupti?"
        ],
        [
            "title" => "blog second",
            "slug" => "post_2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, esse dolorum eius soluta atque ipsa perspiciatis asperiores pariatur rem corrupti?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
