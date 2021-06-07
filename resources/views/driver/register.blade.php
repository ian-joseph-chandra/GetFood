@extends('driver.layouts.header')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 mt-5 mb-5">
        <div class="card">
            <div class="card-header text-center">
                Register
            </div>

            <div class="card-body">
                <form action="/register" method="post">
                    <div class="form-group row">
                        <label for="txtName" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" id="txtName">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtEmail" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" id="txtEmail">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtPassword" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="txtPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtConfirmPassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="confirmed_password" id="txtConfirmPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtLocation" class="col-md-4 col-form-label text-md-right">Location</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="location" id="txtLocation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtPhone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" id="txtPhone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtChooseFile" class="col-md-4 col-form-label text-md-right">Choose File</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control-file-center" name="image" id="txtChooseFile">
                        </div>

                        
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5">
                            <button class="btn btn-warning mt-3 text-white" type="register">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection