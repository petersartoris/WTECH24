<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController; // kontroler #kod1

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin-page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::get('/products/{category}', 'ProductController@show')->name('product-page'); //zobraz kategoriu #kod1
Route::get('/product-detail/{product}', 'ProductController@show')->name('product-detail'); //zobraz detail produktu #kod1

require __DIR__.'/auth.php';
