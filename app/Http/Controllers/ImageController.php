<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image = Image::make($request->image);
        Response::make($image->encode($request->image_type));

        return $image;
    }

    public function show(Request $request)
    {
        $image = Image::make($request->image);
        $response = Response::make($image->encode($request->image_type));
        $response->header('Content-Type', 'image/'.$request->image_type);

        return $response;
    }

}
