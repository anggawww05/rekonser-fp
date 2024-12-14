<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Returned;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class Confirm2Controller extends Controller
{
    public function indexConfirm2(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $returneds = Returned::where('user_name', 'like', '%' . $search . '%')->whereNotIn('status', ['active', 'success'])->paginate(10);
        } else {
            $returneds = Returned::whereNotIn('status', ['active', 'success'])->paginate(10);
        }
        return view('admin/confirmReturn', compact('returneds'));
    }

    public function edit(Returned $returned, Request $request)
    {
        $request->validate([
            'status' => ['required', 'string'],
        ]);
        $returned->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function indexdetail(Product $product, Returned $returned)
    {
        $user_id = Auth::user()->id;
        $payment = Payment::where('user_id', $user_id)->where('product_id', $product->id)->first();

        return view('admin/proofReturn', compact('returned'));
    }
}
