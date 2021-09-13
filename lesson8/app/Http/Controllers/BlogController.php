<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blogs',[
            "blogs"=>Blog::all()
        ]);
    }

    public function details(Blog $blog)
    {
        return view('blog', [
            "blog" => $blog
        ]);
    }
}
