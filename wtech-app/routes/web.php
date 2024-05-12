<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');


# PRODUCTS
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search'); // search for products
// Route::get('/products/category/{categorySlug?}', [ProductController::class, 'index'])->name('products.category'); // display all products or products by category

Route::get('/products/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

# SHOPPING CART
Route::get('/cart', [CartController::class, 'index'])->name('cart');


Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])
    ->name('cart-add');

Route::post('/cart/update/{product}', [CartController::class, 'updateCart'])
    ->name('cart-update');

Route::post('/cart/remove/{product}', [CartController::class, 'removeFromCart'])
    ->name('cart-remove');

Route::post('/cart/order-delivery-payment', [CartController::class, 'deliveryOptions'])
    ->name('cart-delivery');

Route::post('/cart/order-info', [CartController::class, 'finalOrder'])
    ->name('cart-delivery-info');

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
