<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addToFavorites(Product $product)
    {
        $user = Auth::user();

        if (Favorite::where('user_id', $user->id)->where('product_id', $product->id)->first()) {
            return redirect()->back()->with('error', 'Produk sudah ada di list favorit.');
        }

        $data = [
            'user_id' => $user->id,
            'product_id' => $product->id,
        ];

        Favorite::create($data);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke favorit.');
    }

    public function removeFromFavorites(Favorite $favorite)
    {
        $favorite->delete();
        return redirect()->back()->with('message', 'Produk tidak ditemukan dalam favorit.');
    }

    public function viewFavorites(Request $request)
    {
        $user = Auth::user();
        $favorites = Favorite::where('user_id', $user->id)->get();
        $product = Product::whereIn('id', $favorites->pluck('product_id'))->with('productImage')->paginate(10);
        return view('users/listFavorite', compact('user', 'product', 'favorites'));
    }
}
