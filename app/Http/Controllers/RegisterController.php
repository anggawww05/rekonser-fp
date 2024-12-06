<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        // dd($request);
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            // 'password' => $request->password,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);
        return redirect('/login');
    }


}
