<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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
        "active" => "home"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "active"=>"categories",
        "title"=>"All Categories",
        "categories"=>category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         "active"=>"posts",
//         "title"=>"<h6><a href='/categories' class='text-decoration-none text-dark'>Category</a> &raquo;</h6> <h5 style='color:red'>$category->name</h5>",
//         "posts"=>$category->posts
//     ]);
// });



// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         "active"=>"categories",
//         "title"=>"<h6><a href='/posts' class='text-decoration-none text-dark'>Post</a> &raquo;</h6> <h5 style='color:red'>$author->name</h5>",
//         "posts"=>$author->posts->load('category', 'author')
//     ]);
// });

// laravel part 14
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);


