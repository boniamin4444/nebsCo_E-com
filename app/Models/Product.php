<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function categories() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
    public function getStatusAttribute($value)
    {
        return $value === 'active' ? 'active' : ($value === 'inactive' ? 'inactive' : 'draft');
    }
    public function getProductThumbnailAttribute($value)
   {
    return $value ? asset('storage/' . $value) : null;
   }

}
