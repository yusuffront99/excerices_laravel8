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

    public function view($slug)
    {
        return view('post', [
            "title" => "blogs",
            "post" => Post::find($slug)
        ]);
    }
}
