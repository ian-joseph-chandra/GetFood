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

Route::get('/', function () {
    return view('customer/home');
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

