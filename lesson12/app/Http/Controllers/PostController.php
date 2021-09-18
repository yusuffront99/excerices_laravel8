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
            "posts" => Post::all()
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
