<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts', [
            "title" => "blogs",
            "posts" => Post::all()
        ]);
    }

    // implicit binding 
    public function view(Post $post)
    {
        return view('post', [
            "title" => "blogs",
            "post" => $post
        ]);
    }
}
