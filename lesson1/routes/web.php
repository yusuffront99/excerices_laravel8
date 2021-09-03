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
        "name"=>"Muhammad Yusuf",
        "github"=>"yusuffront@gmail.com"
    ]);
});

Route::get('/blog', function(){

    return view('blog', [
        "id"=>"page-1",
        "title"=>"blog",
        "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur saepe iste natus aut dignissimos at atque laudantium nam distinctio deleniti quod odit earum, debitis aliquam voluptas totam similique quasi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quae repudiandae? Quos nobis molestiae cum, soluta labore totam ratione a quae atque, aut suscipit cumque sed earum placeat numquam blanditiis!"
    ]);
});



