<form action="{{ route('submit.form') }}" method="post">
    @csrf
    <!-- Your form fields -->
    <input type="text" name="name" placeholder="Your Name"><br>
    <input type="email" name="email" placeholder="Your Email"><br>
    
    <!-- CAPTCHA image -->
    <img src="{{ route('captcha') }}" alt="CAPTCHA Image"><br>
    <input type="text" name="captcha" placeholder="Enter CAPTCHA"><br>
    
    <button type="submit">Submit</button>
</form>
