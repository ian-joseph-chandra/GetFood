@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-body text-center">
                        <h5 class="card-text font-weight-bold">Name</h5>
                        <form action="{{url('/restaurant/add-category')}}" method="post">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name">
                            <br>
                            <button class="btn btn-info mt-3" type="submit">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection