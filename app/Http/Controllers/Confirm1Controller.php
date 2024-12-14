<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Returned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Confirm1Controller extends Controller
{
    public function indexConfirm1(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $payments = Payment::where('user_name', 'like', '%' . $search . '%')->where('status', 'pending')->paginate(10);
        } else {
            $payments = Payment::where('status', 'pending')->paginate(10);
        }
        return view('admin/confirmRent', compact('payments'));
    }

    public function edit(Payment $payment, Request $request)
    {
        $request->validate([
            'status' => ['required', 'string'],
        ]);
        $payment->update(['status' => $request->status]);

        Returned::create([
            'delay_payment_img' => NULL,
            'product_condition_img' => NULL,
            'status' => $request->status,
            'user_id' => auth()->user()->id,
            'product_id' => $payment->product_id,
            'payment_id' => $payment->id,
        ]);

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function indexdetail($id)
    {
        $payment = Payment::find($id);

        return view('admin/proofRent', compact('payment'));
    }
}
