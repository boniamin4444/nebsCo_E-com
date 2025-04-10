<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('images')->get();
        return view('admin.pages.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.product.create', compact('categories'));
    }
    
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();
    
        // Thumbnail Image Upload
        if ($request->hasFile('product_thumbnail')) {
            $validatedData['product_thumbnail'] = $request->uploadThumbnail($request->file('product_thumbnail'));
        }
    
        // Product Images Upload
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $request->uploadImage($image); // All images are uploaded and stored in array
            }
            $validatedData['images'] = json_encode($imagePaths); // Store all image paths as a JSON array
        }
    
        // Calculate discounted price
        $regularPrice = $validatedData['regular_price'];
        $discountPrice = $validatedData['discount_price'] ?? 0;
        $discountType = $validatedData['discount_type'] ?? null;
        $finalPrice = $regularPrice;
    
        if ($discountPrice > 0 && $regularPrice > 0) {
            if ($discountType === 'fixed') {
                $finalPrice = max(0, $regularPrice - $discountPrice);
            } elseif ($discountType === 'percentage') {
                $discountAmount = ($discountPrice / 100) * $regularPrice;
                $finalPrice = max(0, $regularPrice - $discountAmount);
            } else {
                $finalPrice = max(0, $regularPrice - $discountPrice);
            }
            // Discount থাকলে finalPrice কে regular_price হিসেবে ব্যবহার করুন
            $validatedData['regular_price'] = $finalPrice;
            $validatedData['discounted_price'] = ($finalPrice < $regularPrice) ? $finalPrice : null; // Discounted price সেভ করুন অথবা null যদি ডিসকাউন্ট না থাকে
        } else {
            // Discount না থাকলে regular_price অপরিবর্তিত থাকবে এবং discounted_price null হবে
            $validatedData['discounted_price'] = null;
        }
    
        // Generate slug from name (first 10 words)
        if (isset($validatedData['name'])) {
            $slug = Str::slug(implode(' ', array_slice(explode(' ', $validatedData['name']), 0, 10)));
            $validatedData['slug'] = $slug;
        }
    
        $product = new Product($validatedData);
    
        // Handle sizes array
        if (isset($validatedData['sizes'])) {
            $product->sizes = json_encode(explode(',', trim($validatedData['sizes'])));
        }
    
        // Handle colors array
        if (isset($validatedData['colors'])) {
            $product->colors = json_encode(explode(',', trim($validatedData['colors'])));
        }
    
        $product->save();
    
        return redirect()->route('products.create')->with('success', 'Product added successfully!');
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->product_thumbnail) {
            Storage::disk('public')->delete($product->product_thumbnail);
        }

        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image);
            $image->delete();
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }



}
