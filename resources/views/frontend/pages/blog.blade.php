@include('frontend.partials.header')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Blog</h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="{{ url('/shop') }}" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
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
		<!-- End Blog Section -->	

		

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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		
		@include('frontend.partials.footer')