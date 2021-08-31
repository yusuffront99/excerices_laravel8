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
    return view('posts', [
        "title" => "Blog | Page"
    ]);
});
