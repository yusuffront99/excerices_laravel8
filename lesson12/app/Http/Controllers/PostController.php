<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "active" => "posts",
            "title" => "All Post",
            // "posts" => Post::all() --- eager loading 
            // "posts" => Post::with(['author','category'])->latest()->get()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "active"=>"posts",
            "post"=>$post
        ]);
    }
}
