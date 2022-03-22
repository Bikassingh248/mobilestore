@extends('backend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1  style="color: red">Add Product !!!</h1>
                            </div>
    <form action="{{route('product.save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productid">Product Id:</label>
          <input type="text" class="form-control" name="productid" value="{{old('productid')}}" placeholder="product id">
        </div>
        <p style="color: red">@error('productid'){{$message}}@enderror</p>
        <div class="form-group">
          <label for="productname">Product Name:</label>
          <input type="text" class="form-control" name="productname" value="{{old('productname')}}" placeholder="productname">
        </div>
        <p style="color: red">@error('productname'){{$message}}@enderror</p>
        <div class="form-group">
            <label for="producttype">Product Brand:</label>
            <input type="text" class="form-control" name="productbrand" value="{{old('productbrand')}}" placeholder="productbrand">
          </div>
          <p style="color: red">@error('productbrand'){{$message}}@enderror</p>
          <div class="form-group">
            <label for="image">Product Image:</label>
            <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="productimage">
          </div>
          <p style="color: red">@error('image'){{$message}}@enderror</p>
          <div class="form-group">
            <label for="description">Product Description:</label>
            <textarea class="form-control" name="description" value="{{old('description')}}" placeholder="description"></textarea>
          </div>
          <p style="color: red">@error('description'){{$message}}@enderror</p>
          <div class="form-group">
            <label for="price">Product price:</label>
            <input type="number" class="form-control" name="price" value="{{old('price')}}" placeholder="productprice">
          </div>
          <p style="color: red">@error('price'){{$message}}@enderror</p>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection

