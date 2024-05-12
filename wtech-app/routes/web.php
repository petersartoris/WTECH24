<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\RouteBinding;
use Illuminate\Http\Request;

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');


# PRODUCTS
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/category/{categorySlug?}', [ProductController::class, 'index'])->name('products.category');
Route::get('/products/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

# SHOPPING CART
Route::get('/cart', function () {
    return view('shopping-cart');
})->name('cart');

Route::post('/cart/add/{product}', [ProductController::class, 'addToCart'])
    ->name('cart-add');

Route::post('/cart/update/{product}', [ProductController::class, 'updateCart'])
    ->name('cart-update');

Route::post('/cart/remove/{product}', [ProductController::class, 'removeFromCart'])
    ->name('cart-remove');

Route::get('/cart-delivery', function () {
    // Retrieve cart and total from the session
    $cart = session('cart');
    $total = session('total');

    // Pass the cart data and total price to the delivery options view
    return view('shopping-cart-delivery-options', ['cart' => $cart, 'total' => $total]);
})->name('cart-delivery');

Route::get('/cart/delivery-info', function () {
    return view('shopping-delivery-address');
})->name('cart-delivery-info');


# ADMIN
Route::get('/admin', function () {
    return view('admin.admin-page');
})->name('admin');

Route::get('/admin/edit', function () {
    return view('admin.admin-page-edit');
})->name('admin-edit');


# OTHER
Route::get('/about', function () {
    return view('delivery-about-contact');
})->name('about');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/products/search', [ProductController::class, 'search'])->name('product-search');


require __DIR__ . '/auth.php';
