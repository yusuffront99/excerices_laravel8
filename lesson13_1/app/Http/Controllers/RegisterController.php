<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "active"=>"login"
            
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255',
            'email'=>'required|unique:users',
            'password'=>'required|min:5|max:255'
        ]);

        dd('success');
    // The blog post is valid...
    }
}
