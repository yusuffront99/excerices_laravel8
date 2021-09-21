<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "active"=>"register",
            "title"=>"Register"
        ]);
    }

    public function store(Request $request)
    {
        // get data request
        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
            ]);

            // get password encyrpt
            // $validateData['password'] = bcyrpt($validateData['password']);

            // get password hash
            $validateData['password'] = Hash::make($validateData['password']);
    
        // dd('success');
        User::create($validateData);

        $request->session()->flash('success', 'Registration successfully! please login');

        return redirect('/login');
    }
}
