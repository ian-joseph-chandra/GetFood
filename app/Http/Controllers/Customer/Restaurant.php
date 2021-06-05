<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\BranchController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RestaurantController;
use App\Models\Branch;
use Illuminate\Http\Request;

class Restaurant extends Controller
{
    public function page(Branch $branch)
    {
        $branch = (new BranchController())->show($branch);

        return view('customer.restaurant', compact('branch'));
    }
}
