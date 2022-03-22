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
    <div class="header">
        <div class="search-bar">
            <form>
                <input type="text"><input type="submit" value="Search" />
            </form>
        </div>
        <div class="clear"> </div>
        <div class="header-top-nav">
            <ul>
                <li><a href="{{route('register')}}">Register</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">My account</a></li>
                <li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li>
            </ul>
        </div>
        <div class="clear"> </div>
    </div>
    </div>
    <div class="clear"> </div>
    <div class="top-header">
        <div class="wrap">
            <!----start-logo---->
                <div class="logo">
                    <a href="index.html"><img src="{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->logo:''}}"  title="logo" /></a>
                </div>
            <!----end-logo---->
            <!----start-top-nav---->
            <div class="top-nav">
                <ul>
                    <li><a href="{{route('fr.about')}}">Home</a></li>
                    <li><a href="{{route('fr.about')}}">About</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    <li><a href="{{route('fr.store')}}">Store</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="{{route('fr.contact')}}">Contact</a></li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Product
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Change Password</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Logout</a>
                        </div>
                      </div>
                </ul>
            </div>
            <div class="clear"> </div>
            </div>
            </div>
            <!----End-top-nav---->
</body>
</html>

