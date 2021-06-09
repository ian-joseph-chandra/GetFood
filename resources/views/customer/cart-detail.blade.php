@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <h6>Restoran Mahal</h6>
            </div>
            <div class="card-body">
                <p class="card-text">Deliver To</p>
                <div class="card">
                    <div class="card-body">
                        <p>Home</p>
                        <span>{{$customer->address}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Order Summary
                <a href="" class="float-right small"> add items</a>
            </div>
            <div class="card-body">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-8">
                                <span class="card-text"><b>Items</b></span>
                            </div>
                            <div class="col-4">
                                <span class="card-text"><b>SubTotal</b></span>
                            </div>
                        </div>
                    </li>
                    @foreach($cart->cart_details as $item)
                        <li class="list-group-item" onclick="window.location='#'">
                            <div class="row">
                                <div class="col-8">
                                    <span class="card-text"><u>{{$item->menu->name}}</u></span>
                                    <br>
                                    <span class="card-text">NT$ {{$item->menu->price}} x
                                        <b>{{$item->quantity}}</b></span>
                                </div>
                                <div class="col-4">
                                    <span class="card-text">NT$ {{$item->quantity * $item->menu->price}}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <hr>
                <div class="row">
                    <div class="col-8">
                        <span class="card-text">Subtotal</span>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-left">NT$ {{$sub_total}}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <span class="card-text">Delivery Fee</span>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-left"> NT$ 40</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-8">
                        <h6 class="card-text">Total</h6>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-left"><h6>NT$ {{$sub_total + 40}}</h6></span>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('customers.carts.orders.store', [1, $cart]) }}" method="post">
            @csrf
            <button class="btn btn-success mt-3 w-100 mb-3" type="submit">Place Order</button>
        </form>
    </div>
@endsection
