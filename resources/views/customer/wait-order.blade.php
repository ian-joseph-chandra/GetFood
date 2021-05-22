@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Order Status
            </div>
            <div class="card-body">
                <p class="card-text">We've found you a driver</p>
                <p class="card-text">Your order will arrive in 18-25 minutes</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Driver Info
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ URL::asset('images/profile.png') }}"> 
                    </div>
                    <div class="col-9">
                        <span class="card-text">Robin Daniel</span>
                        <span class="badge badge-success badge-pill">5 ★</span>
                        <p class="card-text mt-2">Honda Beat • B 3838 CIT</p>
                    </div>
                </div> 
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Your Order
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">                  
                        <div class="row">
                            <div class="col-2">
                                <span class="card-text">1x</span>
                            </div>
                            <div class="col-7">
                                <span class="card-text">Menu Murah Blablabla</span>  
                            </div>
                            <div class="col-3">
                                <span class="card-text">20000</span>
                            </div>
                        </div>  
                    </li>
                    <li class="list-group-item">                  
                        <div class="row">
                            <div class="col-2">
                                <span class="card-text">1x</span>
                            </div>
                            <div class="col-7">
                                <span class="card-text">Menu Murah Dadada</span>  
                            </div>
                            <div class="col-3">
                                <span class="card-text">20000</span>
                            </div>
                        </div>  
                    </li>
                </ul>                
            </div>            
        </div>

        <form action="" method="post">
            @csrf
            <button class="btn btn-success mt-3 w-100 mb-3" type="submit">Receive Order</button>
        </form> 
    </div>
@endsection