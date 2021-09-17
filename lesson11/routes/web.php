<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
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

Route::get('/', function(){
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'details']);

// Route::get('/categories', function(Category $category){
//     return view('categories', [
//         "title" => "categories",
//         "name"=>$category->name,
//         "slug"=>$category->slug,
//         "categories" => $category->posts
//     ]);
// });

Route::get('/categories/{category:slug}', function(Category $category){
    return view('categories', [
        "title" => "categories",
        "name"=>$category->name,
        "slug"=>$category->slug,
        "categories" => $category->posts
    ]);
});


Route::get('/authors/{author:username}', [AuthorController::class, 'author']);
