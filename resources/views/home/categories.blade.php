@extends('home.layouts.app_category')
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
    <div class="inner-main">
        <div class="container" id="flashmessages">

            <div class="page-path-bx">
                <a class="home-icon" title="Home" href="{{url('/')}}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
                @if($subactegory == '')
                
                <span class="page-lnk">
                    <span class="sep-arrow">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span><span class="page-lnk">
                        <a class="home-icon" title="Biohazard Management" href="">{{$category_name}}</a>
                        <a></a>
                    </span>
                </span>
                @else
                <span class="sep-arrow">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
                <span class="page-lnk">
                    <a class="home-icon" title="Infection Control" href="{{url('categories'.'/'.$category_name.'/'.$id)}}">{{$category_name}}</a>
                    <span class="sep-arrow">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                     </span>
                    <span class="page-lnk">
                        <a class="home-icon" title="Biohazard Management" href="">{{$subactegory}}</a>

                    </span>
               
                @endif
            </div>

            <div class="side-main-bx-wrapper clearfix">
                <div class="sidebar-box">
                    <div class="sidebar-lnk-typ2-box my-account-sidebar mrg50-B R-mrg30-B">
                        <ul id="tree1" class="tree">
                            <!-- <li class="parentcategory"> -->



                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->

                            @foreach($category as $cat)
                            <li class=""><a href="{{url('categories'.'/'.$cat->category_name.'/'.$cat->id)}}" class="togglemenu" id="Medical Supplies"><span class="side-menu-linsk">{{$cat->category_name}}</span></a>
                                @foreach($subCategory as $subCat)
                                @if($subCat->category_id == $cat->id)
                                <ul class="second-level">
                                    <li class=""><a role="button" href="{{url('category'.'/'.$subCat->id.'/'.$cat->category_name.'/'.$subCat->sub_category_name)}}" class="togglemenu" id="sub_categories">{{$subCat->sub_category_name}}</a></li>
                                </ul>
                                @endif
                                @endforeach
                            </li>
                            @endforeach
                            <!-- </li> -->
                        </ul>

                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $(".togglemenu").click(function() {
                            var id = this.id;
                            $("." + id).toggle();
                            $(this).toggleClass("active");
                        });
                    });
                </script>
                <div class="main-box">
                    <div class="product-main">
                        <div class="filter-box-outer mrg30-B R-mrg30-B">

                            <div class="filter-row-box clearfix">

                                <div class="filter-left"> There are {{ count($product)}} products </div>
                                <div class="filter-right"> <span class="filter-icon-txt"> <span class="filter-txt">Filter By</span><span class="filter-icon"></span> </span> </div>
                            </div>
                            <div class="filter-checkbox-wrapper">
                                <div class="filter-checkbox-row">
                                </div>
                            </div>
                            <div class="product-list-wrapper clearfix">
                                @foreach($product as $item)

                                <div class="product-list-box ">

                                    <div class="image-row set-alignment-issues image-product-details"><a href="{{ url('single-product').'/'. $item->id}}">
                                            <div class="image" style="border: none;"><img src="{{asset('/products/'.$item->product_image)}}" alt="Stokolan® Light Gel (100ml)" /></div>
                                        </a>
                                        <span class="" id="loader859"></span>
                                        <span class="cart-icon-typ2-cover">
                                            <span class="cart-icon-typ2-wrap">
                                                <span class="cart-icon-typ2-sec">
                                                    <span class="not-logged-in cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="859" href="javascript:void(0);"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <div class="quick-now-btn" href="#stokolan-light-gel-100ml-0" id="{{$item->id}}" namespace="tfd" title="Quick View">Quick View</div>
                                    </div>
                                    <div class="content-row">
                                        <a href="/products/item/stokolan-light-gel-100ml-859">
                                            <div class="text-typ prod-name-typ">{{$item->product_name}}</div>
                                            <span class="title-typ prod-code-title">Code :123</span>
                                            <span class="text-typ prod-code-typ"> {{$item->product_code}} </span>
                                        </a>
                                    </div>
                                    <input type="hidden" value="Each" id="UnitIds859">

                                </div>

                                @endforeach
                                <div style="display:none;">

                                    <div id="stokolan-light-gel-100ml-0" class="popup-box-typ2">
                                        <div class="popup-quick">

                                            <div class="prod-detail-outer">
                                                <div class="prod-detail-wrap clearfix">
                                                    <div class="prod-detail-left-box-wrap clearfix">
                                                        <div class="prod-detail-left-box">
                                                            <a href="{{url('/')}}">
                                                                <div class="hd-typ3" id="name"></div>
                                                            </a>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="prod-detail-img pos-rel pop_specific">

                                                                        <div class="owl-carousel owl-theme owl-pr-details-block" style="height: 50px;">
                                                                            <div class="item">
                                                                                <img id="image" src="" alt="Product detail" />

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

                                            </div><span class="" id="loaders859"></span>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- ajax $ not defined -->


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#sub_categories').on('click', function(e) {
        alert();
        e.preventDefault();
        $.ajax({

            url: $(this).attr('action'),
            method: "get",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                console.log(data)
                // $('#message').css('display', 'block');
                // if(data.code == 200){
                //     $('#message').html(data.message);
                //   location.reload()
                // }
                // $('#message').html(data.error);


            }

        });

    });
</script>

@endsection