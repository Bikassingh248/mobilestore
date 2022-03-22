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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><h4><B>Mobile Store</B></h4> </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item  -->


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- for product -->

        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Product
            </button>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="addproduct">Add Product</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('showproduct')}}">Manage Product</a>
            </div>
          </div>

        <!-- for brand-->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Brand
            </button>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="{{route('brand.create')}}">Add Brand</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('brandshow')}}">Manage Brand</a>
            </div>
          </div>

     <!-- for order-->
     <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Order
        </button>
        <div class="dropdown-menu">

          <a class="dropdown-item" href="#">All Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> New Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> Conform Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> Delivered Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> Cancelled Order</a>
        </div>
      </div>

      <!-- for Report-->
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Report
        </button>
        <div class="dropdown-menu">

          <a class="dropdown-item" href="#">Sells Report</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Mobile Report</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Order Report</a>
        </div>
      </div>
     <!-- for Review-->
     <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Review
        </button>
        <div class="dropdown-menu">

          <a class="dropdown-item" href="#">All Review</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">New Review</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Accept Review</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Reject Review</a>
        </div>
      </div>
      <!-- for Change Sitesetting-->
    <div class="btn-group">
        {{-- <button type="button" class="btn btn-success "  aria-haspopup="true" aria-expanded="false">
          Site Setting --}}
          <a href="{{route('site.create')}}" class="btn btn-success">Site Setting</a>
        </button>

    </div>
    <!-- for view contacts details-->
    <div class="btn-group">
        {{-- <button type="button" class="btn btn-primary "  aria-haspopup="" aria-expanded="false">
          Contact Details --}}
          <a href="{{route('contact.show')}}" class="btn btn-primary">Contact Details</a>
        </button>

      </div>
    <!-- for Change Password-->
    <div class="btn-group">
        {{-- <button type="button" class="btn btn-primary "    aria-haspopup="" aria-expanded="false"> --}}
          {{-- Change Password --}}
          <a href="{{route('password.show')}}" class="btn btn-danger">Change password</a>
        </button>

      </div>
      <!-- for Logout-->
     <div class="btn-group">
        {{-- <button type="button" class="btn btn-primary "  aria-haspopup="true" aria-expanded="false">
          Logout --}}
          <a href="{{route('admin.logout')}}" class="btn btn-success">Logout</a>
        </button>

      </div>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>


        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div>

    </ul>
</body>
</html>
