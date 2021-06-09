@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <img class="card-img-top" src="{{ asset($menu->image == null ?
                                                    'images/logo-restaurant.jpg' : $menu->image)  }}"
                 alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$menu->name}}</h5>
                <p class="card-text">{{$menu->description}}</p>
                <hr>

                <div class="mb-3">
                    <label for="textAreaNotes" class="form-label">Notes</label>
                    <textarea disabled class="form-control" id="textAreaNotes" rows="2"
                              placeholder="optional notes"></textarea>
                </div>

                <form action="{{ route('carts.menus.cart_details.store', [$cart, $menu]) }}" method="POST">
                    @csrf
                    <label for="quantity">Quantity</label>
                    <br>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="1">
                    <br>
                    <button class="btn btn-success mt-3" type="submit">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
