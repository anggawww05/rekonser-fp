<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('image');
        $image->storeAs('public', $image->hashName());

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        // ]);

        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->description = $request->description;
        // $product->stock = $request->stock;

        // if ($request->file('image')) {
        //     Storage::disk('local')->delete('public/', $product->image);
        //     $image = $request->file('image');
        //     $image->storeAs('public', $image->hashName());
        //     $product->image = $image->hashName();
        // }

        // $product->update();

        // return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {

    }
}
