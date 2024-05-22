@extends('home.layouts.app')
@section('content')

<!-- alert -->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<!-- alert -->


<section>
    <div class="midbar-slider-box">
        <!-- wow zoomIn animated" data-wow-delay="7s"-->
        <div class="midbar-slider pos-rel">
            <div class="owl-carousel owl-theme">
                @foreach($banner as $banners)
                <div class="item">
                    <div class="slide-image-sec">


                        <a href="{{url('/')}}">
                            <div class="resp-image"><img class="" src="{{asset('/backend/Banner/'.$banners->image)}}" alt="Banner" style="width: 1349px; height:332px;" /></div>
                            <div class="mid-caption-wrapper">
                                <div class="container">
                                    <div class="mid-caption-bx">
                                        <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                        <div class="btm-txt-bx">
                                            The FNI 41cc Chainsaw is Here!
                                        </div>
                                        <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </div>
</section>
<section class="users-tab-outer-sections">
    <div class="users-tab-outer" id="sectional-tab-list">

        <div class="users-tab-list-outer" id="sec-tablist-id">
            <div class="container">
                <div class="users-tab-list">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($category as $categories)
                        <li role="presentation" class='grouplistview' title="Hospital & Clinic" class="grouplistview" data-toggle="tooltip" data-placement="top" id="{{$categories->id}}">
                            <a role="tab" data-toggle="tab">
                                <span class="icon-txt-wrap">
                                    <span class="icon-box">
                                        <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                        <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                    </span>
                                    <span class="text-box groupname">{{$categories->category_name}}</span>
                                </span>
                            </a>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- <div class="product"></div> -->

        <div class="users-tab-list-container">
            <div class="container">

                <div role="tabpanel" class="tab-pane active" id="tabHospitalClinic">
                    <div class="tab-box current">
                        <div id="prod-slider-box-sec" class="prod-slider-box-sec" style="display:block;">
                            <div id="owl-carousel" class="owl-carousel owl-theme">


                                <div class="item" style="display:block;">
                                    <div id="prod-slide-box-wrapper" class="prod-slide-box-wrapper ">
                                        @foreach($products as $item)


                                        <div class="prod-slide-box">

                                            <a href="{{ url('single-product').'/'. $item->id}}">
                                                <span class="img-box">
                                                    <img class="owl-lazy" data-src="{{asset('/products/'.$item->product_image)}}" />
                                                    <span class="" id="loader1"></span>
                                                </span>


                                                <span class="prod-name-title">{{$item->product_name}}</span>
                                            </a>
                                            <span class="" id="loader'1"></span>
                                            <span class="cart-icon-typ2-cover">
                                                <span class="cart-icon-typ2-wrap">
                                                    <span class="cart-icon-typ2-sec">
                                                        <!-- Cart -->

                                                        <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product">
                                                            <form action="{{ url('add_cart').'/'. $item->id}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @if(Auth::user() == null)
                                                                @else
                                                                <input type="hidden" value="{{ Auth()->user()->id }}" name="uid">

                                                                @endif
                                                                <input type="hidden" value="{{ $item->id }}" name="product_id">
                                                                <input type="hidden" value="{{ $item->product_name }}" name="product_name">
                                                                <input type="hidden" value="{{ $item->product_price }}" name="product_price">
                                                                <input type="hidden" value="{{ $item->product_image }}" name="product_image">
                                                                <input type="hidden" value="{{ $item->product_id }}" name="category">
                                                                <input type="hidden" value="{{ $item->product_code }}" name="product_code">
                                                                <input type="hidden" value="1" name="quantity">
                                                                <input type="hidden" name="UnitId" value="Each">
                                                                <button class="submit" type="submit"><i class="fa fa-plus" style="color: #57bf33;"></i></button>

                                                            </form>

                                                        </span>
                                                        <!-- Cart End -->
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <input type="hidden" value="Each" id="UnitIds1">
                                        @endforeach


                                    </div>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="users-tab-outer">

        <div class="container">
            <div class="intro-content-video-box">
                <div class="row">
                    <div class="col-md-6 sm-mrg30-B R-mrg30-B">

                        <h2 class="hd-typ1 homeTitle">Hy<span>Green</span>
                            <span class="homeCaption">Your local healthcare partner</span>
                        </h2>
                        <div class="common-content mrg30-B R-mrg30-B">
                            Hygreen brings world-class infection prevention and control, healthcare and facility management solutions to Qatar. Our focus is on supporting our customers by delivering the required solution when and where it is required. </div>
                        <div class="read-more-btn-bx"><a class="btn-typ2" title="Read More">Read More</a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="video-sec-box">
                            <iframe width="100%" height="340" src="https://www.youtube.com/embed/Imqk0tjOWZY" frameborder="0" ; encrypted-media=" allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script defer src="plugins/OwlCarousel2.3/owl.carousel.min.js"></script>




<!-- <script type="text/javascript">
    $(document).ready(function() {


        $('.prod-slider-box-sec .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoHeight: true,
            autoplay: false,
            lazyLoad: true,
            autoplayTimeout: 10000,
            smartSpeed: 2000,
            nav: true,
            items: 1
        });
        $(".prod-slider-box-sec .owl-prev").html('<i class="fa fa-angle-left"></i>');
        $(".prod-slider-box-sec .owl-next").html('<i class="fa fa-angle-right"></i>');

        $('.resp-tab-title').click(function() {
            if (jQuery(window).width() < 1199) {
                $('.resp-tab-title').removeClass("current");
                var xxx = $(this);
                if (xxx.hasClass('current')) {
                    xxx.removeClass('current');
                } else {
                    xxx.addClass('current');
                }
                $(this).next().toggleClass("expand").slideToggle(100, function() {
                    $('.resp-tab-title').each(function() {
                        if ($(this).hasClass("current") == false && $(this).next().hasClass("expand") == true) {
                            $(this).next().toggleClass("expand").slideToggle(100);
                        } else if ($(this).hasClass("current") == true && $(this).next().hasClass("expand") == false) {
                            $(this).removeClass("current");
                        }
                    });
                });
            }
        });
        // User category Tab responsive start
    });

    //$( window ).load(function() {

    // $(document).ready(function() {
    //     /*Midbar banner*/
    //     $('.midbar-slider .owl-carousel').owlCarousel({
    //         onInitialized: console.log("initialisation"),
    //         loop: true,
    //         autoplay: true,
    //         nav: true,
    //         autoplayTimeout: 7000,
    //         margin: 0,
    //         smartSpeed: 2000,
    //         //animateOut: 'fadeInDown',
    //         //animateIn: 'fadeInDown',
    //         autoHeight: true,
    //         responsive: {
    //             0: {
    //                 items: 1
    //             }

    //         }
    //     })
    //     $(".midbar-slider .owl-prev").html('<i class="fa fa-angle-left"></i>');
    //     $(".midbar-slider .owl-next").html('<i class="fa fa-angle-right"></i>');
    //     /*Midbar banner end*/

    //     //$(".prod-slider-box-sec .owl-carousel .owl-nav .owl-prev").click();
    // });

    // if (jQuery(window).width() > 979) {
    //     $('.users-tab-list ul > li').click(function() {
    //         if ($(".users-tab-list ul > li").hasClass('active') == true) {
    //             $(this).prev().find(".icon-txt-wrap").css("border-right", "none");
    //         } else {
    //             $(this).prev().find(".icon-txt-wrap").css("border-right", "1px solid #c3c3c3");
    //         }
    //     });
    // }
</script> -->

@endsection