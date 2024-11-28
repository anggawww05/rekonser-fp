<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        // $products = Product::where('status', 'active')->paginate(10);
        return view('admin/manageproducts', compact('products'));

    }


    public function indexProducts()
    {
        $products = Product::all();
        return view('users/Products', compact('products'));

    }

    public function create()
    {
        return view('admin/createProduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => ['required'],
            'price' => ['required','numeric'],
            'stock' => ['required','numeric'],
            'product_img' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],

        ]);

        $image = $request->file('product_img');
        $image_url = $image->storeAs('product_img', $image->hashName(), 'public');

        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'product_img' => $image_url,
        ]);

        return redirect()->route('products')->with('success', 'Product created successfully.');
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('admin/editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $request->validate([
            'product_name' => ['required'],
            'price' => ['required','integer'],
            'stock' => ['required','integer'],
            'product_description' => ['nullable'],
            'product_img' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ]);

        if ($request->hasFile('product_img')) {
            $image = $request->file('product_img');
            $image_url = $image->storeAs('product_img', $image->hashName(), 'public');
            File::delete(storage_path('app/public/' . $product->product_img));
        }
        else {
            $image_url = $product->product_img;
        }

        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->product_description,
            'stock' => $request->stock,
            'product_img' => $image_url,
        ]);
        return redirect()->route('products')->with('success', 'Product deleted successfully.');
    }

    public function delete(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        $product->delete();


        return redirect()->route('products')->with('success', 'Product deleted successfully.');
    }
}
