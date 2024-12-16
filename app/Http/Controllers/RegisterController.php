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
        $id_user = 2;
        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        // dd($request);
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $id_user,
        ]);
        return redirect('/login');
    }
}
