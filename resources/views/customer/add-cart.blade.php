@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <img class="card-img-top" src="{{ asset('images/logo-restaurant.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Menu Murah Blablabla</h5>
                <p class="card-text">Deskripsi Menu</p>
                <hr>
                <div class="mb-3">
                    <label for="textAreaNotes" class="form-label">Notes</label>
                    <textarea class="form-control" id="textAreaNotes" rows="2" placeholder="optional notes"></textarea>
                </div>

                <form action="" method="post">
                    @csrf
                    <label for="txtQuantity">Quantity</label>
                    <br>
                    <input type="number" name="quantity" id="txtQuantity" class="form-control" value="1" >
                    <br>
                    <button class="btn btn-success mt-3" type="submit">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
