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

<style>
    .quick-now-btn-single:hover {
        background: #f57d25;
        color: #ffffff;
    }

    .quick-now-btn-single,
    .prod-box .quick-now-btn11 {
        position: absolute;
        padding: 10px 15px;
        background: #66bf51;
        color: #ffffff;
        font-size: 14px;
        text-align: center;
        width: 100%;
        left: 0;
        bottom: -40%;
        transition: all 0.7s ease 0s;
        -webkit-transition: all 0.2s ease 0s;
        text-transform: uppercase;
        opacity: 0;
        cursor: pointer;
    }
</style>

<!-- alert -->

<section>
    <div class="inner-main">
        <div class="container" id="flashmessages">
            <style type="text/css">
                .color-orange {
                    color: orange !important;
                }
            </style>
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="{{('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                <!-- <span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> -->
                <span class="page-lnk">
                    <!-- <a class='home-icon' title='Healthcare' href="{{('/')}}">Healthcare</a> -->
                    <!-- <span class='sep-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></span><span class='page-lnk'><a class='home-icon' title='Liquid & Foam Dispensers' href="{{('/')}}">Liquid & Foam Dispensers</a></span>
                    <span class='sep-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></span><span class='page-lnk'><a class='home-icon' title='Dispensers' href="{{('/')}}">Dispensers</a></span>
                    <span class='sep-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></span><span class='page-lnk'>Proline Manual Sanitizer Dispenser (1L)

                    </span></span> -->
            </div>
            <!--<div class="page-path-bx"> <a class="home-icon" title="Home" href="https://hygreen.qa"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><a class="page-lnk" href="#products/?name=healthcare"> Healthcare</a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">Proline Manual Sanitizer Dispenser (1L)</span> </div>-->
            <div class="prod-detail-outer">
                <div class="prod-detail-wrap clearfix">
                    <div class="prod-detail-left-box-wrap clearfix">
                        <div class="prod-detail-left-box">
                            <div class="hd-typ3">*{{$product->product_name}}</div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="prod-detail-img pos-rel">
                                        <div class="owl-carousel owl-theme owl-pr-details-block">

                                            <div class="item">
                                                <img src="{{asset('/products/'.$product->product_image)}}" alt="Product detail" /> <a class="zoom-icon-typ" href="#"><img src="/images/prod-detail-zoom.png" /></a>
                                                <div style="display:none;">
                                                    <div id="popup-image-box"> <img src="{{asset('/products/'.$product->product_image)}}" /> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stock-main">
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ url('add_cart').'/'. $product->id}}" method="post" enctype="multipart/form-data">

                                    <div class="col-md-7">
                                        <div class="desc-box clearfix">
                                            <div class="desc-content"></div>
                                        </div>
                                        <div class="prod-detail-info">
                                            <div class="prod-detail-info-row"> <span class="left-col">Product Code : </span> <span id="product_code" class="right-col">{{$product->product_code}}</span> </div>
                                            <div class="prod-detail-info-row"> <span class="left-col">Brand: </span><span id="product_code" class="right-col">{{$product->product_brand}}<!-- <a class="right-col" href="#" title="Deb"></a>--> </span></div>
                                            <div class="prod-detail-info-row"> <span class="left-col">Country of Origin: </span> <span id="product_code" class="right-col">{{$product->product_origin_country}}</span> </div>
                                            <div class="prod-detail-info-row"> <span class="left-col">Packaging: </span> <span id="product_code" class="right-col"> {{$product->product_packging_quantity}} Each / Carton <!--  Each-->
                                                </span> </div>
                                            <div class="prod-detail-info-row"> <span class="left-col">Barcode: </span> <span id="product_code" class="right-col">{{$product->product_barcode}}</span> </div>
                                            <div class="prod-detail-info-row"> <span class="left-col">MSDS: </span><span id="product_code" class="right-col">{{$product->product_msds}}</span></div>
                                            <div class="prod-detail-info-row border-top-typ"> <span id="product_code" class="left-col incr-box-col">
                                                    <table class="incr-box">

                                                        <tr>
                                                            <td><span class="td-brdr minus-td" id="0">-</span></td>
                                                            <td><span class="td-brdr"><input type="number" class=" qty0" name="quantity" value="1"></span></td>
                                                            <td><span class="td-brdr plus-td productplus" id="0">+</span></td>
                                                        </tr>
                                                    </table>
                                                </span><span class="right-col">
                                                    <select name="UnitId" id="UnitId">
                                                        <option value="Each">Each</option>
                                                        <option value="Carton">Carton</option> <!--  -->
                                                    </select>

                                                </span> </div>

                                            <span class="" id="loaders35"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="prod-detail-info-row bottom-btn-row">
                                                    <span class="left-col">
                                                        @csrf
                                                        @if(Auth::user() == null)
                                                        @else
                                                        <input type="hidden" value="{{ Auth()->user()->id }}" name="uid">

                                                        @endif
                                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                        <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                                                        <input type="hidden" value="{{ $product->product_price }}" name="product_price">
                                                        <input type="hidden" value="{{ $product->product_image }}" name="product_image">
                                                        <input type="hidden" value="{{ $product->product_id }}" name="category">
                                                        <!-- <input type="hidden" value="1" name="quantity"> -->
                                                        <button class="submit btn-typ3 addtocartdetail 2" type="submit"> Add to cart</button>


                                                        <!-- <a class="btn-typ3 addtocartdetail 2" id="35" href="javascript:void(0);" title="Add to cart">
                                                        Add to cart
                                                    </a> -->
                                                    </span>
                                                    <span class="right-col">
                                                        <a class="btn-typ4" href="{{ url('/')}}" title="Return to Item List">Return to Item List</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="related-products-outer">
                    <h4 class="hd-typ12 R-align-C">OTHER OPTIONS</h4>
                    <div class="related-products-slider">
                        <div class="owl-carousel owl-theme">

                            @foreach($products as $product)

                            <div class="item">
                                <div class="rel-prod-box">
                                    <div class="image-sec pos-rel">
                                        <span class="" id="loader404"></span>

                                        <a href="{{ url('single-product').'/'. $product->id}}"><img src="{{asset('/products/'.$product->product_image)}}" /></a>
                                        <span class="cart-icon-typ2-cover"><span class="cart-icon-typ2-wrap"><span class="cart-icon-typ2-sec"><span class="cart-icon-typ2 addtocart" id="404" href="javascript:void(0);"></span></span></span></span>
                                        <input type="hidden" value="Each" id="UnitIds404">



                                        <div class="quick-now-btn" id="{{$product->id}}" href="#deb-handrub-display-board-a4-447" namespace="tfd" title="Quick View">{{$product->product_name}}</div>
                                    </div>
                                    <div class="rel-prod-name">
                                        <a href="{{ url('single-product').'/'. $product->id}}">
                                            {{$product->product_name}}
                                        </a>
                                        <!-- <span class="" id="loader'1"></span> -->
                                        <span class="cart-icon-typ2-cover">
                                            <span class="cart-icon-typ2-wrap">
                                                <span class="cart-icon-typ2-sec">
                                                    <!-- Cart -->

                                                    <span style=" position: static;" class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product">
                                                        <form action="{{ url('add_cart').'/'. $product->id}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @if(Auth::user() == null)
                                                            @else
                                                            <input type="hidden" value="{{ Auth()->user()->id }}" name="uid">

                                                            @endif
                                                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                            <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                                                            <input type="hidden" value="{{ $product->product_price }}" name="product_price">
                                                            <input type="hidden" value="{{ $product->product_image }}" name="product_image">
                                                            <input type="hidden" value="{{ $product->product_id }}" name="category">
                                                            <input type="hidden" value="{{ $product->product_code }}" name="product_code">
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

                                </div>


                            </div>
                            @endforeach

                        </div>

                    </div>


                </div>
                <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
                <script>
                    $(document).ready(function() {
                        $(".minus-td").on("click", function() {
                            var button = $(this).attr('id');
                            var qty = $('.qty' + button).val();
                            var newVal = parseFloat(qty) - 1;
                            if (newVal > 0) {
                                $('.qty' + button).val(newVal);
                                newVal = newVal;
                            } else {
                                $('.qty' + button).val(1);
                                newVal = 1;
                            }
                            $.ajax({
                                    method: "GET",
                                    url: '/order/updateqty?id=' + button + '&qty=' + newVal,
                                    //data: { name: "John", location: "Boston" }
                                })
                                .done(function(msg) {

                                });
                        });
                        $(".productplus").on("click", function() {
                            var button = $(this).attr('id');
                            var qty = $('.qty' + button).val();
                            var newVal = parseFloat(qty) + 1;
                            if (newVal > 0) {
                                $('.qty' + button).val(newVal);
                                newVal = newVal;
                            } else {
                                $('.qty' + button).val(1);
                                newVal = 1;
                            }

                        });
                        $(".close-icon").on("click", function() {
                            var id = $(this).attr('id');
                            $.ajax({
                                    method: "GET",
                                    dataType: "json",
                                    url: '/order/delete?id=' + id,
                                    //data: { name: "John", location: "Boston" }
                                })
                                .done(function(msg) {
                                    $(".product" + id).fadeOut('fast');
                                    $('#cartitem').html(msg["count"]);
                                    //alert( "Data Saved: " + msg );
                                });

                        });
                    });
                </script>
            </div>

        </div>
        <div style="display:none;">
            <div id="deb-handrub-display-board-a4-447" class="popup-box-typ2">
                <div class="popup-quick">
                    <div class="prod-detail-outer">
                        <div class="prod-detail-wrap clearfix">
                            <div class="prod-detail-left-box-wrap clearfix">
                                <div class="prod-detail-left-box">
                                    <div class="hd-typ3" id="name"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="prod-detail-img pos-rel pop_specific">

                                                <div class="owl-theme owl-pr-details-block" style="height: 50px;">
                                                    <div class="item">
                                                        <img style="    margin-top: 100px;" id="image" src="" alt="Product detail" />

                                                    </div>
                                                </div>
                                                <div class="stock-main"></div>
                                            </div>

                                        </div>
                                        <div class="col-md-7">

                                            <div class="desc-box clearfix">
                                                <div class="desc-content"></div>
                                            </div>
                                            <div class="prod-detail-info" style="margin-left: 40px;">
                                                <div class="prod-detail-info-row"> <span class="left-col">Product Code : </span> <span id="product_code" class="right-col">SGE100ML</span> </div>
                                                <div class="prod-detail-info-row"> <span class="left-col">Brand: </span><span id="product_brand" class="right-col">4016208309476</span> </div>
                                                <div class="prod-detail-info-row"> <span class="left-col">Country of Origin: </span> <span id="origin" class="right-col">United Kingdom</span> </div>
                                                <div class="prod-detail-info-row"> <span class="left-col">Packaging: </span> <span id="packeging" class="right-col">12 Each / Carton</span> </div>
                                                <div class="prod-detail-info-row"> <span class="left-col">Barcode: </span> <span id="barcode" class="right-col">4016208309476</span> </div>
                                                <div class="prod-detail-info-row"> <span class="left-col">MSDS: </span><span id="msds" class="right-col">4016208309476</span>
                                                </div>
                                                <form action="{{ url('cart_cart')}}" method="post" enctype="multipart/form-data">

                                                    @csrf
                                                    @if(Auth::user() == null)
                                                    @else
                                                    <input type="hidden" value="{{ Auth()->user()->id }}" name="uid">

                                                    @endif
                                                    <input type="hidden" id="id" name="product_id">
                                                    <input type="hidden" id="product_name" name="product_name">
                                                    <input type="hidden" id="product_price" name="product_price">
                                                    <input type="hidden" id="product_image" name="product_image">
                                                    <input type="hidden" id="category_id" name="category">
                                                    <!-- <input type="hidden"  name="quantity"> -->



                                                    <div class="prod-detail-info-row border-top-typ"> <span class="left-col incr-box-col">
                                                            <table class="incr-box">
                                                                <tr>
                                                                    <td><span class="td-brdr minus-td" id="859">-</span></td>
                                                                    <td><span class="td-brdr"><input name="quantity" type="number" class="qty859" value="1"></span></td>
                                                                    <td><span class="td-brdr plus-td productplus" id="859">+</span></td>
                                                                </tr>
                                                            </table>
                                                        </span><span class="right-col"> <select name="UnitId" id="UnitId859">
                                                                <option value="Each">Each</option>
                                                                <option value="Carton">Carton</option>
                                                            </select>


                                                        </span>
                                                    </div>
                                                    <button class="submit btn-typ3 addtocartdetail 2" type="submit"> Add to cart</button>
                                                    <!-- <div class="prod-detail-info-row bottom-btn-row">
                                                                                <span class="left-col">
                                                                                    <a class="btn-typ3 addtocartdetailquick" id="859" href="javascript:void(0);" title="Add to cart">Add to cart</a>
                                                                                </span>
                                                                            </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<script src="/js/owl.carousel.min.js"></script>


<script type="text/javascript">
    /*Related product slider Start*/
    $('.related-products-slider .owl-carousel').owlCarousel({
        loop: true,
        slideBy: 3,
        autoplay: true,
        margin: 20,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            980: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    })
    $(".related-products-slider .owl-prev").html('<i class="fa fa-arrow-left"></i>');
    $(".related-products-slider .owl-next").html('<i class="fa fa-arrow-right"></i>');
    /*Related product slider End*/
</script>


<script>
    $(document).ready(function() {
        $('.quick-now-btn').click(function(e) {
            var pass = $(this).attr('id');

            $.ajax({
                type: 'get',
                dataType: "json",
                url: '/view/' + pass,
                data: {
                    id: pass
                },
                success: function(data) {
                    console.log(data)

                    $('#image').attr('src', data.products.product_image);
                    $('#product_name').val(data.products.product_name);
                    $('#product_price').val(data.products.product_price);
                    $('#product_brand').val(data.product_brand);
                    $('#category_id').val(data.products.category_id);
                    $('#product_image').val(data.image.product_image);
                    $('#product_quantity').val(data.products.product_quantity);
                    $('#id').val(data.products.id);

                    $('#image').attr('src', data.products.product_image);
                    $('#name').html(data.products.product_name);
                    $('#product_code').html(data.products.product_code);
                    $('#product_brand').html(data.products.product_brand);
                    $('#origin').html(data.products.product_origin_country);
                    $('#packeging').html(data.products.product_packging_quantity);
                    $('#barcode').html(data.products.product_barcode);
                    $('#msds').html(data.products.product_msds);
                    if (data == "1") {
                        //  window.location="https://hygreen.qa/products/details?name="+pass;
                    } else {
                        $('#myModallimit').modal('show');
                    }
                    // $("#success").slideDown();    
                    //alert(response);
                    /*document.getElementById("success").innerHTML=data["response"];
                    $('#cartitem').html(data["count"]);
                     $("#success").fadeIn("slow");
                     $("#success").fadeOut(8000);*/
                }
            });

        });


    });
</script>


</html>

@endsection