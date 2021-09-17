<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function author(User $author)
    {
        return view('posts', [
            "title"=>"Details User",
            "name"=>$author->username,
            "posts"=>$author->post
        ]);
    }
}