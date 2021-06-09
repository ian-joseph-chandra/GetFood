<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
     * @param Customer $customer
     * @param Cart $cart
     * @return Application|Factory|View
     */
    public function store(Customer $customer, Cart $cart)
    {
        $cart = $cart->with('cart_details')->where('id', $cart->id)->first();

        // Count for order total price
        $order_price = 0;
        foreach ($cart->cart_details as $item) {
            $order_price += $item->menu->price * $item->quantity;
        }

        // Create the order from cart
        $order = new Order([
            'branch_id' => $cart->branch_id,
            'order_status-id' => 1,
            'customer_id' => $customer->id,
            'order_price' => $order_price,
            'delivery_price' => 40
        ]);
        $order->save();

        // Create the order items from cart items
        foreach ($cart->cart_details as $cart_detail) {
            $order_detail = new OrderDetail([
                'menu_id' => $cart_detail->menu_id,
                'order_id' => $order->id,
                'quantity' => $cart_detail->quantity
            ]);

            $order_detail->save();

            // Delete the cart after order created
            $cart_detail->forceDelete();
        }

        // Delete cart items after order items created
        $cart->forceDelete();

        return view('customer.order-status', compact('cart', /*'cart_details',*/ 'order_price', 'order'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
