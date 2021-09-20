<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest();

        // if( request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%'); 
        // }

        $posts = Post::latest();

        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%');
        }


        

        return view('posts', [
            "active" => "posts",
            "title" => "All Posts",
            // "posts" => Post::all() --- eager loading 
            // "posts" => Post::with(['author','category'])->latest()->get()
            // "posts" => Post::latest()->get()
            "posts" => $posts->get()
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
