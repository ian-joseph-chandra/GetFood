<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\BranchController;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerPageController extends Controller
{
    public function home()
    {
        $branches = (new BranchController)->order_by_rating();

        $recommendations = [[], []];

        for ($i = 0; $i < 4; $i++)
            array_push($recommendations[0], $branches[$i]);

        for ($i = 4; $i < 8; $i++)
            array_push($recommendations[1], $branches[$i]);

        return view('customer.home', compact('recommendations'));
//        return compact('recommendations');
    }

    public function menus(Branch $branch)
    {
        $restaurant = $branch->restaurant()->first();
        $menu_categories = MenuCategory::with('menus')->where('restaurant_id', $restaurant->id)->get();
        $menu_category = null;
        $selected = null;

        return view('customer.menus', compact('restaurant', 'branch', 'menu_categories', 'menu_category', 'selected'));
    }

    public function menus_by_category(Branch $branch, MenuCategory $menu_category)
    {
        $restaurant = $branch->restaurant()->first();
        $menu_categories = $restaurant->menu_categories()->get();
        $selected = $menu_category->id;
        $menu_category = [$menu_category];

        return view('customer.menus', compact('restaurant', 'branch', 'menu_categories', 'menu_category', 'selected'));
//        return compact('restaurant', 'branch', 'menu_categories', 'menu_category', 'selected');
    }

    public function postLogin(Request $request)
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

            return redirect('/customer/home');
        }

        return redirect('/customer/login')->with('flash_message_error', 'Invalid Username or Password');
    }

    public function getLogin(Request $request)
    {
        return view('/customer/login');
    }
}
