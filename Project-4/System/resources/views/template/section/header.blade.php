@php
 function checkRouteActive($route){
    if(Route::current()->url == $route) return 'active';
 }   
@endphp
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link {{checkRouteActive('/')}}">Home</a>
                    <a href="{{url('product-list')}}" class="nav-item nav-link {{checkRouteActive('product-list')}}">Products</a>
                    <a href="{{url('product-detail')}}" class="nav-item nav-link  {{checkRouteActive('product-detail')}}">Product Detail</a>
                    <a href="{{url('cart')}}" class="nav-item nav-link {{checkRouteActive('cart')}}">Cart</a>
                    <a href="{{url('checkout')}}" class="nav-item nav-link  {{checkRouteActive('checkout')}}">Checkout</a>
                    <a href="{{url('my-account')}}" class="nav-item nav-link  {{checkRouteActive('my-account')}}">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            <a href="{{url('wishlist')}}" class="dropdown-item">Wishlist</a>
                            <a href="{{url('login')}}" class="dropdown-item">Login & Register</a>
                            <a href="{{url('contact')}}" class="dropdown-item">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            <a href="{{url('login')}}" class="dropdown-item">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>