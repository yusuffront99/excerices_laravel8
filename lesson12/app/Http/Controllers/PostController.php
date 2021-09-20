<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::latest();

        // if( request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%'); 
        // }

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            "active" => "posts",
            "title" => "<h3 >All Post &raquo; <small class='text-danger'>$title</small> </h3>",
            // "posts" => Post::all() --- eager loading 
            // "posts" => Post::with(['author','category'])->latest()->get()
            // "posts" => Post::latest()->get()
            "posts" => Post::latest()->filter(request(['search', 'category','author']))->get()
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
