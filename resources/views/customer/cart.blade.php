@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <h6>Restoran Mahal</h6> 
            </div>
            <div class="card-body">
                <p class="card-text">Deliver To</p>
                <div class="card">
                    <div class="card-body">
                        <p>Home</p>
                        <span>Kebon Jeruk Street No.12, Jakarta</span>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Order Summary
                <a href=""  class="float-right small"> add items</a>
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
                <hr>
                <div class="row">
                    <div class="col-8">
                        <span class="card-text">Subtotal</span>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-right">40000</span>  
                    </div>
                </div>  
                <div class="row">
                    <div class="col-8">
                        <span class="card-text">Delivery Fee</span>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-right">5000</span>  
                    </div>
                </div> 
                <br>
                <div class="row">
                    <div class="col-8">
                        <h6 class="card-text">Total</h6>
                    </div>
                    <div class="col-4">
                        <span class="card-text float-right">45000</span>  
                    </div>
                </div> 
            </div>            
        </div>

        <form action="" method="post">
            @csrf
            <button class="btn btn-success mt-3 w-100 mb-3" type="submit">Place Order</button>
        </form> 
    </div>
@endsection