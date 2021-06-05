<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function page()
    {
        $restaurant = Restaurant::with('branches')->find(1);
        $branch_rating = $restaurant->branches[0]->rating_average;
        return view('restaurant.home', compact('restaurant', 'branch_rating'));
    }
}
