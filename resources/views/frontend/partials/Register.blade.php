@include('frontend.partials.header')
 <style>
    .container{
        margin-top:100px;
        float:right;
        
    }
    .row{
       margin-left:330px; 
    }
    .container button{
      width: 390px;
    }
   </style>
<div class="container">
    <div class="row">
        <form action="Register" method="post">
            @csrf
            <div class="col-sm-6">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Yor Username" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
            <div class="col-sm-6">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" class="form-control" name="email" placeholder="Enter Your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
            <div class="col-sm-6">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter Your password" id="exampleInputPassword1">
            </div><br>
            
            <button type="submit" class="btn btn-primary ">Submit</button>
          </form>
    </div>
</div>