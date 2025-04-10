<?php

namespace App\Http\Controllers\customer\checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CchekoutController extends Controller
{
    public function proceedToCheckout()
    {

        // $userId = Auth::id();
        // $cartItems = CartItem::where('user_id', $userId)
        //                     ->with('product')
        //                     ->get();
        
         $cartItems = CartItem::with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('customer.cart.show')->with('warning', 'Your cart is empty. Add items to proceed to checkout.');
        }
        return view('customer.pages.checkout.checkout', compact('cartItems'));
    }
    
}
