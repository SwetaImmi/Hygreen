<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestingController extends Controller
{


    public function showRequestOtpForm()
    {
        return view('testing.test_mobile_otp');
    }


    public function sendOtp(Request $request)
    {
        // Generate OTP code
        $otp = rand(100000, 999999);

        // Store OTP in session
        $request->session()->put('otp', $otp);

        // Send OTP to user via email, SMS, or display it on the screen
        Mail::send('Mail.otp', ['otp' => $otp], function ($message) use ($request) {
            $message->to('new2255889966@yopmail.com');
            $message->subject('Reset Password');
        });
        return redirect()->route('verify-otp')->with('success', 'OTP sent successfully');
    }



    public function showVerifyOtpForm()
    {
        return view('testing.verify_otp_form');
    }

    public function verifyOtp(Request $request)
    {
        // Retrieve OTP from the session
        $storedOtp = $request->session()->get('otp');

        // Retrieve OTP entered by the user
        $enteredOtp = $request->otp;

        if ($storedOtp == $enteredOtp) {
            // OTP matched, proceed with authentication
            return redirect()->route('home')->with('success', 'OTP verified successfully');
        } else {
            // OTP didn't match
            return redirect()->back()->with('error', 'Invalid OTP');
        }
    }



    public function myCaptcha()
    {
        // dd(captcha_img());
        return view('testing.test_captcha');
    }

    public function myCaptchaPost(Request $request)
    {
        request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
                'captcha' => 'required|captcha'
            ],
            ['captcha.captcha' => 'Invalid captcha code.']
        );
        dd("You are here :) .");
    }

    public function refreshCaptcha()
    {
        dd(captcha_img());
        return response()->json(['captcha' => captcha_img()]);
    }


    public function submitForm(Request $request)
    {
        $request->validate([
            // Other Validation Rules
            'captcha' => 'required|captcha',
        ]);

        // Process form submission
    }

    
    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
