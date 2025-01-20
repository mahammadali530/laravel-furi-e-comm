<?php
use App\Http\Controllers\FrontendController;
$total = 0;
if (Session::has('user')) {
$total= FrontendController::cartitems();
}
?>
<!-- Bootstrap CSS -->
<link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<link href="{{ asset('asset/css/tiny-slider.css') }}" rel="stylesheet">
<link href="{{ asset('resources/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('asset/scss/style.scss') }}" rel="stylesheet">

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link " href="{{ url('/') }}">Home</a>
						</li>
						<li><a class="nav-link " href="{{ url('/shop') }}">Shop</a></li>
						<li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
						<li><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
						<li><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
						<li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login"><img src="{{ asset('asset/images/user.svg') }}"></a></li>
						<li><a class="nav-link" href="{{ url('/cart') }}"><img src="{{ asset('asset/images/cart.svg') }}">
						{{$total}}</a></li>
					</ul>
					@if(Session::has('user'))
        <li class="nav-item dropdown">
		<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">{{ Session::get('user')['name'] }}
      Dropdown
    </button>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		  <li><a class="dropdown-item" href="{{ url('/myorders') }}">My orders</a></li>
            <li><a class="dropdown-item" href="logoutt">Logout</a></li>
			
             </ul>
        </li>
        @else
        <li>
          <!-- <a class="btn btn-danger" href="login">Login</a>
        </li> -->
        <!-- <li>
          <a class="btn btn-info" href="Register">Register</a>
        </li> -->
        @endif
				</div>
			</div>
				
		</nav>