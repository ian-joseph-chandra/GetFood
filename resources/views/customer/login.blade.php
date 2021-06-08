@extends('customer.layouts.general')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Login</h5>
        </div>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block" role="alert">
            {!! session('flash_message_error') !!}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('login.post') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputPassword">Email</label>
                    @if(Session::has('email'))
                    <input type="email" class="form-control" name="email" id="txtEmail" value="{{Session::get('email')['email']}}">
                    @else
                    <input type="email" class="form-control" name="email" id="txtEmail">
                    @endisset
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    @if(Session::has('password'))
                    <input type="password" class="form-control" name="password" id="txtPassword" value="{{Session::get('password')['password']}}">
                    @else
                    <input type="password" class="form-control" name="password" id="txtPassword">
                    @endisset
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success w-100 mb-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection