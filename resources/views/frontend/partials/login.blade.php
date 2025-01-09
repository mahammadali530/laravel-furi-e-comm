@include('frontend.partials.header')
<style>
    .container{
        margin-top:100px;
        
        
    }
    .row{
      margin-left:360px;
    }
    .container button{
      width: 466px;
    }
   </style>
    @error('email')
    {{-- <div class="text-danger">{{ $message }}</div> --}}
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
@enderror
    @error('password')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
      @enderror
<div class="container">
 
    <div class="row">
        <form action="login" method="post">
            @csrf
            <div class="col-sm-6">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Enter Your Email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
            <div class="col-sm-6">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="Enter Your password" name="password" id="exampleInputPassword1">
            </div><br>
            
            <button type="submit" class="btn btn-primary ">Submit</button>
          </form>
    </div>
</div>