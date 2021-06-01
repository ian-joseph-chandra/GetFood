<?php

use App\Http\Controllers\Customer;
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
Route::get('/', function () {
    return view('customer/home');
});

// Route for Customer subdirectory
Route::prefix('customer')->group(function () {
    Route::get('/', [Customer\Home::class, 'page']);

    Route::get('/restaurant-detail', function () {
        return view('customer.restaurant-detail');
    });

    Route::get('/add-to-basket', function () {
        return view('customer.add-to-basket');
    });

    Route::get('/basket', function () {
        return view('customer.basket');
    });

    Route::get('/wait-order', function () {
        return view('customer.wait-order');
    });

    Route::get('/rating', function () {
        return view('customer.rating');
    });

    Route::get('/register', function () {
        return view('customer.register');
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

    Route::get('/register', function () {
        return view('restaurant.register');
    });

    Route::get('/login', function () {
        return view('restaurant.login');
    });

    Route::get('/orders', function () {
        return view('restaurant.order-detail');
    });

    Route::get('/menus', function () {
        return view('restaurant.menu');
    });
});

// Route for API services
Route::prefix('api')->group(function () {

});

