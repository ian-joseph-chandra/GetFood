@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="card">
                    <h4 class="card-text text-center font-weight-bold mt-3">New Menu</h4>

                    <div class="card-body">
                        <form action="{{url('/api/restaurants/'.$restaurant->id.'/menus')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="txtName" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="txtName">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                                <div class="col-md-6">
                                    <select placeholder="Select Category" class="form-control" name="category_id"
                                            id="categorySelection">
                                        <option value="">Select Category</option>

                                        @foreach($menu_categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="txtDescription"
                                       class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" id="txtDescription">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="txtPrice" class="col-md-4 col-form-label text-md-right">Price</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="price" id="txtPrice">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="txtChooseFile" class="col-md-4 col-form-label text-md-right">Choose
                                    File</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control-file-center" name="image" id="txtChooseFile">
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
