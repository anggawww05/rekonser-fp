<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('users/landing');
    }

    public function dashboard()
    {
        $products = Product::all();
        $users = User::all();
        $payments = Payment::all();
        return view('admin/dashboard', compact('payments', 'users', 'products'));
    }

    public function profileAdmin()
    {
        return view('admin/profileadmin');
    }
}
