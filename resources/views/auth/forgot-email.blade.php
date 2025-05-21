
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <form action="{{ route('forgot.sendOtp') }}" method="POST">
            @csrf

            <h4 class="text-center mb-4 text-primary">Forgot Password</h4>

            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your registered email" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Send OTP</button>
            </div>

            <!-- Optional: Go back to Login -->
            <div class="text-center mt-3">
                <!-- <small>Remember your password? <a href="{{ route('login') }}" class="text-primary">Login</a></small> -->
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
