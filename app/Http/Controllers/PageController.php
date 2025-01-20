<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Returned;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('users/landing');
    }

    public function dashboard()
    {
        $products = Product::all();
        $users = User::all();
        $payments = Payment::all();
        $income = $payments->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });

        $januaris = $payments->whereBetween('created_at', ['2025-01-01', '2025-01-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $februaris = $payments->whereBetween('created_at', ['2025-02-01', '2025-02-28'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $marets = $payments->whereBetween('created_at', ['2025-03-01', '2025-03-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $aprils = $payments->whereBetween('created_at', ['2025-04-01', '2025-04-30'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $meis = $payments->whereBetween('created_at', ['2025-05-01', '2025-05-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $junis = $payments->whereBetween('created_at', ['2025-06-01', '2025-06-30'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $julis = $payments->whereBetween('created_at', ['2025-07-01', '2025-07-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $agutuss = $payments->whereBetween('created_at', ['2025-08-01', '2025-08-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $septembers = $payments->whereBetween('created_at', ['2025-09-01', '2025-09-30'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $oktobers = $payments->whereBetween('created_at', ['2025-10-01', '2025-10-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $novembers = $payments->whereBetween('created_at', ['2025-11-01', '2025-11-30'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });
        $desembers = $payments->whereBetween('created_at', ['2025-12-01', '2025-12-31'])->sum(function ($payment) {
            return $payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price;
        });

        $chart_datas = ['income' => $income, 'januari' => $januaris, 'februari' => $februaris, 'maret' => $marets, 'april' => $aprils, 'mei' => $meis, 'juni' => $junis, 'juli' => $julis, 'agustus' => $agutuss, 'september' => $septembers, 'oktober' => $oktobers, 'november' => $novembers, 'desember' => $desembers];

        return view('admin/dashboard', compact('payments', 'users', 'products', 'chart_datas'));
    }

    public function profileAdmin()
    {
        return view('admin/profileadmin');
    }


    public function viewPDF(Request $request)
    {
        $products = Product::all();
        $users = User::all();
        $payments = Payment::all();
        if ($request->has(['start_date', 'end_date'])) {
            if ($request->input('start_date') == null || $request->input('end_date') == null) {
                $pdf = Pdf::loadView('pdf/transactionReport', compact('products', 'users', 'payments'))->setPaper('a4', 'potrait');
                return $pdf->stream('report.pdf');
            } else {

                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $payments = $payments->whereBetween('created_at', [$start_date, $end_date]);
                $pdf = Pdf::loadView('pdf/transactionReport', compact('products', 'users', 'payments'))->setPaper('a4', 'potrait');
                return $pdf->stream('report.pdf');
            }
        }
    }

    public function viewPDF1(Request $request)
    {
        $products = Product::all();
        $users = User::all();
        $payments = Payment::all();
        $returneds = Returned::all();
        if ($request->has(['start_date', 'end_date'])) {
            if ($request->input('start_date') == null || $request->input('end_date') == null) {
                $pdf = Pdf::loadView('pdf/returnedReport', compact('products', 'users', 'returneds'))->setPaper('a4', 'potrait');
                return $pdf->stream('report.pdf');
            } else {

                $start_date = $request->input('start_date');
                $end_date = $request->input('end_date');
                $returneds = $returneds->whereBetween('created_at', [$start_date, $end_date]);
                $pdf = Pdf::loadView('pdf/returnedReport', compact('products', 'users', 'returneds'))->setPaper('a4', 'potrait');
                return $pdf->stream('report.pdf');
            }
        }
    }
}
