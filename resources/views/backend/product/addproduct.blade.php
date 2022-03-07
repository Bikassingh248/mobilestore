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
          <input type="text" class="form-control" name="productid" placeholder="product id">
        </div>
        <div class="form-group">
          <label for="productname">Product Name:</label>
          <input type="text" class="form-control" name="productname" placeholder="productname">
        </div>
        <div class="form-group">
            <label for="producttype">Product Brand:</label>
            <input type="text" class="form-control" name="productbrand" placeholder="productbrand">
          </div>
          <div class="form-group">
            <label for="image">Product Image:</label>
            <input type="file" class="form-control" name="image" placeholder="productimage">
          </div>
          <div class="form-group">
            <label for="description">Product Description:</label>
            <textarea class="form-control" name="description" placeholder="description"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Product price:</label>
            <input type="number" class="form-control" name="price" placeholder="productprice">
          </div>

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

