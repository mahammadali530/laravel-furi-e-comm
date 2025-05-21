<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 rounded-4" style="max-width: 400px; width: 100%;">
        <form action="{{ route('otp.verify') }}" method="POST">
            @csrf

            <h4 class="text-center mb-4 text-primary">OTP Verification</h4>

            <!-- OTP Input -->
            <div class="mb-3">
                <label for="otp" class="form-label">Enter OTP</label>
                <input type="text" name="otp" id="otp" class="form-control" placeholder="6-digit OTP" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Verify OTP</button>
            </div>

            <!-- Optional: Resend OTP -->
            <!--  -->
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>