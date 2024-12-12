<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function indexorder()
    {

        $user_id = Auth::user()->id;
        // $products = Product::all();
        $payments = Payment::where('user_id', $user_id)->with('product')->get();
        // dd($payments);
        return view('users/listOrder', compact('payments'));
    }

    public function indexhistorys()
    {
        $user_id = Auth::user()->id;
        $payments = Payment::where('user_id', $user_id)->with('product')->get();
        return view('users/historyUser', compact('payments'));
    }
}
