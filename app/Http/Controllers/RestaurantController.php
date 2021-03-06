<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection|Restaurant[]
     */
    public function index()
    {
        return Restaurant::all();
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
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Restaurant $restaurant
     * @return Builder[]|Collection
     */
    public function show(Restaurant $restaurant)
    {
        $restaurant = Restaurant::with('branches.orders')->findOrFail($restaurant->id);
//
//        $image = $restaurant->image;
//        $response = Response::make($image->encode('png'));
//        $response->header('Content-Type', 'image/'.$restaurant->image_type);
//
//        $restaurant->image = $response;
        return $restaurant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Restaurant $restaurant
     * @return Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Restaurant $restaurant
     * @return Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Restaurant $restaurant
     * @return Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }

    public function image(Restaurant $restaurant)
    {
        $image = $restaurant->image;
        return Response::make($image->encode($restaurant->image_type));
    }
}
