<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Returned;
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

        $quantity = Product::findOrFail($request->product_id)->stock;
        if ($quantity < $request->quantity) {
            return redirect()->back()->with('error', 'Stok tidak mencukupi.');
        }

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

        $product = Product::findOrFail($request->product_id);
        $product->decreseStock($request->quantity);

        Returned::create([
            'payment_id' => $payment->id,
            'status' => 'pending',
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('indexorder')->with('success', 'Transaksi berhasil.');
    }
}
