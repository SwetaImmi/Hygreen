<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="Iph6-T7YNIWp5gGcNEVvjElstd4wXzfT_0KiAeV8US1oxyyjapplsp3VNfVgMhrEPy7tl0AebqOrMO5IkzkVTw==">
    <title>Skin-protection</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="#favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ef822d04a7c6258179b78f1/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KFF7B9D');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2722487427964562');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2722487427964562&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131088079-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-131088079-1');
    </script>







    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/navigation.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/flexslider.css" rel="stylesheet">
    <link href="/css/colorbox.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/jquery.scrolling-tabs.css" rel="stylesheet">
    <link href="/css/tree-menu.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/jquery-ui.css" rel="stylesheet">

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFF7B9D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div class="wrapper">
        <!-- ***** Header Area Start ***** -->
        @include('home.layouts.header')
        <!-- ***** Header Area End ***** -->
        @yield('content')

        <style type="text/css">
            .owl-stage-outer .item a.prod-slide-box:hover .cart-icon-typ2-cover .cart-icon-typ2,
            .owl-stage-outer .owl-item .item .prod-slide-box-wrapper .prod-slide-box:hover .cart-icon-typ2-cover .cart-icon-typ2 {
                top: 30px !important;
            }
        </style>



        <!-- ***** footer Area Start ***** -->
        @include('home.layouts.footer')
        <!-- ***** footer Area End ***** -->







    </div>
    <script src="/js/jquery.js"></script>
    <script src="/js/yii.js"></script>
    <script src="/js/tree-menu.js"></script>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.colorbox.js"></script>
    <script src="/js/jquery.scrolling-tabs.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/anlysis.js"></script>
    <script src="/js/timeme.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
 
    <script type="text/javascript">
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
            /*User Category Slider end*/

            // User category Tab start

            /*$( ".prod-slider-box-sec .owl-carousel .owl-nav .owl-prev" ).click();
            if(jQuery(window).width() > 979){
            	$('.users-tab-list ul > li').click(function(){
            			$('.users-tab-list ul > li').removeClass('active');
            			$('.tab-box').removeClass('current');
            			$(this).addClass('active');
            			var ThisIndex = $(this).index();
            			$(this).parent().parent().parent().parent().next().find(".tab-box").eq(ThisIndex).addClass('current');
            	});
            }*/

            // User category Tab End

            // User category Tab responsive end
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

        $(document).ready(function() {
            /*Midbar banner*/
            $('.midbar-slider .owl-carousel').owlCarousel({
                onInitialized: console.log("initialisation"),
                loop: true,
                autoplay: true,
                nav: true,
                autoplayTimeout: 7000,
                margin: 0,
                smartSpeed: 2000,
                //animateOut: 'fadeInDown',
                //animateIn: 'fadeInDown',
                autoHeight: true,
                responsive: {
                    0: {
                        items: 1
                    }

                }
            })
            $(".midbar-slider .owl-prev").html('<i class="fa fa-angle-left"></i>');
            $(".midbar-slider .owl-next").html('<i class="fa fa-angle-right"></i>');
            /*Midbar banner end*/

            //$(".prod-slider-box-sec .owl-carousel .owl-nav .owl-prev").click();
        });

        if (jQuery(window).width() > 979) {
            $('.users-tab-list ul > li').click(function() {
                if ($(".users-tab-list ul > li").hasClass('active') == true) {
                    $(this).prev().find(".icon-txt-wrap").css("border-right", "none");
                } else {
                    $(this).prev().find(".icon-txt-wrap").css("border-right", "1px solid #c3c3c3");
                }
            });
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="/js/site-script.js"></script>
    <script>
        $('.prod-detail-img .owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            autoHeight: true,
            autoplay: true,
            autoplayTimeout: 10000,
            smartSpeed: 2000,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
    <script>
        $(window).load(function() {
            if (window.location.pathname == '/order/quotation') {
                // var newurl = "#products/cart";
                $("input[name='pkhiddenval']").val('order_quotation');
            }
        });
        /* $(window).load(function(){        
           $('#myModal').modal('show');
            }); */
    </script>
    <!--New code login popup  -->
    <!-- End of new edits -->
    <script>
        $(document).ready(function() {
            $('#formsearch input').attr('name', 'val');
            // setInterval("my_function();",1000); 
            function my_function() {
                //alert("gdgg");
                //$("#cartitem" ).load( "/order/cartcount/" );
            }

            $('.search-expand > input').keypress(function(event) {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    //search();
                    $('#formsearch').submit();
                }
            })


        });

        function search() {
            $('.loader-image').show();
            if ($('.search-expand > input').val() != '') {
                $('#formsearch').submit();
                $.ajax({
                    url: "#products/search",
                    type: 'post',
                    data: {
                        val: $('.search-expand > input').val()
                    },
                    success: function(data) {
                        $('body').html(data);
                        $.noConflict();
                    }
                })
            }
        }

        function searchByAutocomplete() {
            $('.loader-image').show();
            if ($('.search-expand  input').val() != '') {
                data = $('.search-expand  input').val();
                $.ajax({
                    url: "#products/search-detail",
                    type: 'post',
                    data: {
                        val: data
                    },
                    success: function(data) {
                        // window.location.href="#products/details/?name="+data
                        window.location.href = "#products/item/" + data
                    }
                })
            }
        }

        function closelogin() {
            var uri = window.location.toString();
            if (uri.indexOf("?") > 0) {
                var clean_uri = uri.substring(0, uri.indexOf("?"));
                window.history.replaceState({}, document.title, clean_uri);
            }
            window.location.reload();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script>
        $(document).ready(function() {

        });
        $(document).ready(function() {

            $(document).on('click', '.availablein,.availableindetail', function() {
                var pid = $(this).data('id');
                var pname = $(this).data('pname');
                var pimage = $(this).data('image');
                $.ajax({
                    url: '/site/getavailablemodal?pid=' + pid + '&pname=' + pname + '&pimage=' + pimage,
                    error: function() {
                        $('#availablecontent').empty();
                        $('#availablecontent').html('<p>An error has occurred</p>');
                        $('#exampleModal1').modal('show');
                    },
                    success: function(data) {
                        $('#availablecontent').empty();
                        $('#availablecontent').append(data);
                        $('#exampleModal1').modal('show');
                    },
                    type: 'GET'
                });

            });



            $('[data-toggle=tooltip]').tooltip();



            
            $('.quick-now-btn').click(function(e) {
                var pass = $(this).attr('id');
                // alert(pass)
                var productData = "D:\Sweta\HyGreen\public\products";
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '/view/' + pass,
                    data: {
                        id: pass
                    },
                    success: function(data) {
                        console.log(data)

                        $('#image').attr('src' ,data.products.product_image);
                        $('#product_name').val(data.products.product_name);
                        $('#product_price').val(data.products.product_price);
                        $('#product_brand').val(data.product_brand);
                        $('#category_id').val(data.products.category_id);
                        $('#product_image').val(data.image.product_image);
                        $('#product_quantity').val(data.products.product_quantity);
                        $('#id').val(data.products.id);
                        
                        $('#image').attr('src' ,data.products.product_image);
                        $('#name').html(data.products.product_name);
                        $('#product_code').html(data.products.product_code);
                        $('#product_brand').html(data.products.product_brand);
                        $('#origin').html(data.products.product_origin_country);
                        $('#packeging').html(data.products.product_packging_quantity);
                        $('#barcode').html(data.products.product_barcode);
                        $('#msds').html(data.products.product_msds);
                        if (data == "1") {
                            //  window.location="#products/details?name="+pass;
                        } else {
                            $('#myModallimit').modal('show');
                        }
                       
                    }
                });

            });

       
        });

        var pkqty = "2";
        $("#cart-list > tbody > .trproductcls").each(function() {
            /* if(window.location.pathname == '/order/calculate'){
            	pkqty = pkqty + parseInt($(this).find(".dataqty").html());
            }else{
            	pkqty = pkqty + parseInt($(this).find("input").val());
            } */
        });


        $('.account-info-edit, #submitforgotS').click(function() {
            $('#colorbox').addClass('colorbox_login');
            $('#cboxOverlay, #cboxClose').click(function() {
                $('#colorbox').removeClass('colorbox_login');
            });
        });
    </script>
</body>


</html>