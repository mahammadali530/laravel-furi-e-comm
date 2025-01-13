@include('frontend.partials.header')

		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>About Us</h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{ asset('asset/images/couch.png') }}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

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

		<!-- Start Team Section -->
		
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">Our Team</h2>
					</div>
				</div>
				
				<div class="row">
					<!-- Start Column 1 -->
					@foreach ($team as $items)
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="{{ asset('storage/' . $items->image) }}" class="img-fluid mb-5">
						<h3 clas>{{$items['title']}}</h3>
						<span class="d-block position mb-4">CEO, Founder, Atty.</span>
						<p>{{$items['description']}} </p>
						<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div> 
					@endforeach
                   </div>
			</div>
		</div>
		
		<!-- End Team Section -->

		

		<!-- Start Testimonial Slider -->
		
		<div class="testimonial-section before-footer-section">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->
		@include('frontend.partials.footer')