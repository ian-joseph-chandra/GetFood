<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Restaurant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Branch[]|Collection
     */
    public function index()
    {
        return Branch::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $branch = new Branch([
            'restaurant_id' => $restaurant->id,
            'location' => $request->location
        ]);
        $branch->save();

        return redirect(route('restaurant.home', 1))->with('flash_message_success', 'Successfully created a new branch!');
    }

    /**
     * Display the specified resource.
     *
     * @param Branch $branch
     * @return Builder|Builder[]|Collection|Model
     */
    public function show(Branch $branch)
    {
        return Branch::with('restaurant')->findOrFail($branch->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Branch $branch
     * @return Response
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Branch $branch
     * @return Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Branch $branch
     * @return Response
     */
    public function destroy(Branch $branch)
    {
        //
    }

    //------------------------------------------------------------------------------------------------------------------
    // SPECIAL QUERIES
    //------------------------------------------------------------------------------------------------------------------

    /*
     * Get the top 8 restaurant branches from storage.
     */
    public function order_by_rating()
    {
        return Branch::with('restaurant')->orderBy('rating_average', 'desc')->take(8)->get();;
    }
}
