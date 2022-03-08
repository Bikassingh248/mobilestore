<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
            <div class="text-center">
                <h1 style="color:blue">Welcome to Site-Setting !!!</h1>
            </div>
     <form action="{{route('site.save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productid">Site Name:</label>
          <input type="text" class="form-control" name="name" value="{{$data->name ?? null}}">
        </div>
        <p style="color: red">@error('name'){{$message}}@enderror</p>


        <div class="form-group">
          <label for="productname">Slogan:</label>
          <input type="text" class="form-control" name="slogan" value="{{$data->slogan ?? null}}">
        </div>
        <p style="color: red">@error('slogan'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="producttype">Site Logo:</label>
            <input type="file" class="form-control" name="logo" value="{{$data->logo ?? null}}">
        </div>
        <p style="color: red">@error('logo'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="producttype">Mobile No:</label>
            <input type="text" class="form-control" name="mobileno" value="{{$data->mobile_no ?? null}}">
        </div>
        <p style="color: red">@error('mobileno'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="image">Telephone No:</label>
            <input type="text" class="form-control" name="telephoneno" value="{{$data->telephone_no ?? null}}">
        </div>
        <p style="color: red">@error('telephoneno'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="description">Address:</label>
            <input type="text" class="form-control" name="address" value="{{$data->address ?? null}}" >
        </div>
        <p style="color: red">@error('address'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="price">Facebook:</label>
            <input type="text" class="form-control" name="facebook" value="{{$data->facebook ?? null}}">
        </div>
        <p style="color: red">@error('facebook'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="price">Instragram:</label>
            <input type="text" class="form-control" name="instragram" value="{{$data->instragram ?? null}}">
        </div>
        <p style="color: red">@error('instragram'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="price">Linkedin:</label>
            <input type="text" class="form-control" name="linkedin" value="{{$data->linkedin ?? null}}">
        </div>
        <p style="color: red">@error('linkedin'){{$message}}@enderror</p>

        <div class="form-group">
            <label for="price">copyright:</label>
            <input type="text" class="form-control" name="copyright" value="{{$data->copyright ?? null}}">
        </div>
        <p style="color: red">@error('copyright'){{$message}}@enderror</p>
        <br>

        <button type="submit" class="btn btn-primary btn-user btn-block">
            Update
        </button>

      </form>
           </div>

    </div>
</div>
</body>
</html>

