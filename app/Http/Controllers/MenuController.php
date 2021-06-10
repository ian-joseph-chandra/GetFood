<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Restaurant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Restaurant $restaurant)
    {
        $restaurant = $restaurant->with('menu_categories.menus')->where('id', $restaurant->id)->first();
        $selected = null;

        return compact('restaurant', 'selected');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $image = $request->file('image');
        $filename = now()->timestamp . now()->microsecond . '.' . $image->getClientOriginalExtension();
        $menu_path = 'images/restaurants/' . $restaurant->id . '/menus/';
        $image->move(base_path('public/' . $menu_path), $filename);
        $image_path = $menu_path . $filename;

        $menu = new Menu([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image_path
        ]);
        $menu->save();

        return redirect('/restaurant/' . $restaurant->id . '/menus')
            ->with('flash_message_success', 'Successfully created a new Menu!');
    }

    /**
     * Display the specified resource.
     *
     * @param Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Restaurant $restaurant
     * @param Menu $menu
     * @return Application|Factory|View
     */
    public function edit(Restaurant $restaurant, Menu $menu)
    {
        $restaurant = $restaurant->with('menu_categories')->where('id', $restaurant->id)->first();

        return view('restaurant.edit-menu', compact('restaurant', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Menu $menu
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, Menu $menu)
    {
        $restaurant = $menu->menu_category()->first()->restaurant()->first();

        $image = $request->file('image');
        $filename = now()->timestamp . now()->microsecond . '.' . $image->getClientOriginalExtension();
        $menu_path = 'images/restaurants/' . $restaurant->id . '/menus/';
        $image->move(base_path('public/' . $menu_path), $filename);
        $image_path = $menu_path . $filename;

        $menu->category_id = $request->category_id;
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->image = $image_path;
        $menu->save();

        return redirect(route('restaurant.menus.index', $restaurant));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     * @return RedirectResponse
     */
    public function destroy(Menu $menu)
    {
        $menu->forceDelete();

        return back();
    }

    /**
     * @param Restaurant $restaurant
     * @param MenuCategory $menu_category
     * @return array
     */
    public function partial(Restaurant $restaurant, MenuCategory $menu_category): array
    {
        $restaurant = $restaurant->with('menu_categories')->where('id', $restaurant->id)->first();
        $selected = $menu_category->id;

        return compact('restaurant', 'selected');
    }

    public function restaurant_index(Restaurant $restaurant)
    {
        return view('restaurant.menus', $this->index($restaurant));
    }

    public function restaurant_partial(Restaurant $restaurant, MenuCategory $menu_category)
    {
        return view('restaurant.menus', $this->partial($restaurant, $menu_category));
    }

    public function customer_index(Restaurant $restaurant)
    {
        return view('customer.menus', $this->index($restaurant));
    }

    public function customer_partial(Restaurant $restaurant, MenuCategory $menu_category)
    {
        return view('customer.menus', $this->partial($restaurant, $menu_category));
    }

}
