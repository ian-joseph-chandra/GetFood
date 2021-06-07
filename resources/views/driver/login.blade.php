@extends('driver.layouts.header')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-5">
            <div class="card">
                <div class="card-header text-center">
                    Login
                </div>

                <div class="card-body">
                    <form action="{{url('/driver/login')}}" method="post">
                        {{ csrf_field() }}

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="ckRememberMe" name="remember">
                                    <label class="form-check-label" for="ckRememberMe">Remember Me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-5">
                                <button class="btn btn-warning mt-3 text-white" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
