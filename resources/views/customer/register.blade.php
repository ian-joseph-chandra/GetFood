@extends('customer.layouts.general')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Register</h5> 
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp">                  
                </div>
                <div class="form-group">
                    <label for="textAreaAddress" class="form-label">Address</label>
                    <textarea class="form-control" id="textAreaAddress" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Agree to terms and conditions </label>
                </div>                
            </form>
            <button type="submit" class="btn btn-success w-100 mb-3">Submit</button>
        </div>
    </div>
</div>
@endsection