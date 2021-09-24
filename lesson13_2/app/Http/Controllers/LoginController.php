<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "active"=>"login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password"=>"required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('failed','The provided credentials do not match our records.');
    }
}
