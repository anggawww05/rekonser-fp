<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // dd($request->all());
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request): RedirectResponse
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
