<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Returned;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReturnedController extends Controller
{
    public function indexListreturn(Request $request)
    {

        $user_id = Auth::user()->id;
        $query = Returned::where('user_id', $user_id)->with('product', 'payment');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->whereHas('product', function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%');
            });
        }

        $returns = $query->paginate(10);

        foreach ($returns as $return) {
            $end_date = Carbon::parse($return->payment->end_date);
            if ($end_date->lessThan(Carbon::now()) && $return->delay_payment_img == null) {
            $return->status = 'delay';
            }
        }

        return view('users/listReturned', compact('returns'));
    }

    public function indexreturn(Payment $payment)
    {
        $user_id = Auth::user()->id;
        $payment = Payment::where('id', $payment->id)->with('product', 'user')->first();
        $payment->start_date = Carbon::parse($payment->start_date)->translatedFormat('d F Y');
        $payment->end_date = Carbon::parse($payment->end_date);
        $end_date = Carbon::parse($payment->end_date);
        if ($end_date->lessThan(Carbon::now())) {
            $delay = true;
        } else {
            $delay = false;
        }
        return view('users/detailReturned', compact('payment', 'delay'));
    }

    public function storereturned(Request $request)
    {
        $returned = Returned::where('payment_id', $request->payment_id)->first();
        $request->validate([
            'delay_payment_img' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'product_condition_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('delay_payment_img')) {
            $image1 = $request->file('delay_payment_img');
            $image_url1 = $image1->storeAs('delay_payment_img', $image1->hashName(), 'public');
        }

        $image2 = $request->file('product_condition_img');
        $image_url2 = $image2->storeAs('product_condition_img', $image2->hashName(), 'public');

        if ($request->delay_price) {
            $returned->update([
                'delay_price' => $request->delay_price,
                'delay_payment_img' => $image_url1,
                'product_condition_img' => $image_url2,
                'status' => 'pending',
            ]);
        } else {
            $returned->update([
                'product_condition_img' => $image_url2,
                'status' => 'pending',
            ]);
        }

        $product = Product::findOrFail($returned->product_id);
        $product->increseStock($returned->payment->quantity);

        return redirect()->route('products')->with('success', 'Product created successfully.');
    }
}
