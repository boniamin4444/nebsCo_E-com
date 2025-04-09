<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'priority' => 'nullable|integer',
        ];
    }

    
    public function uploadImage($image)
    {
        if ($image) {
            
            $path = $image->store('categories', 'public');
            return $path; 
        }

        return null; 
    }
}
// 