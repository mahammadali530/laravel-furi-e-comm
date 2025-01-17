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
								<h3 class="product-title" value="{{ old('f_name') }}">{{$items['f_name']}}</h3>
								<strong class="product-price">₹{{$items['price']}}</strong><br><br>

								@if ($userCart = App\Models\Cart::where('product_id', $items->u_id)->first())

							<div class="input-group">
								<button class="btn btn-outline-black decrease" type="button" data-cart-id="{{ $userCart->id }}" onclick="decrease({{ $userCart->id }})">&minus;</button>
								<input type="text" class="form-control text-center quantity-amount" 
									data-cart-id="{{ $userCart->id }}" 
									value="{{ $userCart->quantity }}" />
								<button class="btn btn-outline-black increase" type="button" data-cart-id="{{ $userCart->id }}" onclick="increase({{ $userCart->id }})">&plus;</button>
							</div>
                           @else
							<form action="{{ route('add_to_cart') }}" method="post">
								@csrf
								<input type="hidden" name="product_id" value="{{$items['u_id']}}">
								
								<div>
									<label for="quantity">Select Quantity:</label>
									<select name="quantity" id="quantity" required>
										@for ($i = 1; $i <= 10; $i++) 
											<option value="{{ $i }}">{{ $i }}</option>
										@endfor
									</select>
                                  </div><br>
								<button class="btn btn-primary">Add To Cart</button>
							</form>
							@endif
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
 
					<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

});
function increase(id){
let input = $(this).siblings('.quantity-amount');
let currentVal = parseInt(input.val()) || 0;
input.val(currentVal + 1);
$.ajax({
  url: '{{ route("update.increase") }}',
  type: 'POST',
  data: {
	  _token: '{{ csrf_token() }}',
	  id: id,
  },
  beforeSend: function () {
	  // console.log('Sending data:', { cart_id: cartId, quantity: quantity });
  },
  success: function (response) {
	  console.log('Response received:', response);
	  if (response.status === 'success') {
		  alert('Cart updated successfully!');
		  location.reload();
	  } else {
		  alert('Failed to update cart. Message: ' + response.message);
	  }
  },
  error: function (xhr, status, error) {
	  console.error('AJAX Error:', { xhr, status, error });
	  alert('An error occurred. Please try again.');
  }
});
}

function decrease(id){
let input = $(this).siblings('.quantity-amount');
let currentVal = parseInt(input.val()) || 0;
if (currentVal > 1) input.val(currentVal - 1);
$.ajax({
  url: '{{ route("update.decrease") }}',
  type: 'POST',
  data: {
	  _token: '{{ csrf_token() }}',
	  id: id,
  },
  beforeSend: function () {
	  // console.log('Sending data:', { cart_id: cartId, quantity: quantity });
  },
  success: function (response) {
	  console.log('Response received:', response);
	  if (response.status === 'success') {
		  alert('Cart updated successfully!');
		  location.reload();
	  } else {
		  alert('Failed to update cart. Message: ' + response.message);
	  }
  },
  error: function (xhr, status, error) {
	  console.error('AJAX Error:', { xhr, status, error });
	  alert('An error occurred. Please try again.');
  }
});
}
</script>

		      
        @include('frontend.partials.footer')