@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <p class="card-text">Your order has arrived.</p>
                <p class="card-text">Please tell us about your experience! </p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Your Driver
            </div>
            <div class="card-body text-center">
                <img src="{{ URL::asset('images/profile.png') }}"> 
                <h5 class="card-title mt-3">Robin Daniel</h5>
                <h2>★★★★★</h2>
                <hr>
                <div class="mb-3">
                    <label for="textAreaNotes" class="form-label">Additional notes</label>
                    <textarea class="form-control" id="textAreaNotes" rows="2" ></textarea>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Your Restaurant
            </div>
            <div class="card-body text-center">
                <h5 class="card-title mt-3">Restoran Mahal</h5>
                <h2>★★★★★</h2>
                <hr>
                <div class="mb-3">
                    <label for="textAreaNotes" class="form-label">Additional notes</label>
                    <textarea class="form-control" id="textAreaNotes" rows="2" ></textarea>
                </div>
            </div>
        </div>

        <form action="" method="post">
            @csrf
            <button class="btn btn-success mt-3 w-100 mb-3" type="submit">Submit</button>
        </form> 
    </div>    
@endsection