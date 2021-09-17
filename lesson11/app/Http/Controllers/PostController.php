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
            "title" => "posts",
            "posts" => Post::all()
        ]);
    }

    public function details(Post $post)
    {
        return view('post', [
            "active"=>"posts",
            "title"=>"posts",
            "post"=>$post
        ]);
    }
}

