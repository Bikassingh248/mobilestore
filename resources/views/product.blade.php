<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content-grids">
        <h4 style="color: blue">List of the latest Phone</h4>
        <div class="section group">
        @if(isset($products))
            @foreach($products as $product)
                <div class="grid_1_of_4 images_1_of_4 products-info">
                    <img src="{{ $product->image ?? '' }}">
                    <a href="">{{ $product->p_name ?? '' }}</a>
                    <h3>{{ $product->price }}</h3>
                    <ul>
                        <li><a  class="cart" href="{{route('fr.description',$product->id)}}"> </a></li>
                        <li><a  class="i" href="{{route('fr.description',$product->id)}}"> </a></li>
                        <li><a  class="Compar" href="{{route('fr.description',$product->id)}}"> </a></li>
                        <li><a  class="Wishlist" href="{{route('fr.description',$product->id)}}"> </a></li>
                    </ul>

                </div>
            @endforeach
        @endif
        <div class="section group">
            {{ $products ? $products->links()  :''}}
        </div>
    </div>
    </div>
</body>
</html>

