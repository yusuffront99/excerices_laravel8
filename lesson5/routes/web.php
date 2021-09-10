<?php

use App\Models\Post;
use App\Models\Category;



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;



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
        "title" => "home"
    ]);
});

Route::get('/home', function(){
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', [AboutController::class, 'aboutShow']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:sub_title}', [PostController::class, 'view']);

Route::get('/categories/{$category:slug}', function(Category $category){
    return view('category',[
        'posts'=> $category->shows
    ]);
});