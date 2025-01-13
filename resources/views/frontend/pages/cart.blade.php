<?php
use App\Http\Controllers\FrontendController;
//$total = 0;
if (Session::has('user')) {
$total= FrontendController::cartitems();
}
?>

@include('frontend.partials.header')
		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
               
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <!-- <th class="product-total">Total</th> -->
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                       <?php $grandTotal = []; 
                       
                       ?>
                       @if ($products->isEmpty())
                       <tr>
                          <td colspan="5" class="text-center"></td>
                      </tr>
                       @else
                        @foreach ( $products as $items )
                        <tr data-price="{{ $items->price }}" data-id="{{ $items->cart_id }}">
                          <td class="product-thumbnail">
                            <img src="{{ asset('storage/' . $items->image_1) }}" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{$items->f_name}}</h2>
                          </td>
                         
                          <td>₹<span class="product-price">{{ $grandTotal[] = $items->total_price }}</span></td>
                         
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                            <div class="input-group">
                                <button class="btn btn-outline-black decrease" type="button" data-cart-id="{{ $items->cart_id }}" onclick="decrease({{$items->cart_id}})">&minus;</button>
                                <input type="text" class="form-control text-center quantity-amount" 
                                      data-cart-id="{{ $items->cart_id }}" 
                                      value="{{ $items->quantity }}" />
                                <button class="btn btn-outline-black increase" type="button" data-cart-id="{{ $items->cart_id }}" onclick="increase({{$items->cart_id}})">&plus;</button>
                            </div>
                            </div>
        
                          </td>
                          
                           <!-- <td>₹<span class="item-total">{{ $items->price }}</span></td> -->
                          <td><a href="{{ route('remove.cart', $items->cart_id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">X</a>
                          </td>
                        </tr>
                        <?php
                       ?>
                        @endforeach
                        @endif
                        
        
                        <!-- <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-2.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Product 2</h2>
                          </td>
                          <td>$49.00</td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td>$49.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                    
                    </div>
                    <div class="col-md-6">
                      <!-- <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button> -->
                      <a class="btn btn-outline-black btn-sm btn-block" href="{{ url('/shop') }}">Shopping Now</a>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div> -->
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <!-- <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black"></strong>
                        </div>
                      </div> -->
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total Price</span>
                        </div>
                        <div class="col-md-6 text-right">
                        <strong class="text-black">₹<span id="grand-total">{{ array_sum($grandTotal)  }}</span></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <!-- <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button> -->
                          <a href="{{ url('/checkout') }}" class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

          <script>
 $(document).ready(function () {
    
  });
    function increase(cart_id){
        let input = $(this).siblings('.quantity-amount');
        let currentVal = parseInt(input.val()) || 0;
        input.val(currentVal + 1);
        $.ajax({
            url: '{{ route("update.increase") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cart_id: cart_id,
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

    function decrease(cart_id){
      let input = $(this).siblings('.quantity-amount');
        let currentVal = parseInt(input.val()) || 0;
        if (currentVal > 1) input.val(currentVal - 1);
        $.ajax({
            url: '{{ route("update.decrease") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cart_id: cart_id,
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