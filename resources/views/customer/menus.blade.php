@extends('customer.layouts.general')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <img class="card-img-top" src="{{ asset( $restaurant->image == null ?
                                                    'images/logo-restaurant.jpg' : $restaurant->image)  }}"
                 alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$restaurant->name}} {{$branch->location}}</h5>
                <span class="badge badge-success badge-pill">{{$branch->rating_average}} ★</span>
                <span>| See Details</span>
                <hr>
                <p class="card-text">Info Jarak & Harga Pengiriman</p>
            </div>
        </div>

        <div class="col-md-3 mt-3 pl-0">
            <select placeholder="Select Category" class="form-control" name="category_id"
                    id="category_id">
                @if($selected == null)
                    <option value="" selected>All menus</option>
                @else
                    <option value="">All menus</option>
                @endif

                @foreach($menu_categories as $category)
                    @if($selected == $category->id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        @foreach($selected == null ? $menu_categories : $menu_category as $category)
        <div class="card mt-3 mb-3">
            <div class="card-header">{{$category->name}}</div>

            <ul class="list-group list-group-flush">
                @foreach($category->menus as $menu)
                    <li class="list-group-item" onclick="window.location='/customer/menus/{{$menu->id}}/add-cart'">
                        <div class="row">
                            <div class="ml-3">
                                <img src="{{ asset($menu->image == null ?
                                                    'images/logo-restaurant.jpg' : $menu->image) }}" class="logo">
                            </div>

                            <div class="ml-3">
                                <p class="card-text">{{$menu->name}}</p>
                                <p class="card-text">{{$menu->price}}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>

    <script>
        document.getElementById('category_id').addEventListener('change', function () {
            window.location = document.getElementById('category_id').value === '' ?
                '/customer/branches/{{$branch->id}}/menus' :
                '/customer/branches/{{$branch->id}}/categories/' + document.getElementById('category_id').value + '/menus';
        })
    </script>
@endsection
