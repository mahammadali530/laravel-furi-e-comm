@include('frontend.partials.header')
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

			</head>

	<body>
  
  
  
	
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
					@foreach ($home as $items)
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>{{$items['title']}}</span></h1>
								<p class="mb-4">{{$items['description']}}</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{ asset('storage/' . $items->image) }}" class="img-fluid">
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		@foreach ( $about as $items )
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">{{$items['title']}}</h2>
						<p>{{$items['description']}}</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('asset/images/truck.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>{{$items['description_1']}}</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('asset/images/bag.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>{{$items['description_2']}}</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('asset/images/support.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>{{$items['description_3']}}</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('asset/images/return.svg') }}" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>{{$items['description_4']}}</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{ asset('storage/' . $items->image) }}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		@endforeach
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
				@foreach ($modern as $items)
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="{{ asset('storage/' . $items->image) }}" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{ asset('storage/' . $items->image_1) }}" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{ asset('storage/' . $items->image_2) }}" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">{{$items['title']}}</h2>
						<p>{{$items['description']}}</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
							<li>Donec vitae odio quis nisl dapibus malesuada</li>
						</ul>
						<p><a herf="#" class="btn">Explore</a></p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('asset/images/product-1.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">product-1.png
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('asset/images/product-2.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('asset/images/product-3.png') }}" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
				@foreach ($reveuse as $items)
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">{{$items['title']}}</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;{{$items['description']}}.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="{{ asset('storage/' . $items->image) }}" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>
											@endforeach

										</div>
									</div>
								</div> 
								<!-- END item -->

								
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				
				<div class="row">
				@foreach ($blog as $items)
					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="{{ asset('storage/' . $items->image) }}" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">{{$items['description']}}</a></h3>
								<div class="meta">
									<!-- <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span> -->
								</div>
							</div>
						</div>
					</div>
				@endforeach
            </div>
      </div>
</div>	
	@include('frontend.partials.footer')
	</body>
</html>
