<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetFood</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/restaurant/restaurant.css') }}">
</head>

<body>
    <div class="device">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info mb-3">
            <a class="navbar-brand mb-0 h1" href="{{ url('/restaurant/home') }}">Get Food</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{url('/restaurant/menu')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/restaurant/history')}}">History</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>
