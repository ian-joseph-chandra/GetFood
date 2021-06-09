<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Menu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Cart $cart, Menu $menu)
    {
        return view('customer.add-cart', compact('cart', 'menu'));
//        return compact('cart', 'menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Cart $cart, Menu $menu, Request $request)
    {
//        $cart_detail = new CartDetail([
//            'cart_id' => $cart->id,
//            'menu_id' => $menu->id,
//            'quantity' => $request->quantity
//        ]);
//        $cart_detail->save();

        return redirect('/customer/branches/'.$cart->branch_id.'/menus');
//        return compact('menu', 'cart', 'branch', 'request');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return Response
     */
    public function show(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return Response
     */
    public function edit(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartDetail  $cartDetail
     * @return Response
     */
    public function update(Request $request, CartDetail $cartDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return Response
     */
    public function destroy(CartDetail $cartDetail)
    {
        //
    }
}
