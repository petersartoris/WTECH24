<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController; // kontroler #kod1

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');

# AUTHENTICATION
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

# PRODUCTS
Route::get('/products/detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('/products', function () {
    return view('product-page');
})->name('products');

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

Route::get('/products/{category}', 'ProductController@show')->name('product-page'); //zobraz kategoriu #kod1
Route::get('/product-detail/{product}', 'ProductController@show')->name('product-detail'); //zobraz detail produktu #kod1

require __DIR__.'/auth.php';
