@extends('customer.layouts.general')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/customer/home.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <form class="d-flex mt-3">
            <input class="form-control me-2" type="search" placeholder="What are you craving?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <div class="card mt-3">
            <div class="card-header">
                Recommended For You
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Mahal
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Mahal
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Mahal
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
            </ul>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                More Restaurants
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Murah
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Murah
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
                <li class="list-group-item">
                  <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                  Restoran Murah
                  <span class="badge badge-success badge-pill">5 ★</span>
                </li>
            </ul>
        </div>
        
    </div>
@endsection