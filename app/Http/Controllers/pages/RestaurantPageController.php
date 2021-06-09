<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Models\Branch;
use App\Models\MenuCategory;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class RestaurantPageController extends Controller
{
    public function home(Restaurant $restaurant)
    {
        $restaurant = (new RestaurantController)->show($restaurant);
        $selected = 1;
        $orders = Order::with('driver.user')->with('customer.user')->with('branch.restaurant')->with('order_status')->get();

        return view('restaurant.home', compact('restaurant', 'orders'));
        // return compact('restaurant', 'orders');
    }

    public function menu_categories(Restaurant $restaurant)
    {
        $menu_categories = $restaurant->menu_categories()->get();

        return view('restaurant.menu_categories', compact('restaurant', 'menu_categories'));
    }

    public function menu_categories_edit(Restaurant $restaurant, MenuCategory $menu_category)
    {
        return view('restaurant.edit-menu-category', compact('restaurant', 'menu_category'));
    }

    public function menus(Restaurant $restaurant, MenuCategory $menu_category)
    {
        $menu_categories = $restaurant->menu_categories()->get();
        $selected = null;
        $menus = $restaurant->menus()->with('menu_category')->get();

        return view('restaurant.menus', compact('restaurant', 'menu_categories', 'menus', 'selected'));
    }

    public function menus_by_category(Restaurant $restaurant, MenuCategory $menu_category)
    {
        $menu_categories = $restaurant->menu_categories()->get();
        $selected = $menu_category->id;

        $menus = $menu_category->menus()->get();

        return view('restaurant.menus', compact('restaurant', 'menu_categories', 'menus', 'selected'));
    }

   
    public function add_branch(Restaurant $restaurant)
    {
        return view('restaurant.add-branch', compact('restaurant'));
    }
    
    public function add(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        $category = new MenuCategory;
        $category->category_name = $request->category_name;
        $category->save();

        return redirect('/restaurant/add-menu-category');
    }

    public function add_menu_category(Restaurant $restaurant)
    {
        return view('restaurant.add-menu-category', compact('restaurant'));
    }

    public function add_menu(Restaurant $restaurant)
    {
        $menu_categories = $restaurant->menu_categories()->get();
        return view('restaurant.add-menu', compact('restaurant', 'menu_categories'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required|string',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
        $remember = $request->input('remember');

        if (Auth::attempt($user)) {
            if (!empty($remember)) {
                session(['email' => $request->only('email')]);
                session(['password' => $request->only('password')]);
            }

            return redirect('/restaurant');
        }

        return redirect('/restaurant/login')->with('flash_message_error', 'Invalid Username or Password');
    }
}
