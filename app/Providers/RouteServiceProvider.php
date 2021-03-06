<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Cart;
use App\Models\CartDetail;
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
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });

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
        Route::model('cart', Cart::class);
        Route::model('cart_detail', CartDetail::class);
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
