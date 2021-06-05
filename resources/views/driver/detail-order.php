<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetFood</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/driver/driver.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <div class="device">
        <div class="bg-warning mb-3">
            <nav class="navbar navbar-expand-lg navbar-light" style="justify-content: center">
                <a class="navbar-brand h1 text-white text-center" href="#">Detail Order</a>
            </nav>
        </div>

        <div class="container-fluid">
            <span class="p-2 mb-2 border-warning border bg-light text-dark rounded text-center h6">#12345</span>
            <span class="h5 float-right">Order Time: 12.30</span>


            <div class="card cardNewOrder shadow-sm mb-3 mt-3">
                <div class="card-body">
                    <p class="h5">Restaurant</p>
                    <hr>
                    <p class="card-text"><strong>Restoran Mahal</strong></p>

                    <div class="input-icons mt-2">
                        <span class="text-warning fa fa-map-marker" aria-hidden="true" style="font-size: 1.5rem;"></span>
                        <span p class="card-text">Wonderland</span>
                    </div>

                    <p class="h5 mt-5">Customer</p>
                    <hr>
                    <p class="card-text"><strong>Bambeng</strong></p>

                    <div class="input-icons mt-2">
                        <span class="text-warning fa fa-map-marker" aria-hidden="true" style="font-size: 1.5rem;"></span>
                        <span p class="card-text">Glodok</span>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="col-md-12 mt-3">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="row">
                                    <div class="col-2">
                                        <img src="{{ URL::asset('images/logo-restaurant.jpg') }}" class="logo">
                                    </div>

                                    <div class="col-10">
                                        <p><strong>French Fries</strong></p>
                                        <p>2 x 25,00</p>
                                    </div>

                                </td>
                                <td>50,00</td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-7">
                    <p class="h4 float-right">Total</p>
                </div>

                <div class="col-4 ml-2">
                    <p class="float-center ml-4">50,00</p>
                </div>
            </div>

            <div class="text-center mt-4 mb-3 ">
                <span class="p-2 border border-warning bg-white rounded">#61748174</span>
            </div>
        </div>
    </div>
</body>

</html>