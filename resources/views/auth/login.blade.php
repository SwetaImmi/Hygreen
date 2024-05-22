<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="mqhazI8HndzAH9Vg-F1CLrUhOxzO8s60yVh8aXl4ABvN3TKLy13pl_J0vDCKLnYW125seraKmfW6KxVcHi9Gcg==">
    <title>HyGreen</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="https://hygreen.qa/favicon.ico">



    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    <!-- <link href="/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="/css/navigation.css" rel="stylesheet"> -->
    <!-- <link href="/css/owl.carousel.css" rel="stylesheet"> -->
    <!-- <link href="/css/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="/css/flexslider.css" rel="stylesheet"> -->
    <link href="/css/colorbox.css" rel="stylesheet">
    <!-- <link href="/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="/css/jquery.scrolling-tabs.css" rel="stylesheet"> -->
    <!-- <link href="/css/tree-menu.css" rel="stylesheet"> -->
    <link href="/css/responsive.css" rel="stylesheet">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFF7B9D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->





    <div id="colorbox" class="colorbox_login" role="dialog" tabindex="-1" style="display: block; visibility: visible; top: 42px; left: 176px; position: absolute; width: 998px; height: 278px;">
        <div id="cboxWrapper" style="height: 278px; width: 998px;">
            <div>
                <div id="cboxTopLeft" style="float: left;"></div>
                <div id="cboxTopCenter" style="float: left; width: 988px;"></div>
                <div id="cboxTopRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
                <!-- <div id="cboxMiddleLeft" style="float: left; height: 248px;"></div> -->
                <div id="cboxContent" style="float: left; width: 988px; height: 248px;">
                    <div id="cboxLoadedContent" style="width: 308px; overflow: auto; height: 248px;">
                        <div id="account-info-edit-popup" class="popup-box-typ2 login-popup-size">
                            <!-- New code --->
                            <!-- New code ends -->
                            <div class="hd-typ13 mrg15-B R-mrg15-B">Login</div>
                            <!-- Login Form Start -->
                            <form id="pkloginpup" onsubmit="return validateForm()">
                                @csrf
                                <!-- <input type="hidden" name="_token" value="PV1VwLdgfiECQBU1ignjQ4clkXouAODSTVAuBDWJ"> <div class="alert" id="error" style="display: none;   background-color: bisque;color: chocolate;"></div> -->

                                <div class="alert" id="message" style="display: none;   background-color: bisque;color: chocolate;"></div>

                                <div class="field-box mrg15-B R-mrg15-B">
                                    <label class="lbl-typ">User Email</label>
                                    <span class="filed-sec">
                                        <input id="email" type="text" class="textbox-typ2" placeholder="Enter User Id" name="email">
                                        <span style="color: red;" id="emailError" class="error"></span>
                                    </span>
                                </div>

                                <div class="field-box mrg15-B R-mrg15-B">
                                    <label class="lbl-typ">Password</label>
                                    <span class="filed-sec">
                                        <input id="password" class="textbox-typ2" placeholder="Enter Password" name="password" type="password" value="">
                                        <span style="color: red;" id="passwordError" class="error">
                                        </span>

                                    </span>
                                </div>
                                <div class="field-box  R-mrg15-B">
                                    <div class="submit-btn-box-typ lbl-typ">
                                        <!--<a href="/user/index" class="edit-lnk-typ btn-typ7">Register</a>&nbsp;&nbsp;--><button type="submit" value="Submit" class="bt-login btn-typ7">Login</button>
                                    </div>
                                    <div class="filed-sec">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="checkbox" id="rememberLogin" name="remember_me" value="1">
                                                <label class="">Remember Me</label>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="fg-password" title="forgotpassword" href="{{route('forget.password.get')}}">Reset my password</a>
                                            </div>
                                            <div class="col-md-8 align-R R-align-C">
                                                <a class="creat-acc-immi btn-typ7 createU" title="Create New User Account" href="register">Create New User Account</a>
                                                <a class="return-acc-immi btn-typ7 createU" title="Return" href="/">Return</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="pkhiddenval" value="">
                            </form>
                            <!-- Login Form End -->
                        </div>
                    </div>

                </div>

            </div>
            <!-- <div style="position: absolute; width: 9999px; visibility: hidden; max-width: none; display: none;"></div> -->
        </div>
        <!-- <div id="cboxOverlay" style="opacity: 0; cursor: pointer; visibility: visible;"></div> -->
    </div>
    <script src="/js/tree-menu.js"></script>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <!-- <script src="/js/owl.carousel.min.js"></script> -->
    <!-- <script src="/js/jquery.flexslider-min.js"></script> -->
    <!-- <script src="/js/wow.min.js"></script> -->
    <script src="/js/jquery.colorbox.js"></script>
    <!-- <script src="/js/jquery.scrolling-tabs.js"></script> -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <!-- <script src="/js/anlysis.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- <script src="/js/site-script.js"></script> -->
</body>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#pkloginpup').on('submit', function(e) {
        // alert();
        e.preventDefault();
        $.ajax({

            url: "{{route('login.create')}}",
            method: "post",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                console.log(data)
                $('#message').css('display', 'block');
                if (data.code == 200) {
                    $('#message').html(data.message);
                    window.location.href = data.redirect;
                    location.reload()
                } else if (data.code == 201) {
                    window.location.href = data.redirect;
                }
                $('#message').html(data.error);




            }

        });

    });
</script>
<script>
    function validateForm() {
        var password = document.getElementById('password').value;
        var email = document.getElementById('email').value;
        var passwordError = document.getElementById('passwordError');
        var emailError = document.getElementById('emailError');
        var isValid = true;

        passwordError.innerHTML = '';
        emailError.innerHTML = '';

        if (password === '') {
            passwordError.innerHTML = 'Password is required';
            isValid = false;
        }

        if (email === '') {
            emailError.innerHTML = 'Email is required';
            isValid = false;
        } else if (!isValidEmail(email)) {
            emailError.innerHTML = 'Invalid email address';
            isValid = false;
        }

        return isValid;
    }

    function isValidEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>

</html>