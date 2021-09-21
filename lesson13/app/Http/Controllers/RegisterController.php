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
            // add unique:tb_name
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
            ]);

            // get password encyrpt
            // $validateData['password'] = bcyrpt($validateData['password']);

            // get password hash
            $validateData['password'] = Hash::make($validateData['password']);
    
        // dd('success');
        User::create($validateData);

        // $request->session()->flash('success', 'Registration successfully! please login');
        // return redirect('/login'); ===== ONE WAY

        return redirect('/login')->with('success', 'Registration successfully! please login');
    }
}
