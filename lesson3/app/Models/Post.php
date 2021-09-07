<?php

namespace App\Models;

class Post 
{
    // property
    private static $blogs = [
        [
            "title" => "Blog Session 1",
            "slug" => "blog_session_1",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit illo eius nobis! Dolorum delectus temporibus distinctio quasi maxime excepturi eius laboriosam, et tempore minima? Veritatis alias, repellat, voluptatum maxime nemo sequi provident porro, tempore minus ullam accusantium laboriosam saepe cum animi quos suscipit. Fuga atque reprehenderit, laborum tempore non fugit dolorem. Corporis expedita deleniti harum similique minima neque perspiciatis consectetur impedit inventore voluptate sapiente natus quae veniam ipsa, vero doloribus culpa nihil sed dolores unde molestiae esse voluptatem qui? Quae eius, minima amet adipisci perspiciatis suscipit delectus modi sunt dolorum assumenda corporis libero ut harum! Non modi deserunt laudantium debitis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blogs);
    }
}
