@extends('backend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productid">Product Id:</label>
          <input type="text" class="form-control" name="productid" value="{{$data['p_id'] ?? null}}">
        </div><br>
        <div class="form-group">
          <label for="productname">Product Name:</label>
          <input type="text" class="form-control" name="productname" value="{{$data['p_name'] ?? null}}" >
        </div><br>
        <div class="form-group">
            <label for="producttype">Product Brand:</label>
            <input type="text" class="form-control" name="productbrand" value="{{$data['p_brand'] ?? null}}" >
          </div><br>
          <div class="form-group">
            <label for="image">Product Image:</label>
            <input type="file" class="form-control" name="image" value="{{$data['image'] ?? null}}">
          </div><br>
          <div class="form-group">
            <label for="description">Product Description:</label>
            <textarea class="form-control" name="description">{{$data['description'] ?? null}}</textarea>
          </div><br>
          <div class="form-group">
            <label for="price">Product price:</label>
            <input type="number" class="form-control" name="price" value="{{$data['price'] ?? null}}">
          </div><br>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</body>
</html>

@endsection




