@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-2 mt-1">
                        <p class="h5">{{$restaurant->name}}</p>
                    </div>

                    <div class="col-md-3 mt-1">
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

                    <div class="col-7">
                        <button type="button" class="btn btn-info btn-md float-right"
                                onclick="window.location='/restaurant/{{$restaurant->id}}/add-menu'">+ New Menu
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td><img src="{{ asset('images/logo-restaurant.jpg') }}" class="logo"></td>
                            <td>{{$menu->name}}</td>
                            <td>{{$menu->menu_category->name}}</td>
                            <td>{{$menu->description}}</td>
                            <td>{{$menu->price}}</td>
                            <td class="row">
                                <div class="col-4 float-left">
                                    <a href="" class="btn btn-sm btn-primary" onclick="">Edit</a>
                                </div>

                                <div class="col-8">

                                    <a href="" class="btn btn-sm btn-danger" onclick="">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('category_id').addEventListener('change', function () {
            window.location = document.getElementById('category_id').value === '' ?
                '/restaurant/{{$restaurant->id}}/menus' :
                '/restaurant/{{$restaurant->id}}/categories/' + document.getElementById('category_id').value + '/menus';
        })
    </script>
@endsection
