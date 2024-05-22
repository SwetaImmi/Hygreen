<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
   
   
    public function generateCaptcha()
    {
        session_start();

        // Generate random text for CAPTCHA
        $captchaText = $this->generateRandomString(6); // Change 6 to the desired length of the CAPTCHA text
        session(['captcha' => $captchaText]);

        // Create a blank image
        $image = imagecreatetruecolor(120, 30);

        // Set background color
        $backgroundColor = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $backgroundColor);

        // Set text color
        $textColor = imagecolorallocate($image, 0, 0, 0);

        // Add random text to the image
        imagestring($image, 5, 20, 8, $captchaText, $textColor);

        // Generate noise (optional)
        for ($i = 0; $i < 50; $i++) {
            imagesetpixel($image, rand(0, 120), rand(0, 30), $textColor);
        }

        // Send appropriate header
        header('Content-type: image/png');

        // Output the image
        imagepng($image);
        imagedestroy($image);
    }

    // Function to generate random string
    private function generateRandomString($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function submitForm(Request $request)
    {
        // Validate CAPTCHA
        if ($request->captcha === session('captcha')) {
            // CAPTCHA verification passed, process your form data here
            // For example, get form inputs
            $name = $request->name;
            $email = $request->email;

            // Process the form data, send emails, save to database, etc.
            // Example:
            return "Hello $name, your email is $email. Form submitted successfully!";
        } else {
            // CAPTCHA verification failed, handle the error
            return "CAPTCHA verification failed. Please try again.";
        }
    }
   
    //
}
