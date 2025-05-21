@include('frontend.partials.header')
<style>
    /* .container{
        margin-top:100px;
        
        
    }
    .row{
      margin-left:360px;
    }
    .container button{
      width: 466px;
    } */
   </style>
   
      <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-50">

    @error('email')
     <!-- <div class="text-danger">{{ $message }}</div>  -->
    <div class="alert alert-danger" role="alert">
          {{ $message }}
    </div>
    @enderror

    @error('password')
    <div class="alert alert-danger" role="alert">
           {{ $message }}
      @enderror
      
       <form action="{{ url('login') }}" method="post" class="w-100">
    @csrf

    <h4 class="mb-4 text-primary text-center">Login to Your Account</h4>

    <!-- Email -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Address</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" id="exampleInputEmail1" required>
    </div>

    <!-- Password -->
    <div class="mb-3 position-relative">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" required>
        <i class="bi bi-eye-slash-fill position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" id="togglePassword" style="cursor: pointer;"></i>
    </div>

    <!-- Login Button -->
    

    <!-- Forgot Password & Register -->
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('forgot.form') }}" class="text-decoration-none" style="font-size: 0.9rem; color:red; font-weight: bold;">Forgot Password?</a>
        <p class="mb-0" style="font-size: 0.9rem; color:bulue; font-weight: bold;">
          <a href="{{ url('/Register') }}" class="text-primary">Create a New Account</a>
        </p>
    </div></br>
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>

    </div>
</div>
