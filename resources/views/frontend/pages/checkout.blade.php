<?php
use App\Http\Controllers\FrontendController;
$total = 0;
if (Session::has('user')) {
$total= FrontendController::cartitems();

}
?>
 
    @include('frontend.partials.header')<!-- Start Hero Section -->
    
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Checkout</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
		
		<div class="untree_co-section">
		    <div class="container">
		      <div class="row mb-5">
		        <div class="col-md-12">
		          <div class="border p-4 rounded" role="alert">
		            Returning customer? <a href="#">Click here</a> to login
		          </div>
		        </div>
		      </div>
			  @if(session('success'))
				<div style="text-align:center;" class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
             @endif
		      <div class="row">
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Billing Details</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		            <div class="form-group">
		              <!-- <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
		              <select id="c_country" class="form-control">
		                <option value="1">Select a country</option>    
		                <option value="2">bangladesh</option>    
		                <option value="3">Algeria</option>    
		                <option value="4">Afghanistan</option>    
		                <option value="5">Ghana</option>    
		                <option value="6">Albania</option>    
		                <option value="7">Bahrain</option>    
		                <option value="8">Colombia</option>    
		                <option value="9">Dominican Republic</option>    
		              </select> -->
		            </div>
				
					<form action="{{ route('checkout') }}" method="post">
					@csrf
		            <div class="form-group row">
					
		              <div class="col-md-6">
		                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_fname" name="c_fname">
						@error('c_fname')
					<small class="text-danger">{{ $message }}</small>
					@enderror
						</div>
		              <div class="col-md-6">
		                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_lname" name="c_lname">
						@error('c_lname')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_companyname" class="text-black">Company Name </label>
		                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
						@error('c_companyname')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
						@error('c_address')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
						@error('c_state_country')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		              <div class="col-md-6">
		                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
						@error('c_postal_zip')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		            </div>

		            <div class="form-group row mb-5">
		              <div class="col-md-6">
		                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
						@error('c_email_address')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		              <div class="col-md-6">
		                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
						@error('c_phone')
						<small class="text-danger">{{ $message }}</small>
						@enderror
		              </div>
		            </div>

		            <!--  -->


		       
		          </div>
		        </div>
		        <div class="col-md-6">

		        

		          <div class="row mb-5">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Your Order</h2>
		              <div class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                
		                  <tbody>
		                   
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong> Total Product</strong></td>
		                      <td class="text-black font-weight-bold"><strong>{{ $total }}</strong></td>
		                    </tr>
		                  </tbody>
		                </table>

		                <!-- <div class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

		                  <div class="collapse" id="collapsebank">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div> -->

		                <div class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cash Payment</a></h3>

		                  <div class="collapse" id="collapsecheque">
		                    <div class="py-2">
							<input type="radio" value="cash" name="payment"  ><span>cash on delivery</span><br><br> </div>
		                  </div>
		                </div>

		                <!-- <div class="border p-3 mb-5">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

		                  <div class="collapse" id="collapsepaypal">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div> -->

		                
		                  <!-- <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button> -->
						  <!-- <a class="btn btn-black btn-lg py-3 btn-block" href="">Place Order</a> -->
		                
                     <button class="btn btn-black btn-lg py-3 btn-block">submit</button>
		              </div>
					 
		            </div>
		          </div>
				  
		        </div>
				</form>
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>
          @include('frontend.partials.footer')