@include('frontend.partials.header')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-50">
        <form action="Register" method="post" class="w-100">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Username" id="username">
                @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" id="email">
                @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" id="password">
                @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
            <div class="col-12 d-flex justify-content-start">
                    <p class="small mb-0">Don't have an account? 
                    <a href="{{ url('/login') }}" style="font-size: 1rem; color: blue;">Login Account</a>
                    </p>
            </div><br>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>
