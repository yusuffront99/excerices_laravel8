<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

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
            'name'=>'required|max:255',
            'username'=>'required|min:5|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
            'password'=>'required|min:3'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Congratulations, you`be become a new member');
    }
}
