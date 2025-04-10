<?php

namespace App\Http\Controllers\admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.category.index', compact('categories'));
    }
    public function store(CategoryRequest $request)
    {
       
        $imagePath = $request->uploadImage($request->file('image'));

        $category = new Category([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'image' => $imagePath, 
            'priority' => $request->input('priority'),
        ]);

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
    
}
