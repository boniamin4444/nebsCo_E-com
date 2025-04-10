<?php


namespace App\Http\Controllers\customer\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class CartItemController extends Controller
{
 
    public function addToCart(Request $request)
{
    try {
        if ($request->ajax()) {
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'size' => 'nullable|string',
                'color' => 'nullable|string', // Store color name here
                'quantity' => 'required|integer|min:1',
            ]);

            $product = Product::find($request->product_id);

            // Check if item already exists in cart (based on product_id, size, and color)
            $cartItem = CartItem::where('product_id', $product->id)
                ->where('size', $request->size)
                ->where('color', $request->color)  // Store the color name here
                ->first();

            if ($cartItem) {
                // If item exists, update the quantity
                $cartItem->quantity += $request->quantity;
                $cartItem->save();
            } else {
                // If item doesn't exist, create a new cart item
                CartItem::create([
                    'product_id' => $product->id,
                    'size' => $request->size,
                    'color' => $request->color,  // Store the color name here
                    'quantity' => $request->quantity,
                ]);
            }

            return response()->json(['success' => true, 'message' => 'Added successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid request']);
    } catch (\Throwable $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()]);
    }
}

public function showAllCartItems()
{
    // $userId = Auth::id();
    // $cartItems = CartItem::where('user_id', $userId)
    //                     ->with('product') // Eager load the product details
    //                     ->get();

    $cartItems = CartItem::with('product')->get();

    return view('customer.pages.cartItems.cartItem', compact('cartItems'));
}


}
