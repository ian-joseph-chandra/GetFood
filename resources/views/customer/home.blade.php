@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="What are you craving?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <div class="card mt-3">
            <div class="card-header">
                Recommended For You
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Mahal</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Mahal</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Mahal</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
            </ul>
        </div>

        <div class="card mt-3 mb-3">
            <div class="card-header">
                More Restaurants
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Murah</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Murah</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
                <li class="list-group-item">                  
                    <div class="row">
                        <div class="ml-3">
                            <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"> 
                        </div>
                        <div class="ml-3">
                            <h6>Restoran Murah</h6> 
                            <span class="badge badge-success badge-pill">5 ★</span>
                        </div>
                    </div>  
                </li>
            </ul>
        </div>
        
    </div>
@endsection