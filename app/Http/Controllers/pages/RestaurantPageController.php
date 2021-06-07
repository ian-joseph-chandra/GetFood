<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantPageController extends Controller
{
    public function home(Restaurant $restaurant)
    {
        $restaurant = (new RestaurantController)->show($restaurant);

        //        $restaurant = Restaurant::with('branches')->find(1);

        return view('restaurant.home', compact('restaurant'));
//        return compact('restaurant');
    }

    public function menus(Restaurant $restaurant)
    {
        $menu_categories = (new MenuCategoryController)->index($restaurant);
        return view('restaurant.menus', compact('restaurant', 'menu_categories'));
    }

    public function add_branch(Restaurant $restaurant)
    {
        return view('restaurant.add-branch', compact('restaurant'));
    }

    public function add_menu_category(Restaurant $restaurant)
    {
        return view('restaurant.add-menu-category', compact('restaurant'));
    }

    public function add_menu(Restaurant $restaurant)
    {
        $menu_categories = (new MenuCategoryController)->index($restaurant);
        return view('restaurant.add-menu', compact('restaurant', 'menu_categories'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required|string',
            'password' => 'required',
        ]);

        // $parameter = new Restaurant([
        //     'email' => $request->only('email'),
        //     'password' => $request->only('password')
        // ]);

        // $restaurant = (new RestaurantController)->show($parameter);

        // return $restaurant;

        $user = $request->only('email', 'password');
        $remember = $request->input('remember');

        if (Auth::attempt($user)) {
            if (!empty($remember)) {
                session(['email' => $request->only('email')]);
                session(['password' => $request->only('password')]);
            }

            return redirect('/restaurant/home');
        }

        return redirect('/restaurant/home')->with('flash_message_error', 'Invalid Username or Password');
    }
}
