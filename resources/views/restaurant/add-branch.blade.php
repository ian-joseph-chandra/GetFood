@extends('restaurant.layouts.header-restaurant')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="card">
                    <h4 class="card-text text-center font-weight-bold mt-3">New Branch</h4>

                    <div class="card-body">
                        <form action="{{url('/api/restaurants/'.$restaurant->id.'/branches')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="txtLocation" class="col-md-4 col-form-label text-md-right">Location</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="location" id="txtLocation">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-5">
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
