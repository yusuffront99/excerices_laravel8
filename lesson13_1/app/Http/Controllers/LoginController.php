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
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)) {
            $request->session->regererate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('status', 'Login Failed');
    }
}
