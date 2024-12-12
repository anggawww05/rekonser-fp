<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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

    public function indexdetailProducts($id)
    {

        $product = Product::findOrFail($id);
        // $category = Category::findOrFail($id);
        return view('users.detailProduct', compact('product'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin/createProduct', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => ['required'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'category' => ['required'],
            'condition' => ['required'],
            'stock' => ['required', 'numeric'],
            'product_img*' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ]);

        $filePath = [];
        foreach ($request->file('product_img') as $key => $image) {
            // Menyimpan gambar ke public storage dan mendapatkan path
            $filePath[$key] = $image->storeAs('product_img', $image->hashName(), 'public');
        }

        $product = Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'condition' => $request->condition,
            'category_id' => $request->category,
        ]);

        // $product_img = ProductImage::create([
        ProductImage::create([
            'product_id' => $product->id,
            'image_url1' => $filePath[0]??null,
            'image_url2' => $filePath[1]??null,
            'image_url3' => $filePath[2]??null,
        ]);
        return redirect()->route('manage.products')->with('success', 'Product created successfully.');
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        $category = Category::all();
        // dd($product);
        return view('admin/editProduct', compact('product', 'category'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $request->validate([
            'product_name' => ['required'],
            'price' => ['required', 'numeric'],
            'description' => ['required'],
            'category' => ['required'],
            'condition' => ['required'],
            'stock' => ['required', 'numeric'],
            'product_img*' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $filePath = [];
        if ($request->hasFile('product_img')){
            foreach ($request->file('product_img') as $key => $image) {
                $filePath[$key] = $image->storeAs('product_img', $image->hashName(), 'public');
            }
        }

        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'condition' => $request->condition,
            'category_id' => $request->category,
        ]);

        $productImage = ProductImage::where('product_id', $product->id)->first();
        if (count($filePath) == 0){
            $productImage->update([
                'image_url1' => $productImage->img_url1 ?? null,
                'image_url2' => $productImage->img_url2 ?? null,
                'image_url3' => $productImage->img_url3 ?? null,
            ]);
        }
        else{
            $productImage->update([
                'image_url1' => $filePath[0] ?? null,
                'image_url2' => $filePath[1] ?? null,
                'image_url3' => $filePath[2] ?? null,
            ]);
        }
        return redirect()->route('manage.products')->with('success', 'Product updated successfully.');
    }

    public function delete(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('manage.products')->with('success', 'Product deleted successfully.');
    }
}
