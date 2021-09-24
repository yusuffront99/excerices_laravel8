<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index', [
            "active"=>"login"
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required'
        ]);
    }
}
