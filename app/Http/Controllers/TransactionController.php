<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function indexTransaction(Product $product)
    {
        $user = Auth::user();
        return view('users/detailTransaction', compact('product', 'user'));
    }

    public function storeTransaction(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'start_date' => ['required'],
            'end_date' => ['required'],
            'quantity' => ['required', 'numeric'],
            'rent_method' => ['required'],
            'payment_method' => ['required'],
            'duration' => ['required'],
            'transaction_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'product_id' => ['required', 'numeric'],
        ]);

        $image = $request->file('transaction_img');
        $image_url = $image->storeAs('transaction_img', $image->hashName(), 'public');


        $payment = Payment::create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'quantity' => $request->quantity,
            'rent_method' => $request->rent_method,
            'payment_method' => $request->payment_method,
            'transaction_img' => $image_url,
            'delivery_price' => $request->rent_method == 'antar-jemput' ? 200000 : 0,
            'status' => 'pending',
            'duration' => $request->duration,
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
        ]);
        // dd($payment);

        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

}
