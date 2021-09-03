<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=>"Hello"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=>"About",
        "foto"=>"profil2.jpg",
        "name"=>"Muhammad Yusuf",
        "github"=>"yusuffront@gmail.com",
        "dev"=>"Web Developer"
    ]);
});

Route::get('/blog', function(){

    $content = [
        [
            "title"=>"blog_pertama",
            "slug"=>"blog_1",

            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempora dolorem vero iste esse atque saepe pariatur doloribus nam minima voluptatibus laborum debitis vitae alias unde cum distinctio accusantium ipsum assumenda, architecto magnam illum, laudantium, officiis dicta! Quia explicabo consectetur, quisquam maiores est et rem cumque dolores fugiat commodi ipsum, unde deleniti possimus ratione quos similique nihil, sit illo temporibus necessitatibus cupiditate? Enim voluptas assumenda esse molestias distinctio reiciendis quas fugit commodi eius ab aspernatur reprehenderit, porro nam numquam, amet quo veritatis laboriosam cupiditate sit soluta quaerat neque accusamus? Impedit, rem mollitia! Optio rerum, ea distinctio deserunt porro "
        ],
        [
            "title"=>"blog_kedua",
            "slug"=>"blog_2",

            "body"=>"reprehenderit repudiandae obcaecati laudantium aut in consequuntur eos impedit consequatur consectetur voluptatum ipsam? Aperiam est esse ducimus blanditiis hic, architecto incidunt, minima assumenda nobis impedit libero. Tempora eos unde facere nulla consectetur deleniti voluptate deserunt nam voluptatum maxime. Incidunt, ad sequi cum quae dolores harum consequuntur suscipit eligendi porro, aperiam natus minus excepturi, voluptatibus in adipisci? Autem veniam totam asperiores voluptates labore consectetur exercitationem repudiandae quis fuga cupiditate. Ducimus eos autem nostrum reiciendis obcaecati doloribus corporis dolorum consequuntur, nihil minus vero ad dicta perferendis ab! Asperiores fuga magni amet nam veritatis voluptates voluptatem ipsa, obcaecati hic itaque molestiae quis quasi esse, cum nulla eaque at similique perferendis unde beatae fugit cumque necessitatibus sequi maiores! Ut, fugiat? Tempore repellendus sequi alias qui cum tenetur magnam, maxime minus cumque, accusamus error fuga ab consequuntur placeat iure reiciendis quod expedita nulla animi? Tenetur nisi ratione illum nobis maxime sint, dolorum commodi atque doloribus molestias accusantium ipsa, temporibus magni facilis adipisci omnis, laboriosam voluptates aut sapiente est minus debitis. Nam inventore iure quasi, rem, vitae dolores est unde repellendus quae sint assumenda, facere molestias veniam minima! Est magni labore facilis deserunt quam ipsum rerum cumque animi dicta fugiat in, cupiditate id enim aperiam mollitia doloribus iusto."
        ]
    ];

    return view('blog', [
        "title"=>"blog",
        "posts"=>$content
    ]);
});




