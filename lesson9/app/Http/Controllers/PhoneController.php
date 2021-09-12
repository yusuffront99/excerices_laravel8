<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    //
    public function index()
    {
        return view('phones', [
            "title"=>"Phones Table",
            "phones" => Phone::all()
        ]);
    }
}
