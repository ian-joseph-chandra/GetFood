<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function page(){
        $restaurant = new Restaurant([
            'email' => 'resto@kfc.com'
        ]);

        $restaurants = (new RestaurantController)->index();

//        return view('restaurant.home');
        return $restaurant;
    }
}
