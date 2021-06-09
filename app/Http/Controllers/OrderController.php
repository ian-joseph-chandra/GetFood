<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('branch.restaurant')->with('customer.user')->get();

        return view('driver.home', compact('orders'));
        //return compact('orders');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customer $customer, Cart $cart)
    {
        $cart_details = $cart->cart_details()->get();
        $order_price = 0;

        foreach ($cart_details as $item) {
            $order_price += $item->menu->price * $item->quantity;
        }

        $order = new Order([
            'branch_id' => $cart->branch_id,
            'order_status-id' => 1,
            'customer_id' => $customer->id,
            'order_price' => $order_price,
            'delivery_price' => 40
        ]);

        return compact('cart', 'cart_details', 'order_price', 'order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
