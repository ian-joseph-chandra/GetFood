@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <h4>Detail Order</h4>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <p class="card-text"><strong>Order Number</strong></p>
                    <p class="card-text"><strong>Customer Name</strong></p>
                    <p class="card-text"><strong>Time</strong></p>
                    <p class="card-text"><strong>Status</strong></p>
                </div>
                
                <div class="col-6">
                    <p class="card-text">#1234</p>
                    <p class="card-text">Bambeng</p>
                    <p class="card-text">12:30</p>
                    <p class="card-text">Picked Up</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="card mt-3">
        <div class="card-header">
            <h6>Restoran Mahal</h6>
        </div>
        <div class="col-md-12 mt-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Sub-total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="row">
                            <div class="col-2">
                                <img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo">
                            </div>

                            <div class="col-3">
                                <p><strong>French Fries</strong></p>
                                <p>2 x 25,00</p>
                            </div>

                        </td>
                        <td>50,00</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-7">
            <p class="h4 float-right">Total</p>
        </div>

        <div class="col-2 text-center">
            <p class="float-center ml-1">50,00</p>
        </div>
    </div>

    <form class="col text-center mb-3 mt-5" action="" method="post">
        @csrf
        <button class="btn btn-info mt-3" type="submit">Process Order</button>
    </form>

    <div class="col text-center ">
        <span class="p-2 border border-info bg-white rounded">#61748174</span>
    </div>

    <form class="col text-center mb-3" action="" method="post">
        @csrf
        <button class="btn btn-info mt-3" type="submit">Order Picked Up</button>
    </form>

</div>
@endsection
