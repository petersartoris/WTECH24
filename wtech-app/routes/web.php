<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
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
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search'); // search for products
Route::get('/products/category/{categorySlug?}', [ProductController::class, 'index'])->name('products.category'); // display all products or products by category

Route::get('/products/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

# SHOPPING CART
// tu pridat aj middlewares
Route::get('/cart', function () {
    return view('shopping-cart');
})->name('cart');

Route::post('/cart/add/{product}', [ProductController::class, 'addToCart'])
->name('cart-add');

Route::get('/cart/delivery', function () {
    return view('shopping-cart-delivery-options');
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
