<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function indexfavorite()
    {
        return view('users/listFavorite');
    }

    public function addfavorite(Request $request, Product $product)
    {
        $quantity = $request->input('quantity', 1); // Jumlah buku yang ingin ditambahkan

        // Dapatkan user yang sedang login
        $user = Auth::user();

        // Dapatkan keranjang atau buat baru jika belum ada
        // $cart = $user->cart ?: $user->cart()->create();

        // Tambahkan buku ke keranjang
        // $cart->addBook($book, $quantity);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang.');
    }
}
