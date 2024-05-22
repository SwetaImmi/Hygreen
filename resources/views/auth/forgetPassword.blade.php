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



    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/colorbox.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
</head>

<body>







    <div id="colorbox" class="colorbox_login" role="dialog" tabindex="-1" style="display: block; visibility: visible; top: 42px; left: 176px; position: absolute; width: 998px; height: 278px;">
        <div id="cboxWrapper" style="height: 278px; width: 998px;">
            <div>
                <div id="cboxTopLeft" style="float: left;"></div>
                <div id="cboxTopCenter" style="float: left; width: 988px;"></div>
                <div id="cboxTopRight" style="float: left;"></div>
            </div>
            <div style="clear: left;">
                <div id="cboxContent" style="float: left; width: 988px; height: 248px;">
                    <div id="cboxLoadedContent" style="width: 308px; overflow: auto; height: 248px;">
                        <div id="account-info-edit-popup" class="popup-box-typ2 login-popup-size">
                            <div class="hd-typ13 mrg15-B R-mrg15-B">Password Reset</div>

                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                            @endif
                            <form action="{{ route('forget.password.post') }}" method="POST">
                                @csrf

                                <div class="alert" id="message" style="display: none;   background-color: bisque;color: chocolate;"></div>

                                <div class="field-box mrg15-B R-mrg15-B">
                                    <label class="lbl-typ">User Email</label>
                                    <span class="filed-sec">
                                        <input id="email" type="text" class="textbox-typ2" placeholder="Enter User Id" name="email">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </span>
                                </div>


                                <div class="field-box  col-md-6">
                                    <div class="submit-btn-box-typ lbl-typ" style="    width: 100%;    margin-left: 150px;    margin-bottom: -80px;">
                                        <button type="submit" value="Submit" class="bt-login btn-typ7"> Send Password Reset Link</button>
                                    </div>

                                </div>
                                <input type="hidden" name="pkhiddenval" value="">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="/js/tree-menu.js"></script>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/jquery.colorbox.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>


</html>