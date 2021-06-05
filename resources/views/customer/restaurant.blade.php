@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <img class="card-img-top" src="{{ asset('images/logo-restaurant.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$branch->restaurant->name}} {{$branch->location}}</h5>
                <span class="badge badge-success badge-pill">{{$branch->rating_average}} ★</span>
                <span>| See Details</span>
                <hr>
                <p class="card-text">Info Jarak & Harga Pengiriman</p>
            </div>
        </div>

        <div class="card mt-3 mb-3">
            <div class="card-header">
                Menus
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo">
                        </div>
                        <div class="ml-3">
                            <p class="card-text">Menu Murah Blablabla</p>
                            <p class="card-text">20000</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo">
                        </div>
                        <div class="ml-3">
                            <p class="card-text">Menu Murah Blablabla</p>
                            <p class="card-text">20000</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
