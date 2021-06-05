<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Restaurant;
use App\Http\Controllers\RestaurantController;
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
    return redirect('/customer/');
});

// Route for Customer subdirectory
Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return redirect('/restaurant/home');
    });

    Route::get('/home', [Customer\Home::class, 'page']);

    Route::get('/restaurants/{branch}', [Customer\Restaurant::class, 'page']);

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
        return redirect('/driver/home');
    });

    Route::get('/home', function(){
        return view('driver.home');
    });

    Route::get('/order', function () {
        return view('driver.detail-order');
    });
});

// Route for Restaurant subdirectory
Route::prefix('restaurant')->group(function () {
    Route::get('/', function () {
        return redirect('/restaurant/login');
    });

    Route::get('/home', [Restaurant\Home::class, 'page']);

    Route::get('/register', function () {
        return view('restaurant.register');
    });

    Route::get('/login', function () {
        return view('restaurant.login');
    });

    Route::post('/login', [Restaurant\Login::class, 'login']);

    Route::get('/orders', function () {
        return view('restaurant.order-detail');
    });

    Route::get('/menu', function () {
        return view('restaurant.menu');
    });

    Route::get('/add-branch', function () {
        return view('restaurant.add-branch');
    });

    Route::get('/add-menu', function () {
        return view('restaurant.add-menu');
    });

    Route::get('/history', function () {
        return view('restaurant.history');
    });
});

// Route for API services
Route::prefix('api')->group(function () {
    Route::resources([
        'restaurants' => RestaurantController::class,
        'branches' => BranchController::class
    ]);

    Route::resource('restaurants.branches', BranchController::class)->shallow();
    Route::resource('branches.restaurants', RestaurantController::class)->shallow();
});

