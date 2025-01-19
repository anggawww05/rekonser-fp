<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Returned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Confirm1Controller extends Controller
{
    //menampilkan tabel konfirmasi pembayaran
    public function indexConfirm1(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $payments = Payment::whereHas('user', function ($query) use ($search) {
            $query->where('user_name', 'like', '%' . $search . '%');
            })->where('status', 'pending')->paginate(10);
        } else {
            $payments = Payment::where('status', 'pending')->paginate(10);
        }
        return view('admin/confirmRent', compact('payments'));
    }

    public function edit(Payment $payment, Request $request)
    {
        // dd($request->status);
        $request->validate([
            'status' => ['required', 'string'],
        ]);
        $payment->update(['status' => $request->status]);
        $returned = Returned::where('payment_id', $payment->id)->first();

        $returned->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function indexdetail($id)
    {
        $payment = Payment::find($id);
        return view('admin/proofRent', compact('payment'));
    }
}
