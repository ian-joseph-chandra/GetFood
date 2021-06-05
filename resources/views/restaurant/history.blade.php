@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <h4>History Order</h4>

    <div class="card mt-1">
        <div class="card-header">
            <p class="h5 float-left">#12345</p>
            <p class="h5 float-right">12:30</p>
        </div>

        <div class="card-body">
            <div class="row" style="cursor: pointer" onclick="window.location='/restaurant/orders'">
                <div class="col-4">
                    <span><img src="{{ asset('images/user.png') }}"></span>
                    <span class="card-text">Bambeng</span>
                    <span class="badge badge-success badge-pill">5 ★</span>
                </div>

                <div class="col-4">
                    <span><img src="{{ asset('images/delivery.png') }}"></span>
                    <span class="card-text">Twinkie</span>
                </div>

                <div class="col-2">
                    <span class="h6 align-middle">Finish</span>
                </div>

                <div class="col-2">
                    <a class="float-right">
                        <i class="fa fa-lg fa-chevron-right text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
