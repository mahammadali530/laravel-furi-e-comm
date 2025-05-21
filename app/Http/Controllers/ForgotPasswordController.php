<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\login;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function showEmailForm() {
        return view('auth.forgot-email');
    }

    public function sendOtp(Request $request) {
        $request->validate(['email' => 'required|email']);
        $user = login::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email not found');
        }

        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->otp_expires_at = Carbon::now()->addMinutes(10);
        $user->save();

        // OTP भेजना
        Mail::raw("Your OTP is: $otp", function ($message) use ($user) {
            $message->to($user->email)->subject('Your OTP for Password Reset');
        });

        session(['reset_email' => $user->email]);

        return redirect()->route('otp.form')->with('success', 'OTP sent to your email');
    }

    public function showOtpForm() {
        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request) {
        $request->validate(['otp' => 'required|digits:6']);
        $user = login::where('email', session('reset_email'))->first();

        if ($user && $user->otp === $request->otp && $user->otp_expires_at >= now()) {
            session(['otp_verified' => true]);
            return redirect()->route('password.resetForm');
        }

        return back()->with('error', 'Invalid or expired OTP');
    }

    public function showResetForm() {
        if (!session('otp_verified')) {
            return redirect()->route('forgot.form');
        }

        return view('auth.reset-password');
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = login::where('email', session('reset_email'))->first();
        $user->password = Hash::make($request->password);
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        session()->forget(['reset_email', 'otp_verified']);

        return redirect('/login')->with('success', 'Password reset successfully!');
    }
}
