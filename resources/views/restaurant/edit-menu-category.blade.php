@extends('restaurant.layouts.header-restaurant')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="row no-gutters">
                    <div class="card-body text-center">
                        <h5 class="card-text font-weight-bold">Category</h5>
                        <form action="{{ url('/api/menu_categories/'.$menu_category->id) }}" method="post">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="form-group row">
                                <label for="txtLocation" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="category_name" placeholder="Category Name" value="{{$menu_category->name}}">
                                    @error('$menu_category->name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-info mt-3" type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection