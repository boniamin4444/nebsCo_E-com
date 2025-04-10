<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Category\CategoryController;
use App\Http\Controllers\admin\product\ProductController;



use App\Http\Controllers\customer\product\CustomerProductController;
use App\Http\Controllers\customer\cart\CartItemController;
use App\Http\Controllers\customer\checkout\CchekoutController;



Route::get('/', [CustomerProductController::class, 'index']);
Route::get('/product/{id}', [CustomerProductController::class, 'show'])->name('product.details');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);


Route::post('/add-to-cart', [CartItemController::class, 'addToCart'])->name('add.to.cart');
Route::get('/all-cart-items', [CartItemController::class, 'showAllCartItems'])->name('cart.all');


Route::get('/checkout', [CchekoutController::class, 'proceedToCheckout'])->name('customer.checkout');



Route::group(['middleware' => ['web']], function () {
    // Payment Routes for bKash
    Route::get('/bkash/payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'index']);
    Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'createPayment'])->name('bkash-create-payment');
    Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class,'callBack'])->name('bkash-callBack');

    //search payment
    Route::get('/bkash/search/{trxID}', [App\Http\Controllers\BkashTokenizePaymentController::class,'searchTnx'])->name('bkash-serach');

    //refund payment routes
    Route::get('/bkash/refund', [App\Http\Controllers\BkashTokenizePaymentController::class,'refund'])->name('bkash-refund');
    Route::get('/bkash/refund/status', [App\Http\Controllers\BkashTokenizePaymentController::class,'refundStatus'])->name('bkash-refund-status');

});