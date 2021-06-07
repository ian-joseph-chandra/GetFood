<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\BranchController;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

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

//        return view('customer.home', compact('recommendations'));
        return compact('recommendations');
    }

    public function restaurant(Branch $branch)
    {
        $branch = (new BranchController())->show($branch);

        return view('customer.restaurant', compact('branch'));
    }
}
