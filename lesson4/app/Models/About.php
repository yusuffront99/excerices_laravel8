<?php

namespace App\Models;


class About 
{
    private static $about = [
        "title" => "About me",
        "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo. Veniam magnam minus sapiente earum nihil tempore, aliquid delectus cupiditate dignissimos officiis modi, debitis laborum dolor natus fuga non eaque? Temporibus modi deserunt accusantium est maiores laudantium voluptatibus ullam, quasi et cum deleniti facilis necessitatibus repudiandae consequatur hic molestiae. Omnis suscipit laudantium consequatur quod magnam delectus, placeat adipisci nobis vero ad rem non dolore quam illo. Amet hic veritatis deleniti animi sapiente, quasi voluptatum delectus quaerat ducimus molestias suscipit possimus rerum ut vitae numquam doloremque consectetur ratione fugiat ullam excepturi laboriosam. Quia quae beatae facilis repellat porro ipsa, atque debitis?"
    ];

    public static function all()
    {
        return self::$about;
    }
}
