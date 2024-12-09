<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class Confirm1Controller extends Controller
{
    public function indexConfirm1()
    {
        $payments = Payment::where('status', 'pending')->get();
        return view('admin/confirmRent', compact('payments'));
    }

    public function edit(Payment $payment, Request $request)
    {
        $request->validate([
            'status' => ['required', 'string'],
        ]);
        $payment->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Product created successfully.');
    }
}
