<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderStatus;
use App\Models\Restaurant;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::model('branch', Branch::class);
        Route::model('customer', Customer::class);
        Route::model('driver', Driver::class);
        Route::model('menu', Menu::class);
        Route::model('menu_category', MenuCategory::class);
        Route::model('order', Order::class);
        Route::model('order_detail', OrderDetail::class);
        Route::model('order_Status', OrderStatus::class);
        Route::model('restaurant', Restaurant::class);
        Route::model('stock', Stock::class);
        Route::model('user', User::class);
    }
}
