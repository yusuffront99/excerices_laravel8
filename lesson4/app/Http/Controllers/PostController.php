<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //method
    public function index()
    {
        return view('posts',[
            "title" => "Blogs",
            "posts" => Post::all()
        ]);
    }

    public function present($id)
    {
        return view('post', [
            "title" => "single post",
            "post" => Post::find($id)
        ]);
    }

    
}
