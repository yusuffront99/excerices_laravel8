<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blogs', [
            "title"=>"My Blog",
            "blogs"=>Blog::all()
        ]);
    }

    public function details(Blog $blog)
    {
        return view('blog', [
            "title"=>"My Blog",
            "blog"=>$blog
        ]);
    }

}

