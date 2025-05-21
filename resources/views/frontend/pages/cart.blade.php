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
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
              </tr>
        </thead>
        <tbody>
@if(session()->has('user'))
    @php
    $to_price = [];
    @endphp
@foreach($products as $product)
<tr data-cart-id="{{ $product->id }}">
  <td class="product-thumbnail">
      <img src="{{ asset('storage/' . $product->image_1) }}" alt="Image" class="img-fluid">
  </td>
  <td class="product-name">
      <h2 class="h5 text-black">{{ $product->f_name }}</h2>
  </td>
  <td>₹<span class="product-price">{{ $product->price }}</span></td>
  <td>
      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
      <div class="input-group">
    <button class="btn btn-outline-black decrease" type="button" data-cart-id="{{ $product->id }}">&minus;</button>
    <input type="text" class="form-control text-center quantity-amount" data-cart-id="{{ $product->id }}" value="{{ $product->quantity }}" />
    <button class="btn btn-outline-black increase" type="button" data-cart-id="{{ $product->id }}">&plus;</button>
</div>
      </div>
  </td>
  <td>₹<span class="item-total">{{ $to_price[] = $product->total_price }}</span></td>
  <td>
      <!-- Correctly pass the cart_id to the route -->
      <a href="{{ route('remove.cart', ['id' => $product->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">❌</a>
  </td>
</tr>
@endforeach
@else

@php
$to_price = [];
@endphp

@foreach(session('cart', []) as $item)

<tr>
    <td class="product-thumbnail">
        @if(isset($item['image_1']) && !empty($item['image_1']))
            <img src="{{ asset('storage/' . $item['image_1']) }}" alt="Image" class="img-fluid">
        @else
            <img src="{{ asset('storage/default-image.jpg') }}" alt="Default Image" class="img-fluid">
        @endif
    </td>
    <td class="product-name">
            <h2 class="h5 text-black">{{ $item['f_name'] }}</h2>
    </td>
    <td>₹<span class="product-price">{{ $item['price'] }}</span></td>
    <td>
      
@if(isset($item['id']) && isset($item['quantity'])) 
  <div class="cart-item" data-cart-id="{{ $item['id'] }}">
        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
            <div class="input-group">
                <button class="btn btn-outline-black decrease" type="button" data-cart-id="{{ $item['id'] }}" onclick="decrease_s({{ $item['id'] }})">&minus;</button>
                <input type="text" class="form-control text-center quantity-amount" data-cart-id="{{ $item['id'] }}" value="{{ $item['quantity'] }}" />
                <button class="btn btn-outline-black increase" type="button" data-cart-id="{{ $item['id'] }}" onclick="increase_s({{ $item['id'] }})">&plus;</button>
@else         
            <!-- <p>Cart ID or Quantity missing</p> -->
@endif
            </div>
        </div>
        </div>
    </td>
    
    <td>₹<span id="total-price-{{ $item['id'] }}">{{ $to_price[] = $item['price'] * $item['quantity'] }}</span></td>
    <td>
 @if(isset($item['id']))
        <a href="{{ route('remove.cart', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">❌</a>
@else     
     <!-- <span>Cart ID Missing</span> -->
@endif
    </td>
</tr>
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
                        
                       <strong class="text-black total-cart-price">₹{{ array_sum($to_price) }}</strong>

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
//  $(document).ready(function () {
    
//   });
//   function updateTotalPrice(id) {
      
//         var row = $('#cart-item-' + id);
//         var quantity = parseInt(row.find('.quantity-amount').val()) || 0;
//         var price = parseFloat(row.find('.item-price').data('price'));
//         var totalPrice = quantity * price;

        
//         row.find('.item-total').text(totalPrice.toFixed(2));  
//     }
$(document).ready(function () {
  $('.increase, .decrease').click(function () {
    let button = $(this);
    let cartId = button.data('cart-id');
    let inputField = $('input[data-cart-id="' + cartId + '"]');
    let row = $('tr[data-cart-id="' + cartId + '"]');

    let currentQuantity = parseInt(inputField.val()) || 1;
    let isIncrease = button.hasClass('increase');
    let newQuantity = isIncrease ? currentQuantity + 1 : currentQuantity - 1;

    if (newQuantity < 1); 

    $.ajax({
        url: isIncrease ? '{{ route("update.increase") }}' : '{{ route("update.decrease") }}',
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            id: cartId,
        },
        success: function (response) {
            if (response.status === 'success') {
                if (response.removed) {
                    row.fadeOut(300, function () {
                        $(this).remove();
                    });
                } else {
                    inputField.val(response.newQuantity);
                    row.find('.item-total').text('' + response.newTotalPrice);
                }
                
                // **Total Cart Price Update**
                $('.total-cart-price').text('' + response.cart_total);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', { xhr, status, error });
            alert('Koi error aayi hai. Kripya dubara koshish karein.');
        }
    });
});
});

    
</script>
<script>
   $(document).ready(function () {
    function updateCart(id, action) {
        $.ajax({
            url: action === 'increase' ? '{{ route("update.increase_ses") }}' : '{{ route("update.decrease_ses") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
            },
            success: function (response) {
                if (response.status === 'success') {
                    if (response.removed) {
                       
                        $('.cart-item[data-cart-id="' + id + '"]').remove();
                    } else {
                        $('.quantity-amount[data-cart-id="' + id + '"]').val(response.quantity);
                        $('#total-price-' + id).text('' + response.total_price);
                    }
                    $('.total-cart-price').text('' + response.cart_total);
                } else {
                    alert('Failed to update cart.');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', { xhr, status, error });
                alert('An error occurred. Please try again.');
            }
        });
    }

    window.increase_s = function (id) {
        updateCart(id, 'increase');
    };

    window.decrease_s = function (id) {
        updateCart(id, 'decrease');
    };
});

</script>

   @include('frontend.partials.footer')