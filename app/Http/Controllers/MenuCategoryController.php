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
    public function index()
    {
        return MenuCategory::all();
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

        return redirect('/restaurant/'.$restaurant->id.'/menus')->with('flash_message_success', 'Successfully created a new menu category!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function show(MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function edit(MenuCategory $menuCategory)
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
    public function update(Request $request, MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MenuCategory $menuCategory
     * @return Response
     */
    public function destroy(MenuCategory $menuCategory)
    {
        //
    }
}
