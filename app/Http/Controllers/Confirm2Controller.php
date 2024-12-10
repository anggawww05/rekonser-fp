<?php

namespace App\Http\Controllers;

use App\Models\Returned;
use Illuminate\Http\Request;

class Confirm2Controller extends Controller
{
    public function indexConfirm2()
    {
        // $payments = Payment::paginate(10);
        $returneds = Returned::where('status', 'pending')->get();
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
}
