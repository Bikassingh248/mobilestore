@extends('backend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                                <h1  style="color:green">Add Brand !!!</h1>
                            </div>

    <form action="{{route('brand.add')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="Brand Name">Brand Name:</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Brand Name">

        </div>
        <p style="color: red">@error('name'){{$message}}@enderror</p>


        <div class="form-group">
          <label for="Created Date">Created Date:</label>
          <input type="date" class="form-control" name="date" value="{{old('date')}}" placeholder="Enter the Date">
        </div>
        <p style="color: red">@error('date'){{$message}}@enderror</p>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" name="status" value="{{old('status')}}" placeholder="Enter the status">
        </div>
        <p style="color: red">@error('status'){{$message}}@enderror</p>
        <br>

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
