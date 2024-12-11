<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Returned;
use Illuminate\Http\Request;

class Confirm1Controller extends Controller
{
    public function indexConfirm1()
    {
        // $payments = Payment::paginate(10);
        $payments = Payment::where('status', 'pending')->get();
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
}
