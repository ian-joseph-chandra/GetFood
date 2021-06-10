@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="card">
                    <h4 class="card-text text-center font-weight-bold mt-3">Edit Menu</h4>

                    <div class="card-body">
                        <form action="{{route('menus.update', $menu)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                           value="{{$menu->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select Category</option>

                                        @foreach($restaurant->menu_categories as $category)
                                            <option
                                                value="{{$category->id}}"
                                                {{$menu->category_id== $category->id ? 'selected' : ''}}>{{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" id="description"
                                           value="{{$menu->description}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="price" id="price"
                                           value="{{$menu->price}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Choose File</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file-center" name="image" id="image"
                                           value="{{$menu->image}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-info mt-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
