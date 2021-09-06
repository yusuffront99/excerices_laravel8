<?php

use App\Models\Post;
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


Route::get('/', function(){
    return view('home', [
        'title'=>'Hello dev',
        'background'=>'background.jpg'
    ]);
});


// show all
Route::get('/posts', function(){
    return view('posts', [
        "title"=>"My Blogs",
        // ob => mn::all()
        "posts"=> Post::all()
    ]);
});


// show one
Route::get('/posts/{slug}', function($slug){
    return view('post', [
        "title"=>"single post",
        "post"=> Post::find($slug)
    ]);
});