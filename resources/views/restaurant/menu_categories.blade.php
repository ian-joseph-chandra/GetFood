@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <span class="h4 align-middle">List Categories</span>
    <span type="button" class="btn btn-info btn-md float-right" onclick="window.location='/restaurant/{{$restaurant->id}}/add-menu-category'">
        + New Category
    </span>

    <div class="card mt-4">
        <div class="col-md-12 mt-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Snacks</td>
                        <td>A snack is a small portion of food generally eaten between meals.</td>
                        <td class="row">
                            <div class="col-3">
                                <a href="" class="btn btn-sm btn-primary" onclick="">Edit</a>
                            </div>

                            <div class="col-5">
                                <a href="" class="btn btn-sm btn-danger" onclick="">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Snacks</td>
                        <td>A snack is a small portion of food generally eaten between meals.</td>
                        <td class="row">
                            <div class="col-3">
                                <a href="" class="btn btn-sm btn-primary" onclick="">Edit</a>
                            </div>

                            <div class="col-5">

                                <a href="" class="btn btn-sm btn-danger" onclick="">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection