<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(User $author)
    {
        return view('posts', [
            "title"=>"Details User",
            "posts"=>$author->post->load('category','author')
        ]);
    }
}