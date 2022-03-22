@extends('backend.layouts.master')
@section('content')
<form action="{{route('brand.update',$data->id)}}" method="POST" >
    @csrf
    <div class="form-group">
      <label for="Brand Name">Brand Name:</label>
      <input type="text" class="form-control" name="name" value="{{$data->b_name ?? null}}">
    </div><br>
    <div class="form-group">
      <label for="Created Date">Created Date:</label>
      <input type="date" class="form-control" name="date" value="{{$data->date ?? null}}">
    </div><br>
    <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" name="status" value="{{$data->status ?? null}}" >
    </div><br>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


