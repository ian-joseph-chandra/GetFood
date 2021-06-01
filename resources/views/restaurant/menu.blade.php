@extends('restaurant.layouts.headerRestaurant')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <p class="card-text"><strong>Menu Type</strong></p>
                </div>
                <div class="col-6">
                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-sm border border-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Snacks
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-3">
        <div class="card-header">
            <span class="h5 align-middle">Restoran Mahal</span>
            <span button type="button" class="btn btn-info btn-md float-right">+ New Menu</button></span>
        </div>
        <div class="col-md-12 mt-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>French Fries</td>
                        <td><img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"></td>
                        <td>French fries are batonnet or allumette-cut deep-fried potatoes</td>
                        <td>25,00</td>
                    </tr>
                    <tr>
                        <td>Taco</td>
                        <td><img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo"></td>
                        <td>A taco is a traditional Mexican dish consisting of a small hand-sized corn or wheat tortilla topped with a filling. The tortilla is then folded around the filling and eaten by hand.</td>
                        <td>30,00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    </div>

    @endsection