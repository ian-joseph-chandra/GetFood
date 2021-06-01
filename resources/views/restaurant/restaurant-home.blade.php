@extends('restaurant.layouts.headerRestaurant')

@section('content')
<div class="container-fluid">
    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
                <div class="col-1">
                    <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo rounded-circle">
                </div>

                <div class="col-8">
                    <span class="card-title h5">Restoran Mahal</span>
                    <span class="badge badge-success badge-pill">5 ★</span>

                    <div class="input-icons mt-2">
                        <span i class="text-info fa fa-map-marker" aria-hidden="true" style="font-size: 20px;"></i></span>
                        <span div class="btn-group ml-2">
                            <button type="button" class="btn btn-sm border border-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="col-3">
                    <button type="button" class="btn btn-info btn-md float-right">+ Branch</button>
                </div>
            </div>
        </div>
    </div>

    <h4>List Order <span class="badge bg-info text-white">1</span></h4>

    <div class="card mt-1">
        <div class="card-header">
            <p class="h5 float-left">#12345</p>
            <p class="h5 float-right">12:30</p>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <span><img src="{{ URL::asset('images/user.png') }}"></span>
                    <span class="card-text">Bambeng</span>
                    <span class="badge badge-success badge-pill">5 ★</span>

                </div>
                <div class="col-4">
                    <span><img src="{{ URL::asset('images/delivery.png') }}"></span>
                    <span class="card-text">Twinkie</span>
                </div>
                <div class="col-2">
                    <span class="h6 align-middle">Picked Up</span>
                </div>
                <div class="col-2">
                    <a class="btn float-right">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection