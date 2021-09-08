<?php

namespace App\Models;

class Post 
{
    // property
    private static $blogs = [
        [
            "title" => "Blog Session 1",
            "slug" => "blog_session_1",
            "sub_title" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit illo eius nobis! Dolorum delectus temporibus distinctio quasi maxime excepturi eius laboriosam, et tempore minima? Veritatis alias, repellat, voluptatum maxime",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea animi maxime corporis nulla est earum ut eum adipisci illo, laboriosam quaerat culpa doloribus iusto neque omnis, at amet cumque similique. Sequi esse sint beatae exercitationem modi necessitatibus quasi unde dolor doloribus, perferendis consequatur at maxime magnam illum facilis quos ullam minus inventore facere perspiciatis corrupti voluptatem. Laborum molestias reiciendis, impedit culpa ab sed nisi maiores quisquam laudantium alias illum saepe accusamus eum odio, nobis, incidunt enim quae porro. Optio minus quis, fuga magni quia ea enim nam illo quisquam in suscipit nulla numquam necessitatibus quasi accusamus quae soluta perferendis facere rem deleniti expedita doloribus tempore! Doloribus vero tempora incidunt ipsum voluptatibus temporibus quo nisi reiciendis? Excepturi porro nihil inventore sit praesentium, mollitia aperiam deleniti tempore, in quae maxime eligendi. Quos dolores aperiam sed tenetur qui modi, aut suscipit! Harum maiores laudantium magni itaque, natus soluta ex rerum explicabo quidem at possimus eum eligendi. In laudantium velit reprehenderit a, cumque excepturi consequuntur. Enim asperiores laborum, velit incidunt tenetur rem sunt adipisci fugiat doloremque vel, provident laudantium possimus architecto minima dolorum. Corrupti!"
        ],
        [
            "title" => "Blog Session 2",
            "slug" => "blog_session_2",
            "sub_title" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit illo eius nobis! Dolorum delectus temporibus distinctio quasi maxime excepturi eius laboriosam, et tempore minima? Veritatis alias, repellat, voluptatum maxime",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea animi maxime corporis nulla est earum ut eum adipisci illo, laboriosam quaerat culpa doloribus iusto neque omnis, at amet cumque similique. Sequi esse sint beatae exercitationem modi necessitatibus quasi unde dolor doloribus, perferendis consequatur at maxime magnam illum facilis quos ullam minus inventore facere perspiciatis corrupti voluptatem. Laborum molestias reiciendis, impedit culpa ab sed nisi maiores quisquam laudantium alias illum saepe accusamus eum odio, nobis, incidunt enim quae porro. Optio minus quis, fuga magni quia ea enim nam illo quisquam in suscipit nulla numquam necessitatibus quasi accusamus quae soluta perferendis facere rem deleniti expedita doloribus tempore! Doloribus vero tempora incidunt ipsum voluptatibus temporibus quo nisi reiciendis? Excepturi porro nihil inventore sit praesentium, mollitia aperiam deleniti tempore, in quae maxime eligendi. Quos dolores aperiam sed tenetur qui modi, aut suscipit! Harum maiores laudantium magni itaque, natus soluta ex rerum explicabo quidem at possimus eum eligendi. In laudantium velit reprehenderit a, cumque excepturi consequuntur. Enim asperiores laborum, velit incidunt tenetur rem sunt adipisci fugiat doloremque vel, provident laudantium possimus architecto minima dolorum. Corrupti!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blogs);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
