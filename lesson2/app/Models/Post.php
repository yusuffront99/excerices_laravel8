<?php

namespace App\Models;

class Post 
{
    static $blog_posts = [
        [
            "title"=>"pertama",
            "slug"=>"blog_1",
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti magni optio nobis tenetur eos saepe sit laudantium sunt velit eligendi eum, cupiditate rem unde qui, ipsa, vitae similique suscipit et itaque! Necessitatibus veniam soluta corrupti odit, laborum consequatur pariatur nulla nobis laudantium, odio at delectus doloribus vel ad dolor in. Qui aliquam ut porro debitis minus dolores reiciendis voluptates eligendi. Incidunt beatae tempora, doloremque ullam aspernatur molestias eos quia dolore temporibus dolor modi earum? Veniam praesentium dicta sit unde minima nobis aliquam ad omnis laudantium quam voluptatum vitae magni, ab quo accusamus quae dolorum reiciendis perspiciatis eveniet, ullam libero? Nihil!"
        ],
        [
            "title"=>"kedua",
            "slug"=>"blog_2",
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti magni optio nobis tenetur eos saepe sit laudantium sunt velit eligendi eum, cupiditate rem unde qui, ipsa, vitae similique suscipit et itaque! Necessitatibus veniam soluta corrupti odit, laborum consequatur pariatur nulla nobis laudantium, odio at delectus doloribus vel ad dolor in. Qui aliquam ut porro debitis minus dolores reiciendis voluptates eligendi. Incidunt beatae tempora, doloremque ullam aspernatur molestias eos quia dolore temporibus dolor modi earum? Veniam praesentium dicta sit unde minima nobis aliquam ad omnis laudantium quam voluptatum vitae magni, ab quo accusamus quae dolorum reiciendis perspiciatis eveniet, ullam libero? Nihil!"
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
