@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <span class="h4 align-middle">List Categories</span>
        <a type="button" class="btn btn-info btn-md float-right"
           href="{{ route('restaurants.menu_categories.create', 1) }}">+ New Category</a>

        <div class="card mt-4">
            <div class="col-md-12 mt-3">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($restaurant->menu_categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td class="row">
                                <div class="col-3">
                                    <a href="{{ route('restaurant.menu_categories.edit', [$restaurant->id, $category->id] )}}"
                                       class="btn btn-sm btn-primary">Edit</a></div>

                                <div class="col-5">
                                    <form method="POST" action="{{ url('/api/menu_categories/'.$category->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Delete this category along with all the menus?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
