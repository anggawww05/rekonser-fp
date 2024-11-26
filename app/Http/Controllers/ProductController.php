<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin/manageproducts', compact('products'));

    }


    public function indexUser()
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

        return redirect()->route('store')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
