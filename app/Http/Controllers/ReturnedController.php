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
    public function indexListreturn()
    {
        $user_id = Auth::user()->id;
        $returns = Returned::where('user_id', $user_id)->with('product')->get();
        // dd($returns);
        return view('users/listReturned', compact('returns'));
    }

    public function indexreturn(Product $product)
    {
        // dd($product);
        $user_id = Auth::user()->id;
        $payment = Payment::where('user_id', $user_id)->where('product_id', $product->id)->first();
        $payment->start_date = Carbon::parse($payment->start_date)->translatedFormat('d F Y');
        $end_date = Carbon::parse($payment->end_date);
        // dd($payment->end_date);
        // dd(Carbon::now()->format('d F Y'));
        if ($end_date->lessThan(Carbon::now()))
        {
            $delay = true;
            // return 1;
        }
        else
        {
            $delay = false;
            // return 0;
        }

        return view('users/detailReturned', compact('product', 'payment', 'delay'));
    }

    public function indexdetail()
    {
        return view('admin/proofReturn');
    }

    public function storereturned(Request $request)
    {
        $returned = Returned::where('payment_id', $request->payment_id)->first();
        // dd($returned);
        $request->validate([
            'delay_payment_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'product_condition_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $image1 = $request->file('delay_payment_img');
        $image_url1 = $image1->storeAs('delay_payment_img', $image1->hashName(), 'public');

        $image2 = $request->file('product_condition_img');
        $image_url2 = $image2->storeAs('product_condition_img', $image2->hashName(), 'public');

        $returned->update([
            'delay_payment_img' => $image_url1,
            'product_condition_img' => $image_url2,
            'status' => 'pending',
            // 'user_id' => auth()->user()->id,
            // 'product_id' => $request->product_id,
            // 'payment_id' => $request->payment,
        ]);
        return redirect()->back()->with('success', 'Product created successfully.');
    }
}
