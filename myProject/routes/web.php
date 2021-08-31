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
    return view('home',[
        "title"=>"Home | Page"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About | Page",
        "name" => "Yusuf",
        "github" => "yusuffront",
        "images" => "profil1.jpg"
    ]);
});


Route::get('/blog', function(){

    $blog_posts = [
        [
            "title" => "firts Title",
            "slug" => "first-title",
            "author" => "frontal",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis quod exercitationem modi veniam provident nulla natus recusandae soluta facere possimus itaque cupiditate repellendus, odit, accusamus fugiat consectetur quisquam qui veritatis eius explicabo iusto optio. Deserunt, quisquam. Delectus temporibus soluta modi blanditiis, fugiat saepe commodi consectetur sunt porro error nihil. Eveniet ullam nam odio eos esse sunt. Nulla, autem perferendis. Corporis sit, eligendi nihil nulla ab tempora itaque distinctio iure nobis vero debitis quibusdam facere ducimus quia voluptatem excepturi eveniet quam explicabo ullam ratione expedita necessitatibus eum unde. Quidem quibusdam magnam optio, officia aliquam nobis laboriosam maiores totam temporibus aliquid!"
        ],
        [
            "title" => "second Title",
            "slug" => "second-title",
            "author" => "frontal99",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis quod exercitationem modi veniam provident nulla natus recusandae soluta facere possimus itaque cupiditate repellendus, odit, accusamus fugiat consectetur quisquam qui veritatis eius explicabo iusto optio. Deserunt, quisquam. Delectus temporibus soluta modi blanditiis, fugiat saepe commodi consectetur sunt porro error nihil. Eveniet ullam nam odio eos esse sunt. Nulla, autem perferendis. Corporis sit, eligendi nihil nulla ab tempora itaque distinctio iure nobis vero debitis quibusdam facere ducimus quia voluptatem excepturi eveniet quam explicabo ullam ratione expedita necessitatibus eum unde. Quidem quibusdam magnam optio, officia aliquam nobis laboriosam maiores totam temporibus aliquid!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis quod exercitationem modi veniam provident nulla natus recusandae soluta facere possimus itaque cupiditate repellendus, odit, accusamus fugiat consectetur quisquam qui veritatis eius explicabo iusto optio. Deserunt, quisquam. Delectus temporibus soluta modi blanditiis, fugiat saepe commodi consectetur sunt porro error nihil. Eveniet ullam nam odio eos esse sunt. Nulla, autem perferendis. Corporis sit, eligendi nihil nulla ab tempora itaque distinctio iure nobis vero debitis quibusdam facere ducimus quia voluptatem excepturi eveniet quam explicabo ullam ratione expedita necessitatibus eum unde. Quidem quibusdam magnam optio, officia aliquam nobis laboriosam maiores totam temporibus aliquid!"
        ]
    ];


    return view('posts', [
        "title" => "Blog | Page",
        "posts" => $blog_posts
    ]);
});

// single page
Route::get('posts/{slug}', function($slug){
    return view('post', [
        "title"=>"single post"
    ]);
});

