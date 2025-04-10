<?php

namespace App\Http\Controllers\customer\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;

class CustomerProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['images', 'categories'])->get();
       
        $categories = Category::all();

        return view('customer.index', compact('products', 'categories'));
    }

    public function show($id)
{
    $product = Product::with('images')->find($id); // Assuming 'images' is a relationship on the Product model
    if (!$product) {
        return redirect()->route('products.index')->with('error', 'Product not found');
    }
    return view('customer.pages.details.detail', compact('product'));
}


}
