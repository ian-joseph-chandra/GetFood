<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetFood</title>
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css') }}"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customer/general.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    @yield('head')
</head>
<body>
<div class="device">
    <nav class="navbar navbar-light bg-light mb-5 fixed-top">
{{--        <a class="arrow left" href="#"></a>--}}
        <a class="navbar-brand" href="{{route('customer.home')}}">Get Food</a>

        <a class="fa fa-shopping-basket" role="button" style="font-size: 20px; color:inherit" aria-hidden="true"
           href="{{ route('carts.cart_details.index', 1) }}"></a>
    </nav>
    @yield('content')
</div>
</body>
</html>
