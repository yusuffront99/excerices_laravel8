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
    return view('welcome');
});

Route::get('/about', function(){
    return view('about', [
        "title"=>"about",
        "name"=>"Yusuf",
        "github"=>"yusuffront@gmail.com",
        "descriptions"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi debitis qui iusto in, pariatur aperiam, sed dignissimos suscipit aut quia ut harum quaerat doloribus quidem? Minima reiciendis facilis similique. Obcaecati nemo officia laudantium earum nisi! Totam veritatis qui quasi esse nisi quas amet et dicta nesciunt sed corrupti assumenda similique consequatur quis, voluptatibus eaque deserunt praesentium ipsa fuga eos provident aut dolorem tempore! Eum ad, minus maiores adipisci impedit error ."
    ]);
});


Route::get('/posts', function(){

    return view('posts',[
        "title"=>"Post",
        "posts"=> Post::all()
    ]);
});


// single post
Route::get('/posts/{slug}', function($slug){

    return view('post', [
        "title"=>"single Post",
        "post"=>post::find($slug)
    ]);
});


