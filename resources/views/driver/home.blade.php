<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetFood</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/driver/driver.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <div class="device">
        <div class="bg-warning mb-3">
            <nav class="navbar navbar-expand-lg navbar-light" style="justify-content: center">
                <a class="navbar-brand h1 text-white text-center" href="#">Home</a>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('images/profile.png') }}">
                        </div>
                        <div class="col-9">
                            <span class="card-text">Robin Daniel</span>
                            <span class="badge badge-success badge-pill">5 ★</span>
                            <p class="card-text mt-2">Honda Beat • B 3838 CIT</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row mt-3"> -->
            <!-- <div class="col-5"> -->
            <h5 class="mt-4">New Order</h5>
            <!-- </div> -->
            <!-- <div class="col-7">
                    <button type="button" class="btn btn-warning btn-md float-right text-white">History</button>
                </div> -->
            <!-- </div> -->
            <div class="card mt-3 mb-3 py-3">
                @if (!$orders->isEmpty())
                    @foreach ($orders as $order)
                    <div class="card cardNewOrder shadow-sm mb-3 w-75 mt-3">
                        <div class="card-body">
                            <div class="col-6 p-2 mb-2 border-warning border bg-light text-dark rounded text-center h6">#12345</div>
                            <p class="h5 mt-3">Restaurant</p>
                            <hr>
                            <p class="card-text"><strong>{{$order->branch->restaurant->name}}</strong></p>

                            <div class="input-icons mt-2">
                                <span class="text-warning fa fa-map-marker" aria-hidden="true" style="font-size: 1.5rem;"></span>
                                <span p class="card-text">{{$order->branch->location}}</span>
                            </div>

                            <p class="h5 mt-5">Customer</p>
                            <hr>
                            <p class="card-text"><strong>{{$order->customer->user->name}}</strong></p>

                            <div class="input-icons mt-2">
                                <span class="text-warning fa fa-map-marker" aria-hidden="true" style="font-size: 1.5rem;"></span>
                                <span p class="card-text">{{$order->customer->address}}</span>
                            </div>

                            <div class="mt-4 text-center">
                                <button type="button" class="btn btn-warning mr-2">Accept</button>
                                <button type="button" class="btn btn-danger ml-2">Reject</button>
                            </div>
                        </div>
                    </div>
                    @endforeach                                    
                @else
                    <div class="card-body">
                        <h5 class="text-center">Waiting for Order...</h5>
                    </div>                    
                @endif            
                
            </div>
        </div>
</body>

</html>