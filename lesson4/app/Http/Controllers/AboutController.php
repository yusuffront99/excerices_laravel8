<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function profile()
    {
        return view('about', [
            "about" => About::all()
        ]);
    }
}
