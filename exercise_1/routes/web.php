<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;




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

Route::get('/home', function(){
    return view('home');
});

Route::get('/blogs',[BlogController::class, 'index']);

Route::get('/blogs/{blog:sub_title}',[BlogController::class, 'details']);

Route::get('/categories/{category:sub_title}', function(Category $category){
    return view('category',[
        "title"=>$category->name,
        "blogs"=>$category->sub_title
    ]);
});


