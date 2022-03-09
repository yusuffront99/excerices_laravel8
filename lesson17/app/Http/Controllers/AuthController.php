<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_index() {
        return view('Auth.login');
    }

    public function register_index() {
        return view('Auth.register');
    }

    //=== LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password"=>"required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return to_route('home');
        }
        return back()->with('failed','Your`re wrong is input data');
    }

    //=======================================
    public function register(Request $request)
    {
        $valData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $valData['password'] = Hash::make($valData['password']);

        User::create($valData);

        return to_route('home');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}
