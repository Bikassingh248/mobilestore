@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | single :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jqzoom.pack.1.0.1.js')}}" type="text/javascript"></script>
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
		<script src="{{asset('js/imagezoom.js')}}"></script>

		<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
					</script>
					<!----->
					<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600);
				var plusmin;
				plusmin = $(this).children(".plusminus").text();

				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
	</head>
	<body>
        <div class="wrap">
		    <div class="content">

		    	<div class="detalis-image">
		    		<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/m11.jpg">
								<div class="thumb-image"> <img src="{{$data->image ?? null}}" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
						</ul>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		<div class="details-categories">
		    			<ul>
		    				<li><h3>Category:</h3></li>
		    				<li class="active1"><a href="#"><span>Nokia Mobiles</span></a></li>
		    				<li><a href="#">HTC Mobiles</a></li>
		    				<li><a href="#">Iphone Mobiles</a></li>
		    				<li><a href="#">Zen Mobiles</a></li>
		    			</ul>
		    		</div><br />
		    		<div class="brand-value">
		    			<h3>Product-Complete Details With Value</h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>{{$data->price ?? null}}</span></li>
			    				<li><h5>{{$data->price ?? null}}</h5></li>
			    				<br />
			    				<li><p>Not rated</p></li>
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
			    			<a href="#">Instock</a>
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history">
		    			<h3>Description :</h3>
		    			<p>{{$data->description ?? null}}</p>
                        <form action="{{route('cart.add')}}" method="POST">
                            @csrf
                            <input type="hidden" name="productid" value={{$data->id}}>
                            <button type="submit" class="btn btn-primary" >Addcart</button>
                        </form>
                        <a href="#" class="btn btn-success">Buy Product</a>
		    		</div>
		    		<div class="share">
		    			<ul>
		    				<li> <a href="#"><img src="{{asset('images/facebook.png')}}" title="facebook" /> Facebook</a></li>
		    				<li> <a href="#"><img src="{{asset('images/twitter.png')}}" title="Twiiter" />Twiiter</a></li>
		    				<li> <a href="#"><img src="{{asset('images/rss.png')}}" title="Rss" />Rss</a></li>
		    			</ul>
		    		</div>
		    		<div class="clear"> </div>

		    		</div>
		    		<div class="clear"> </div>
		    	<div class="menu_container">
                        <p class="menu_head">Product Feature<span class="plusminus">+</span></p>
						<div class="menu_body" style="display: none;">
							<p>theonlytutorials.com is providing a great varitey of tutorials and scripts to use it immediate on any project!</p>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {{-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            @isset($data)
                                            @foreach ($data as $pd )
                                            <tbody>
                                                <tr>
                                                <th>Model Number</th>
                                                <td>{{$pd->model ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>RAM</th>
                                                <td>{{$pd->ram ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>ROM</th>
                                                <td>{{$pd->rom ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Explandable</th>
                                                <td>{{$pd->expandable ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Camera</th>
                                                <td>{{$pd->camera ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Processer</th>
                                                <td>{{$pd->processor ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Display</th>
                                                <td>{{$pd->display ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Battery</th>
                                                <td>{{$pd->battery ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                <th>Charging Speed</th>
                                                <td>{{$pd->chargingspeed ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                 <th>Glass</th>
                                                 <td>{{$pd->glass ?? ''}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                            @endisset
                                        </thead>
                                    </table> --}}
                                </div>
                            </div>
                        </div>
				</div>
			</div>

		    	</div>

		</div>


	</body>
</html>
@endsection
