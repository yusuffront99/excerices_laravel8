<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:title}', [PostController::class, 'details']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title"=>$category->name,
        "posts"=>$category->posts,
        "category"=>$category->name
    ]);
});



