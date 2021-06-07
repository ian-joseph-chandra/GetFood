<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\pages\CustomerPageController;
use App\Http\Controllers\pages\RestaurantPageController;
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
    return redirect('/restaurant/');
});

// Route for Customer subdirectory
Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return redirect('/customer/home');
    });

    Route::get('/home', [CustomerPageController::class, 'home']);

    Route::get('/restaurants/{branch}', [CustomerPageController::class, 'restaurant']);

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

    Route::get('/home', function () {
        return view('driver.home');
    });

    Route::get('/order', function () {
        return view('driver.detail-order');
    });
});

// Route for Restaurant subdirectory
Route::prefix('restaurant')->group(function () {
    Route::get('/', function () {
        return redirect('/restaurant/home/1');
    });

    Route::get('/home/{restaurant}', [RestaurantPageController::class, 'home']);

    Route::get('/register', function () {
        return view('restaurant.register');
    });

    Route::get('/login', function () {
        return view('restaurant.login');
    });

    Route::post('/login', [RestaurantPageController::class, 'login']);

    Route::get('/{restaurant}/orders', function () {
        return view('restaurant.order-detail');
    });

    Route::get('/{restaurant}/menus', [RestaurantPageController::class, 'menus']);

    Route::get('/{restaurant}/add-menu', [RestaurantPageController::class, 'add_menu']);

    Route::get('/{restaurant}/menu-categories', [RestaurantPageController::class, 'menu_categories']);

    Route::get('/{restaurant}/add-menu-category', [RestaurantPageController::class, 'add_menu_category']);
    
    Route::get('/{restaurant}/add-branch', [RestaurantPageController::class, 'add_branch']);


    Route::get('/history', function () {
        return view('restaurant.history');
    });
});

// Route for API services
Route::prefix('api')->group(function () {
    Route::resources([
        'restaurants' => RestaurantController::class,
        'branches' => BranchController::class,
        'menus' => MenuController::class
    ]);

    Route::resource('restaurants.branches', BranchController::class)->shallow();
    Route::resource('branches.restaurants', RestaurantController::class)->shallow();
    Route::resource('restaurants.menu_categories', MenuCategoryController::class)->shallow();
    Route::resource('restaurants.menus', MenuController::class)->shallow();
});

