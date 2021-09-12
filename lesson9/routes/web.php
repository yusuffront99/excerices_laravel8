<?php

use App\Models\Phone; 
use App\Models\User; 
use App\Models\Post; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

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
        "title" => "Hello Developer"
    ]);
});

Route::get('/phones', [PhoneController::class, 'index']);

