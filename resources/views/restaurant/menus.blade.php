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
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="" {{ ($selected == null) ? 'selected' : '' }}>All menus</option>

                            @foreach($restaurant->menu_categories as $category)
                                <option value="{{$category->id}}" {{ ($selected == $category->id) ? 'selected' : ''}}>
                                    {{$category->name}}
                                </option>
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

                    @foreach( ($selected == null) ? $restaurant->menu_categories :
                        $restaurant->menu_categories()->with('menus')->where('id', $selected)->get() as $category)
                        @foreach($category->menus as $menu)
                            <tr>
                                <td><img src="{{ asset( $menu->image == null ?
                                                    'images/logo-restaurant.jpg' : $menu->image) }}" class="logo" alt="{{$menu->image}}"></td>
                                <td>{{$menu->name}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$menu->description}}</td>
                                <td>{{$menu->price}}</td>
                                <td class="row">
                                    <div class="col-4 float-left">
                                        <a href="{{route('restaurant.menus.edit', [$restaurant, $menu])}}"
                                           class="btn btn-sm btn-primary">Edit</a>
                                    </div>

                                    <div class="col-8">
                                        <form method="POST" action="{{route('menus.destroy', $menu)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
                '/restaurant/{{$restaurant->id}}/menu_categories/' + document.getElementById('category_id').value + '/menus';
        })
    </script>
@endsection
