<header>
    <div class="topbar-wrapper">
        <div class="container">
            <div class="topbar clearfix pos-rel">
                <div class="topbar-col1">
                    <h1 class="logo"><a href="/"><img src="/images/logo.png" alt="Logo" /></a></h1>
                </div>
                <div class="topbar-col2">
                    <div class="navigation-box">
                        <!--NAVIGATION STARTS HERE -->
                        <div class="navigation">
                            <div class="navigation">
                                <div class="nav-main">

                                    <ul class="clearfix">
                                        <li>
                                            <div class="nav-item"><a class="main" href="/" title="Home">Home</a></div>
                                        </li>
                                        @foreach($category as $categories)
                                        <li>

                                            <div class="nav-item"> <a class="expand-main" href="{{url('categories'.'/'.$categories->category_name.'/'.$categories->id)}}" title="Healthcare">{{$categories->category_name}}</a>
                                                <div class="sub-menu-box">
                                                    <div class="img-lnk-row-box clearfix">
                                                        <div class="img-box">
                                                            <img src="{{asset('/backend/category/'.$categories->category_image)}}" alt="Navigation Sub" style="height: 180px; width:200px;" />

                                                        </div>
                                                        <div class="lnk-row-box">
                                                            <div class="sub-menu-listing">
                                                                <ul>
                                                                    @foreach($subCategory as $subCategories)
                                                                    @if($subCategories->category_id == $categories->id)
                                                                    <li> <a title="Skin Protection" href="{{url('category'.'/'.$subCategories->id.'/'.$categories->category_name.'/'.$subCategories->sub_category_name)}}"> <span class="img-sec">
                                                                                <img src="{{asset('/backend/subcategory/'.$subCategories->sub_category_icon)}}" alt="" />
                                                                            </span> <span class="text-sec">{{$subCategories->sub_category_name}}</span> </a> </li>

                                                                    @else

                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- EOF NAVIGATION--->
                    </div>
                </div>
                <div class="topbar-col3">
                    <div class="top-right-box">
                        <!-- <span class="search-icon-box pos-rel">
                            <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <span class="search-expand">
                                search form start
                                <form id="formsearch" action="/products/search" method="post">
                                    <input type="text" id="w0"> <img class="loader-image" style="display:none" src="/images/ajax-loader.gif" /><span class="search-expand-icon" onclick="search()"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </span>
                            </form>
                            search form End
                        </span> -->
                        <a class="cart-icon-box" href="{{url('cart-list')}}">
                            <span class="cart-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="cart-text" id="cartitem">

                                @if(Auth::user() == NULL)
                                <?php $cart = json_decode(request()->cookie('carts'), true) ?? [];
                                ?>
                                @if(isset($cart))
                                <p> {{ count($cart) }}</p>
                                @endif
                                @else
                                @if(Auth::check())
                                <?php
                                $count = App\models\Cart::where('user_id', Auth::id())->count();
                                echo $count;
                                ?>
                                @endif
                                @endif
                            </span>
                            <span class="adding-cart-block" style="display:none;" id="primeMenu">Product added to cart Successfully!</span>

                        </a>
                        <span class="login-lnk-box">
                            <span class="login-reg" style="display:none;"><a title="Register" href="#">Register</a><a title="Login" href="#">Login</a></span>
                            @if(!Auth::user())
                            <a href="javascript:void(0);" class="edit-lnk-typ account-info-edit"><img src="/images/logout-image.png" /></a>
                            @else
                            <span class="login-user">
                                <img src="/images/avatar.png" /> {{Auth::user()->name}}
                            </span>

                            <span class="login-expand-box" id="login-info-div">
                                <span class="photo-info-cover clearfix">
                                    <span class="image-sec"><img src="/images/avatar.png" /></span>
                                    <span class="profile-info-sec">
                                        <span class="name-txt"> </span>
                                        <span class="email-txt"><a title="" href="mailto:"></a></span>
                                        <span class="my-account-btn"><a class="btn-typ5" href="{{url('contact-us')}}" title="My Account">My Account</a></span>
                                    </span>
                                </span>


                                <span class="signout-lnk">
                                    <a title="Sign out" id="signout-lnk" href="{{('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Signout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </span>
                            </span>
                            @endif
                            <div style="display:none;">
                                <div id="account-info-edit-popup" class="popup-box-typ2 login-popup-size">
                                    <!-- New code --->
                                    <!-- New code ends -->
                                    <div class="hd-typ13 mrg15-B R-mrg15-B">Login</div>
                                    <!-- Login Form Start -->
                                    <form id="pkloginpup" onsubmit="return validateForm()">
                                        @csrf
                                        <!-- <div class="alert" id="error" style="display: none;   background-color: bisque;color: chocolate;"></div> -->

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
                            <div style="display:none;">
                                <div id="account-info-edit-popup_from_cart" class="popup-box-typ2 login-popup-size">
                                    <!-- Login Form Start -->
                                    <div class="hd-typ13 mrg15-B R-mrg15-B">Login</div>
                                    <form action="#user/login?route=order/calculate" method="post">
                                        <div class="field-box mrg15-B R-mrg15-B">
                                            <label class="lbl-typ">Username</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" placeholder="Enter Username" name="username" required>
                                            </span>
                                        </div>
                                        <div class="field-box mrg15-B R-mrg15-B">
                                            <label class="lbl-typ">Password</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" placeholder="Enter Password" name="password" type="password" required>
                                            </span>
                                        </div>
                                        <div class="field-box  R-mrg15-B">
                                            <div class="submit-btn-box-typ lbl-typ">
                                                <!--<a href="/user/index" class="edit-lnk-typ btn-typ7">Register</a>&nbsp;&nbsp;--><button class="bt-login btn-typ7">Login</button>
                                            </div>
                                            <div class="filed-sec">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <input type="checkbox" id="rememberLogin1" name="rememberLogin" value="1"> <label class="">Reeemember Me</label>
                                                        </div>
                                                        <!-- <a class="fg-password" title="forgotpassword" href="#site/forgotpassword">Reset my password</a> -->

                                                    </div>

                                                    <div class="col-md-8 align-R R-align-C">
                                                        <a class="btn-typ7 createU" title="Create New User Account" href="register">Create New User Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Login Form End -->
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div style="display:none">
                    <div id="myModal" class="popup-box-typ2 login-popup-size">

                        <h4>Login Failed</h4>

                        <p>Invalid Username or Password</p>

                    </div>
                </div>
                <button type="button" role="button" class="lines-button x display-responsive">
                    <span class="lines"></span>
                </button>
            </div>
        </div>
    </div>
</header>


<!-- ajax $ not defined -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- ajax $ not defined -->


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
        if(data.code == 200){
            $('#message').html(data.message);
          location.reload()
        }else if(data.code == 201){
            window.location.href = data.redirect;
        }
        $('#message').html(data.error);
    



      }

    });

  });
</script>
<script>
    function validateForm() {
        var password  = document.getElementById('password').value;
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



