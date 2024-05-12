<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');


# PRODUCTS
Route::get('/products', [ProductController::class, 'index'])->name('products');

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

Route::post('cart/order-create', [OrderController::class, 'create'])
    ->name('order-create');

# ADMIN
Route::get('/admin', [ProductController::class, 'showProducts'])
->middleware('admin')->name('admin'); //custom middleware


Route::get('/admin/edit', function () {
    return view('admin.admin-page-edit');
})->middleware('admin')->name('admin-edit'); //custom middleware

Route::post('/admin-create', [ProductController::class, 'store'])->name('product.store');


Route::delete('/admin-edit/{id}', [ProductController::class, 'destroy'])
    ->name('product.destroy');



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
