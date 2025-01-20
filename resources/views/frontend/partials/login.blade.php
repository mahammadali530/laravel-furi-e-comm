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
      
        <form action="login" method="post" class="w-100">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Your password" name="password" id="exampleInputPassword1">
            </div>
            <div class="col-12 d-flex justify-content-start">
                    <p class="small mb-0">Don't have an account? 
                    <a href="{{ url('/Register') }}" style="font-size: 1rem; color: blue;">Create a New Account</a>
                    </p>
            </div><br>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
           
        </form>
    </div>
</div>
