<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('users/landing');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function profileAdmin()
    {
        return view('admin/profileadmin');
    }
}
