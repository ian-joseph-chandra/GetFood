@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="What are you craving?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="card mt-3">
            <div class="card-header">Recommended For You</div>

            <ul class="list-group list-group-flush">
                @foreach($recommendations[0] as $branch)
                    <li class="list-group-item" style="cursor: pointer"
                        onclick="window.location='/customer/restaurants/{{$branch->id}}'">
                        <div class="row">
                            <div class="ml-3">
                                <img
                                    src="{{ asset( $branch->restaurant->image == null ?
                                                    'images/logo-restaurant.jpg' : $branch->restaurant->image) }}"
                                    class="logo">
                            </div>

                            <div class="ml-3">
                                <h6>{{$branch->restaurant->name}} {{$branch->location}}</h6>
                                <span class="badge badge-success badge-pill">{{$branch->rating_average}} ★</span>
                            </div>
                        </div>
                    </li>
                @endforeach()
            </ul>
        </div>

        <div class="card mt-3 mb-3">
            <div class="card-header">More Restaurants</div>

            <ul class="list-group list-group-flush">
                @foreach($recommendations[1] as $branch)
                    <li class="list-group-item" style="cursor: pointer"
                        onclick="window.location = '/customer/restaurants/{{$branch->id}}'">
                        <div class="row">
                            <div class="ml-3">
                                <img
                                    src="{{ asset($branch->restaurant->image == null ?
                                                    'images/logo-restaurant.jpg' : $branch->restaurant->image) }}"
                                    class="logo">
                            </div>

                            <div class="ml-3">
                                <h6>{{$branch->restaurant->name}} {{$branch->location}}</h6>
                                <span class="badge badge-success badge-pill">{{$branch->rating_average}} ★</span>
                            </div>
                        </div>
                    </li>
                @endforeach()
            </ul>
        </div>
    </div>
@endsection
