<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.regist', []);
    }

    public function create(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:5', 'max:222'],
            'username' => ['required', 'min:5', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5', 'max:125']
        ]);
        $validateData['password'] = Hash::make($request->password);


        User::create($validateData);

        return redirect('/login')->with('success', 'Registration success!, Please login.');
    }
}