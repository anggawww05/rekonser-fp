<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('users/landing');
    }

    // public function products()
    // {
    //     $products = Product::all();
    //     return view('users/products');
    // }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }



    public function productss()
    {
        return view('products');
    }
}
