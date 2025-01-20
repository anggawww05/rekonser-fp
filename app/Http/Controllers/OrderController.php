<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function indexorder(Request $request)
    {
        $user_id = Auth::user()->id;
        $query = Payment::where('user_id', $user_id)->with('product');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->whereHas('product', function ($q) use ($search) {
            $q->where('product_name', 'like', '%' . $search . '%');
            });
        }

        $payments = Payment::whereExists(function ($query) {
            $query->select('id')
                ->from('returneds')
                ->whereColumn('returneds.payment_id', 'payments.id')
                ->whereNot('returneds.status', 'success');
        })->paginate(10);

        return view('users/listOrder', compact('payments'));
    }

}
