<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Returned;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($payments);
        return view('users/detailReturned', compact('product', 'payment'));
    }

    public function indexdetail()
    {
        return view('admin/proofReturn');
    }

    public function storereturned(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'delay_payment_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'product_condition_img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $image1 = $request->file('delay_payment_img');
        $image_url1 = $image1->storeAs('delay_payment_img', $image1->hashName(), 'public');

        $image2 = $request->file('product_condition_img');
        $image_url2 = $image2->storeAs('product_condition_img', $image2->hashName(), 'public');

        Returned::create([
            'delay_payment_img' => $image_url1,
            'product_condition_img' => $image_url2,
            'status' => 'pending',
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'payment_id' => $request->payment,
        ]);
        return redirect()->back()->with('success', 'Product created successfully.');
    }
}
