<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    /** @use HasFactory<\Database\Factories\ProductImageFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
    public function setImageAttribute($value)
    {
        if ($value) {
            $this->attributes['images'] = $value->store('products', 'public');
        }
    }
}
