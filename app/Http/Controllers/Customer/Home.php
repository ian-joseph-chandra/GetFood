<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function page(){
        return view('customer.home');
    }
}
