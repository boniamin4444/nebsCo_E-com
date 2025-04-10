<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // এখানে true দেওয়া হয়েছে কারণ যেকোনো ব্যবহারকারী পণ্য তৈরি করতে পারবেন, আপনি চাইলে এটা কাস্টমাইজ করতে পারেন।
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            // 'slug' => 'required|string|max:255|unique:products,slug', // এই লাইনটি বাদ দেওয়া হয়েছে
            'product_code' => 'required|string|max:255|unique:products,product_code',
            'tags' => 'nullable|string|max:255',
            'purchase_price' => 'required|numeric|min:0',
            'regular_price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lt:regular_price',
            'discount_type' => 'nullable|in:fixed,percentage',
            'stock_qty' => 'nullable|integer|min:0',
            'product_thumbnail' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'sizes' => 'nullable|string',
            'colors' => 'nullable|string',
            'status' => 'required|in:active,inactive,draft',
            'tax' => 'nullable|numeric|min:0',
            'expiration_date' => 'nullable|date|after_or_equal:today',
        ];
    }

    public function uploadImage($image)
    {
        if ($image) {
            $path = $image->store('productimage', 'public'); // 'productimage' ফোল্ডারে সেভ হবে
            return $path;
        }
        return null;
    }
    
    public function uploadThumbnail($image)
    {
        if ($image) {
            $path = $image->store('productthumbnail', 'public'); // 'productthumbnail' ফোল্ডারে সেভ হবে
            return $path;
        }
        return null;
    }
    
    /**
     * Get the custom messages for the validator.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'category_id.required' => 'Please select a category.',
            'category_id.exists' => 'The selected category is invalid.',
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be a string.',
            'name.max' => 'Product name cannot be longer than 255 characters.',
            'product_code.required' => 'Product code is required.',
            'product_code.string' => 'Product code must be a string.',
            'product_code.max' => 'Product code cannot be longer than 255 characters.',
            'product_code.unique' => 'This product code is already taken.',
            'tags.string' => 'Tags must be a string.',
            'tags.max' => 'Tags cannot be longer than 255 characters.',
            'purchase_price.required' => 'Purchase price is required.',
            'purchase_price.numeric' => 'Purchase price must be a number.',
            'purchase_price.min' => 'Purchase price cannot be negative.',
            'regular_price.required' => 'Regular price is required.',
            'regular_price.numeric' => 'Regular price must be a number.',
            'regular_price.min' => 'Regular price cannot be negative.',
            'discount_price.numeric' => 'Discount price must be a number.',
            'discount_price.min' => 'Discount price cannot be negative.',
            'discount_price.lt' => 'Discount price must be less than the regular price.',
            'discount_type.in' => 'Discount type must be either fixed or percentage.',
            'stock_qty.integer' => 'Stock quantity must be an integer.',
            'stock_qty.min' => 'Stock quantity cannot be negative.',
            'product_thumbnail.image' => 'Product thumbnail must be an image.',
            'product_thumbnail.max' => 'Product thumbnail cannot be larger than 2MB.',
            'images.*.image' => 'Each image must be a valid image file.',
            'images.*.max' => 'Each image cannot be larger than 2MB.',
            'short_description.required' => 'Short description is required.',
            'short_description.string' => 'Short description must be a string.',
            'long_description.required' => 'Long description is required.',
            'long_description.string' => 'Long description must be a string.',
            'sizes.string' => 'Sizes must be a string (comma-separated).',
            'colors.string' => 'Colors must be a string (comma-separated).',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be either active, inactive, or draft.',
            'tax.numeric' => 'Tax must be a number.',
            'tax.min' => 'Tax cannot be negative.',
            'expiration_date.date' => 'Expiration date must be a valid date.',
            'expiration_date.after_or_equal' => 'Expiration date must be today or a future date.',
        ];
    }
}