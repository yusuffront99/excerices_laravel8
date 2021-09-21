<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function rindex()
    {
        return view('register.index', [
            "active"=>"register",
            "title"=>"Register"
        ]);
    }
}
