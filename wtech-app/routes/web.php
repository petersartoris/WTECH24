<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController; // kontroler #kod1
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\RouteBinding;

# HOME PAGE
Route::get('/', function () {
    return view('index');
})->name('/');

# AUTHENTICATION
/*Route::get('/login', function () {
    return view('auth.login');
})->name('login');*/

/*Route::get('/register', function () {
    return view('register');
})->name('register');*/



/*Route::post('/register', [RegisteredUserController::class, 'store'])
->middleware('guest')
->name('register');*/


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
