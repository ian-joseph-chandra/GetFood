<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Restaurant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection|MenuCategory[]
     */
    public function index(Restaurant $restaurant)
    {
        // return MenuCategory::all()->where('restaurant_id', $restaurant->id);

        $menu_categories = MenuCategory::all();
        return view('restaurant.menu_categories')->with('menu_categories', $menu_categories);
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
        $menu_category = new MenuCategory([
            'restaurant_id' => $restaurant->id,
            'name' => $request->name
        ]);
        $menu_category->save();

        return redirect('/restaurant/' . $restaurant->id . '/menus')->with('flash_message_success', 'Successfully created a new menu category!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function show(MenuCategory $menuCategory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MenuCategory $menuCategory
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
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function update(Request $request, MenuCategory $menu_category)
    {
        $menu_category->name = $request->name;
        $menu_category->save();
        $restaurant = $menu_category->restaurant()->first();
        $menu_categories = $restaurant->menu_categories()->get();

        return view('restaurant.menu_categories', compact('restaurant', 'menu_categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function destroy(MenuCategory $menu_categories)
    {
        foreach($menu_categories->menus()->get() as $menu){
            $menu->forcedelete();
        }

        $menu_categories->forceDelete();
        return back();
    }
}
