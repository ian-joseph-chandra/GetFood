@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <img src="{{ asset('$restaurant->image') }}" class="logo rounded-circle">
                    </div>

                    <div class="col-8">
                        <span class="card-title h5">{{$restaurant->name}}</span>

                        <div class="row mt-2">
                            <div class="input-icons col-1 pr-0">
                                <span class="text-info fa fa-map-marker align-middle" aria-hidden="true"
                                      style="font-size: 20px;"></span>
                            </div>
                            <div class="col-10 float-left pl-0">
                                <select class="form-control col-5" name="branch_id" id="restaurant-branches" required
                                        autofocus>
                                    @foreach($restaurant->branches as $branch)
                                        <option value="{{$branch->id}}">({{$branch->rating_average}}
                                            ★) {{$branch->location}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <button type="button" class="btn btn-info btn-md float-right"
                                onclick="window.location='/restaurant/{{$restaurant->id}}/add-branch'">+ Branch
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <h4>List Order <span class="badge bg-info text-white">1</span></h4>

        @foreach($orders as $order)
        <div class="card mt-1 mb-2">
            <div class="card-header">
                <p class="h5 float-left">Order ID: #{{$order->id}}</p>
                <p class="h5 float-right">{{$order->create_at}}</p>
            </div>

            <div class="card-body">
                <div class="row" style="cursor: pointer" onclick="window.location='/restaurant/orders'">
                    <div class="col-4">
                        <span><img src="{{ asset('images/user.png') }}"></span>
                        <span class="card-text">{{$order->customer->user->name}}</span>
                        <span class="badge badge-success badge-pill">{{$order->rating}}</span>
                    </div>

                    <div class="col-4">
                        <span><img src="{{ asset('images/delivery.png') }}"></span>
                        <span class="card-text">{{$order->driver->user->name}}</span>
                    </div>

                    <div class="col-2">
                        <span class="h6 align-middle">{{$order->order_status->name}}</span>
                    </div>

                    <div class="col-2">
                        <a class="float-right">
                            <i class="fa fa-lg fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
