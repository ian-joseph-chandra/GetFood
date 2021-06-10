<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Restaurant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use phpDocumentor\Reflection\Types\Compound;

class MenuCategoryController extends Controller
{
    /**
     * @param Restaurant $restaurant
     * @return Application|Factory|View
     */
    public function index(Restaurant $restaurant)
    {
        $restaurant = $restaurant->with('menu_categories')->where('id', $restaurant->id)->first();

        return view('restaurant.menu_categories', compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Restaurant $restaurant)
    {
        return view('restaurant.add-menu-category', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $menu_category = new MenuCategory([
            'restaurant_id' => $restaurant->id,
            'name' => $request->name
        ]);
        $menu_category->save();

        return redirect(route('restaurants.menu_categories.index', 1))->with('flash_message_success', 'Successfully created a new menu category!');
    }

    /**
     * Display the specified resource.
     *
     * @param MenuCategory $menuCategory
     * @return Response
     */
    public function show(MenuCategory $menuCategory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MenuCategory $menuCategory
     * @return Response
     */
    public function edit(MenuCategory $menu_category)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param MenuCategory $menu_category
     * @return Application|Factory|View
     */
    public function update(Request $request, MenuCategory $menu_category)
    {
        $menu_category->name = $request->name;
        $menu_category->save();

        $restaurant = $menu_category->restaurant()->first();

        return redirect(route('restaurants.menu_categories.index', $restaurant));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MenuCategory $menu_categories
     * @return Application|Factory|View
     */
    public function destroy(MenuCategory $menu_categories)
    {
        $restaurant = $menu_categories->restaurant()->first();

        foreach($menu_categories->menus()->get() as $menu){
            $menu->forcedelete();
        }
        $menu_categories->forceDelete();

        return redirect(route('restaurants.menu_categories.index', $restaurant));
    }
}
