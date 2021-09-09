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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/posts', function(){
    return view('posts', [
        "content"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam esse dolorem, ea magni aperiam, nulla quidem obcaecati, voluptas sit fugiat corrupti! Quod optio alias nobis voluptates neque nam ut amet?"
    ]);
});