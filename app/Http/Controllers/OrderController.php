<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function indexorder()
    {
        return view('users/listOrder');
    }
}
