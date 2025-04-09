<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    // Define the attributes that are mass assignable (fillable)
    protected $fillable = [
        'user_id',
        'product_id',
        'size',
        'color',
        'quantity',
    ];

    // Or you can use guarded if you prefer to specify unassignable fields
    // protected $guarded = ['id'];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
