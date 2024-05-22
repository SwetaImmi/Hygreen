<!-- resources/views/request_otp_form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request OTP</title>
</head>
<body>
    <h2>Request OTP</h2>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    <form action="{{ route('send-otp') }}" method="POST">
        @csrf
        <button type="submit">Request OTP</button>
    </form>
</body>
</html>
