@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo rounded-circle">
                    </div>

                    <div class="col-8">
                        <span class="card-title h5">{{$restaurant->name}}</span>

                        <div class="input-icons mt-2">
                            <span class="text-info fa fa-map-marker" aria-hidden="true"
                                  style="font-size: 20px;"></span>

                            <span class="mx-0">
                                <select class="form-control col-3" name="branch_id"
                                        id="restaurant-branches" required
                                        autofocus>
                                    @foreach($restaurant->branches as $branch)
                                        <option value="{{$branch->id}}">({{$branch->rating_average}}
                                            ★) {{$branch->location}}
                                        </option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="col-3">
                        <button type="button" class="btn btn-info btn-md float-right"
                                onclick="window.location='/restaurant/add-branch'">+ Branch
                        </button>
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
                        <span class="h6 align-middle">Picked Up</span>
                    </div>

                    <div class="col-2">
                        <a class="float-right">
                            <i class="fa fa-lg fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
