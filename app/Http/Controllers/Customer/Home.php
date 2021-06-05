<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\BranchController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use App\Models\Branch;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function page(){
        $branches = (new BranchController)->order_by_rating();

        $top_recommendations = [];
        $more_recommendations = [];

        for($i = 0; $i<4; $i++)
            array_push($top_recommendations, $branches[$i]);

        for($i = 4; $i<8; $i++)
            array_push($more_recommendations, $branches[$i]);

        return view('customer.home', compact('top_recommendations', 'more_recommendations'));
    }
}
