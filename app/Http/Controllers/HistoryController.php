<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Returned;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function indexhistorys(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $payments = Payment::where('user_name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $payments = Payment::paginate(10);
        }
        return view('users/historyUser', compact('payments'));
    }

    public function indexhistorysadmin(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $payments = Payment::where('user_name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $payments = Payment::paginate(10);
        }
        return view('admin/historyTransaction', compact('payments'));
    }

    public function indexReturnedsreport(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $payments = Payment::where('user_name', 'like', '%' . $search . '%')->paginate(10);
            $returneds = Returned::where('user_name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $payments = Payment::paginate(10);
            $returneds = Returned::paginate(10);
        }
        return view('admin/returnedReport', compact('payments', 'returneds'));
    }
}
