@include('frontend.partials.header')
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					  @foreach ( $products as $items )
					<div class="col-12 col-md-4 col-lg-3 mb-5 ">
					  <div class="product-item">
							<img src="{{ asset('storage/' . $items->image_1) }}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{$items['f_name']}}</h3>
								<strong class="product-price">₹{{$items['price']}}</strong><br><br>
								<form action="{{ route('add_to_cart') }}" method="post">
									@csrf
									<input type="hidden" name="product_id" value="{{$items['u_id']}}">
									<button class="btn btn-primary">Add To Cart</button>
								</form>
								<br>
                       </div>
		           </div>
				   @endforeach
		   </div>
	   </div>
   </div>
					
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{ asset('asset/images/corss.svg') }}" class="img-fluid">
							</span>
						</a>
					</div>  -->
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> -->
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> -->
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>  -->
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>  -->
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> -->
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> -->
					<!-- End Column 4 -->

		      
        @include('frontend.partials.footer')