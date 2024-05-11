<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\RouteBinding;

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');


# PRODUCTS
/*Route::get('/products/detail', function () {
    return view('product-detail');
})->name('product-detail');*/



//Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
//Route::get('/products/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

Route::get('/products', function () {
    return view('product-page');
})->name('products');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

# SHOPPING CART
// tu pridat aj middlewares
Route::get('/cart', function () {
    return view('shopping-cart');
})->name('cart');

Route::get('/cart/delivery', function () {
    return view('shopping-cart-delivery-options');
})->name('cart-delivery');

Route::get('/cart/delivery-info', function () {
    return view('shopping-delivery-address');
})->name('cart-delivery-info');

# ADMIN
Route::get('/admin', function () {
    return view('admin-page');
})->name('admin');

Route::get('/admin/edit', function () {
    return view('admin-page-edit');
})->name('admin-edit');
# OTHER

Route::get('/about', function () {
    return view('delivery-about-contact');
})->name('about');

Route::get('/error', function () {
    return view('error');
})->name('error');

require __DIR__.'/auth.php';
