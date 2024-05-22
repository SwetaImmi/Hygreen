<!-- resources/views/verify_otp_form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <h2>Verify OTP</h2>
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form action="{{ route('verify-otp') }}" method="POST">
        @csrf
        <input type="text" name="otp" placeholder="Enter OTP">
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
