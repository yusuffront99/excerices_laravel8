<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function aboutShow()
    {
        return view('about', [
            "title" => "about",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus molestias maiores cum provident modi blanditiis quidem consequatur laudantium debitis illum! Esse eligendi voluptates, nesciunt libero soluta deserunt asperiores nihil. Modi aut praesentium rerum atque provident harum. Numquam quasi optio consequatur laboriosam mollitia consequuntur! Distinctio ex voluptate ut velit, sit a voluptatibus totam maxime, eligendi beatae tenetur quibusdam, vero iste perspiciatis! Qui, nam animi magni quia, natus explicabo eligendi tempore ipsam adipisci libero ducimus omnis molestias. Doloribus dignissimos quidem labore dolores quod perspiciatis quis dolorum quibusdam voluptatum voluptas impedit debitis laboriosam consequuntur facere iure unde, expedita, sequi reiciendis cum, officiis consequatur at? Quod dicta nulla, necessitatibus voluptatibus earum magnam rerum adipisci porro, unde at enim temporibus laborum saepe quos sunt illo! Consectetur dolores, unde repudiandae illum provident architecto optio quos numquam non iure repellendus cum iste magnam ullam doloribus adipisci nihil aut possimus suscipit assumenda voluptatibus. Cupiditate, harum eveniet a est delectus earum doloremque vitae in suscipit porro corporis dicta id voluptatem. Quis cumque debitis provident qui possimus ex! Dolorum non veritatis excepturi dicta quas, repudiandae eaque, esse eum voluptas, odit natus! In ad a ipsum, minus nisi iusto nesciunt! Rem magnam cupiditate libero quae dolorum. Suscipit officiis dolorum a rem?"
        ]);
    }
}
