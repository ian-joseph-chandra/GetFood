<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Restaurant

Route::get('/restaurant-register', function () {
    return view('restaurant/register');
});

Route::get('/restaurant-login', function () {
    return view('restaurant/login');
});

Route::get('/restaurant-home', function () {
    return view('restaurant/restaurant-home');
});

Route::get('/restaurant-order', function () {
    return view('restaurant/order-detail');
});

Route::get('/restaurant-menu', function () {
    return view('restaurant/menu');
});


Route::get('/', function () {
    return view('customer/home');
});


//TESTING DUMMY
Route::get('/restaurant-detail', function () {
    return view('customer/restaurant-detail');
});

Route::get('/add-to-basket', function () {
    return view('customer/add-to-basket');
});

Route::get('/basket', function () {
    return view('customer/basket');
});

Route::get('/wait-order', function () {
    return view('customer/wait-order');
});

Route::get('/rating', function () {
    return view('customer/rating');
});

Route::get('/register', function () {
    return view('customer/register');
});


// Route for Customer subdirectory
Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return view('customer.home');
    });


});

// Route for Driver subdirectory
Route::prefix('driver')->group(function () {
    Route::get('/', function () {
        return view('driver.home');
    });

});

// Route for Restaurant subdirectory
Route::prefix('restaurant')->group(function () {
    Route::get('/', function () {
        return view('restaurant.home');
    });

});

// Route for API services
Route::prefix('api')->group(function () {
//    Route::get('/', function () {
//        return view('restaurant.home');
//    });


});

