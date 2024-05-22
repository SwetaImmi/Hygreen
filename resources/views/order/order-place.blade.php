@extends('home.layouts.app')
@section('content')
@php
$totalAmount = 0;
$itemCount = 0;
@endphp



<style>
    .textbox-typ2 {
        padding: 6px 8px;
    }

    .mrg25-B {
        margin-bottom: -7px;
    }
</style>

<section>
    <div class="inner-main">
        <div class="container" id="flashmessages">

            <div class="page-path-bx cart-common-layout  ">

                <div class="top-tab-list-typ1 left-box ">
                    <ul class="clearfix">
                        <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">View Selected Items</span></li>
                        <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">Calculate Order</span></li>
                        <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">Delivery Address</span></li>
                        <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">Review & Payments</span></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-md-5 card">
                    <div class="cart-table-typ typ2" style="padding-top: 15px; padding-right: 40px;">
                        <table id="cart-list">
                            <tr>
                                <th>
                                    <div class="table-head-typ">products</div>

                                </th>
                                <th>
                                    <div class="table-head-typ">quantity</div>
                                </th>
                                <th>
                                    <div class="table-head-typ">unit</div>
                                </th>
                            </tr>
                            @foreach($cart as $item)
                            @if(Auth::user()->id == $item['user_id'])


                            <tr class="trproductcls product0">
                                <td>
                                    <div class="td-prod-sec">
                                        <span class="close-icon-wrap">
                                            <a class="close-icon" href="{{ url('cdelete').'/'. $item['id']}}" id="0">
                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                        <span class="prod-img">
                                            <img src="{{asset('products/'.$item->product->product_image)}}" style="    height: 50px; " />
                                        </span>
                                        <span style="font-size: 12px;" class="prod-name-text" id="limit-error-msg0"> {{ $item->product->product_name }}<span class="prod-sec-txt">

                                            </span>
                                            <span style="font-size: 10px;" class="prd-code">Product Code : {{ $item->product->product_code }}</span>
                                            <span style="font-size: 10px;" class="prd-code">Product Price : ${{ $item->product->product_price }}</span>
                                            <span style="font-size: 10px;" class="prd-code">Total Price : ${{ $item->product->product_price*$item['product_quantity'] }}</span>

                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <table class="incr-box">
                                        <tbody>
                                            <tr>
                                                <form action="{{ url('cart_update').'/'. $item['id']  }}" method="POST">
                                                    @csrf
                                                    <div class="input-group w-auto justify-content-end align-items-center">
                                                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                                                        <input type="number" min="1" step="1" max="10" value="{{$item['product_quantity']}}" id="quantity" name="quantity" class="quantity-field border-0 text-center w-15" style="width: 20px;">
                                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                    </div>
                                                    <!-- <input type="hidden" id="id" name="id" value="{{ $item['product_id']}}"> -->
                                                    <button type="submit" class="btn btn-secondry btn-rounded btn-icon"><i class="fa fa-refresh" style="font-size:15px;color:#57bf36"></i></button>
                                                </form>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td class="fw-B fs16">Each</td>
                            </tr>

                            @php
                            $totalAmount += $item->product->product_price*$item->product_quantity;
                            $itemCount += $item->product_quantity;
                            @endphp

                            @endif
                            @endforeach

                        </table>
                        <table class="cart-empty" style="display:none">
                            <tr>
                                <td class="fw-B fs16 empty-part">Your Shopping Cart is empty</td>
                            </tr>
                        </table>
                        <span style="     display: table-cell;    vertical-align: middle;    font-size: 20px;    color: #57bf36;
                                font-weight: 700;
                                line-height: 22px;
                                padding-left: 20px;
                                width: 65%;
                                position: relative; " class="prod-name-text" id="limit-error-msg0"> Total Amount :{{ $totalAmount }}<span class="prod-sec-txt"></span>

                    </div>
                </div>
                <form action="{{route('place.order.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="total_quantity" value="{{$itemCount}}">
                    <input type="hidden" name="total_amount" value="{{$totalAmount}}">
                    <input type="hidden" name="id" value="{{$address->id}}">
                    <div class="col-md-7" style="padding-left: 40px;">
                        <div class="checkout-contact-wrap">
                            <div class="hd-typ7 btm-brdr mrg30-B R-mrg30-B">
                                Order Payment</div>
                            <div class="form-row-box-typ">

                                <input type="hidden" id="hddn_field" name="hddn_field">
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">First name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="firstname" value="{{$address->firstname}}">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Last name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="lastname" value="{{$address->lastname}}">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Email Address *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="email" name="email" value="{{$address->email}}">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Mobile Number *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="tel" name="phone" value="{{$address->phone}}">
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="create-account-rows">
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Postal Code *</label>
                                                <span class="filed-sec">
                                                    <input id="postcode" class="textbox-typ2" type="text" name="postcode" value="{{$address->postcode}}">
                                                </span>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">Address1 *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" id="delivery_address1" name="delivery_address1" value="{{$address->delivery_address1}}">
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">Address2*</label>
                                                <span class="filed-sec">
                                                    <input id="address2" class="textbox-typ2" name="address2" value="{{$address->address2}}">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">City *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" id="city_town" type="text" name="city_town" value="{{$address->city_town}}">
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">State *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="state" id="state" value="{{$address->state}}">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">Country *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="country_delivery" id="country_delivery" value="{{$address->country_delivery}}">
                                                </span>
                                            </div>

                                        </div>
                                    </div>




                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="checkbox" type="checkbox" checked="checked" name="sameadr">
                                                    <label for="same-address"> Billing address is the same as my Shipping address</label>

                                                </div>
                                            </div>
                                        </div>
                                        @foreach( $cart as $buy)
                                        @php
                                        $userAddress = $address->firstWhere('user_id', Auth()->user()->id);
                                        @endphp

                                        @if($userAddress)
                                        <input type='hidden' name='product_id' value="{{$buy->product->id}}">
                                        <input type="hidden" name="order_details[{{$loop->index}}][aid]" value="{{$userAddress->id}}">
                                        @endif
                                        <input type='hidden' name='order_details[{{$loop->index}}][pid]' value="{{$buy->product->id}}">
                                        <input type='hidden' name='order_details[{{$loop->index}}][order_name]' value="{{$buy->product->product_name}}">
                                        <input type='hidden' name='order_details[{{$loop->index}}][product_quantity]' value="{{$buy->product_quantity}}">
                                        <input type='hidden' name='order_details[{{$loop->index}}][product_price]' value="{{$buy->product->product_price}}">
                                        <br>
                                        @endforeach
                                        <hr class="mb-4">
                                        <div id="myForm" style="display: none; ">
                                            <!-- Billing -->
                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">First name *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" value="{{$address->billing_firstname}}" name="billing_firstname">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">Last name *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" value="{{$address->billing_lastname}}" name="billing_lastname">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">Email Address *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" type="email" value="{{$address->billing_email}}" name="billing_email">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">Mobile Number *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" type="tel" value="{{$address->billing_phone}}" name="billing_phone">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                                <div class="col-md-6">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">Postal Code *</label>
                                                        <span class="filed-sec">
                                                            <input id="billing_postcode" class="textbox-typ2" type="text" value="{{$address->billing_postcode}}" name="billing_postcode">
                                                        </span>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-box mrg25-B">
                                                        <label class="lbl-typ">Address1 *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" id="billing_delivery_address1" value="{{$address->billing_delivery_address1}}" name="billing_delivery_address1">
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                                <div class="col-md-6">
                                                    <div class="field-box mrg25-B">
                                                        <label class="lbl-typ">Address2*</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" id="billing_address2" name="billing_address2" value="{{$address->billing_address2}}">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-box">
                                                        <label class="lbl-typ">City *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" id="billing_city_town" type="text" name="billing_city_town" value="{{$address->billing_city_town}}" readonly>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                                <div class="col-md-6">
                                                    <div class="field-box mrg25-B">
                                                        <label class="lbl-typ">State *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" name="billing_state" id="billing_state" value="{{$address->billing_state}}">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-box mrg25-B">
                                                        <label class="lbl-typ">Country *</label>
                                                        <span class="filed-sec">
                                                            <input class="textbox-typ2" name="billing_country_delivery" id="billing_country_delivery" value="{{$address->billing_country_delivery}}">
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- End Biling -->
                                        </div>

                                        <div class="d-block my-3">
                                            <div class="custom-control custom-radio">
                                                <input id="cash" name="paymentMethod" type="radio" class="custom-control-input" value="cash_on_delivery" required>
                                                <label class="custom-control-label" for="cash" style="padding-left: 25px;">Cash On Delivery</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <!-- for="show_payment"><input type="radio" name="payment_option" id="show_payment" value="show" -->
                                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="card_payment" required>
                                                <label class="custom-control-label" for="credit" style="padding-left: 25px;">Credit card</label>

                                            </div>
                                            <div class="custom-control custom-radio">
                                                <!-- for="show_payment"><input type="radio" name="payment_option" id="show_payment" value="show" -->
                                                <input id="upi" name="paymentMethod" type="radio" class="custom-control-input" value="card_payment" required>
                                                <label class="custom-control-label" for="upi" style="padding-left: 25px;">PayPal</label>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="field-box">
                                                    <div class="btm-align-btn-boxes">
                                                        <!-- <a href="{{url('order-placed'.'/'.$totalAmount)}}">next</a> -->
                                                        <button id="cash_checkout" class="btn-typ6" type="submit">Placed Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </form>
                <div id="upi_payment" style="display: none;">
                    <!-- Content for UPI payment -->
                    <form action="{{url('paypal/payment')}}" method="post">
                        @csrf
                        <input type="hidden" name="address_id" value="{{$address->id}}">
                        <input type="hidden" name="total_quantity" value="{{$itemCount}}">
                        <input type="hidden" name="total_amount" value="{{$totalAmount}}">

                        @foreach( $cart as $buy)
                        @php
                        $userAddress = $address->firstWhere('user_id', Auth()->user()->id);
                        @endphp

                        @if($userAddress)
                        <input type='hidden' name='product_id' value="{{$buy->product->id}}">
                        <input type="hidden" name="order_details[{{$loop->index}}][aid]" value="{{$userAddress->id}}">
                        @endif
                        <input type='hidden' name='order_details[{{$loop->index}}][pid]' value="{{$buy->product->id}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][order_name]' value="{{$buy->product->product_name}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][product_quantity]' value="{{$buy->product_quantity}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][product_price]' value="{{$buy->product->product_price}}">
                        <br>
                        @endforeach
                        <button class="btn-typ6" style="border-radius: 20px; margin-left: 25px; background-color:#4d6a42;" type="submit">PAYPAL ${{$totalAmount}}</button>
                    </form>
                </div>


                <div id="payment_card" style="display: none;">
                    <form id='checkout-form' method='post' action="{{ route('stripe.post') }}">
                        @csrf

                        <input type='hidden' name='stripeToken' id='stripe_token_id'>
                        <input type="hidden" name="paymentmode" value="Card">
                        <input type="hidden" name="total_amount" value="{{$totalAmount}}">
                        <input type="hidden" name="address_id" value="{{$address->id}}">
                        <input type="hidden" name="total_quantity" value="{{$itemCount}}">

                        @foreach( $cart as $buy)
                        @php
                        $userAddress = $address->firstWhere('user_id', Auth()->user()->id);
                        @endphp

                        @if($userAddress)
                        <input type='hidden' name='product_id' value="{{$buy->product->id}}">
                        <input type="hidden" name="order_details[{{$loop->index}}][aid]" value="{{$userAddress->id}}">
                        @endif
                        <input type='hidden' name='order_details[{{$loop->index}}][pid]' value="{{$buy->product->id}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][order_name]' value="{{$buy->product->product_name}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][product_quantity]' value="{{$buy->product_quantity}}">
                        <input type='hidden' name='order_details[{{$loop->index}}][product_price]' value="{{$buy->product->product_price}}">
                        <br>
                        @endforeach

                        <div id="card-element" class="form-control"></div>
                        <button id='pay-btn' class="btn btn-success mt-3" type="button" style="margin-top: 20px; width: 100%;padding: 7px;" onclick="createToken()">PAY ${{$totalAmount}}
                        </button>

                        <form>
                </div>




            </div>

            <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
            <script>
                function incrementValue(e) {
                    e.preventDefault();
                    var fieldName = $(e.target).data('field');
                    var parent = $(e.target).closest('div');
                    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                    if (!isNaN(currentVal)) {
                        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
                    } else {
                        parent.find('input[name=' + fieldName + ']').val(0);
                    }
                }

                function decrementValue(e) {
                    e.preventDefault();
                    var fieldName = $(e.target).data('field');
                    var parent = $(e.target).closest('div');
                    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

                    if (!isNaN(currentVal) && currentVal > 0) {
                        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
                    } else {
                        parent.find('input[name=' + fieldName + ']').val(0);
                    }
                }

                $('.input-group').on('click', '.button-plus', function(e) {
                    incrementValue(e);
                });

                $('.input-group').on('click', '.button-minus', function(e) {
                    decrementValue(e);
                });
            </script>
        </div>
    </div>
</section>



<script>
    $(document).ready(function() {
        $('#postcode').keyup(function() {
            var postcode = $(this).val();

            if (postcode.length >= 5) {
                $.getJSON('https://nominatim.openstreetmap.org/search?format=json&postalcode=' + postcode, function(data) {
                    if (data.length > 0) {
                        console.log(data)
                        console.log("Delivet To : ", data[0].display_name)
                        var parts = data[0].display_name.split(',')
                        if (!parts[2]) {
                            // alert(1)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            document.getElementById('country_delivery').value = part1;
                        } else if (!parts[3]) {
                            // alert(2)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            var paryt2 = parts[2].trim();
                            var city_st = [part1, paryt2]
                            document.getElementById('country_delivery').value = paryt2;
                            document.getElementById('city_town').value = city_st;
                        } else if (!parts[4]) {
                            // alert(3)
                            var part1 = parts[0].trim();
                            var city = parts[1].trim();
                            var state = parts[2].trim();
                            var country = parts[3].trim();
                            var city_st = [city, state]
                            document.getElementById('country_delivery').value = country;
                            document.getElementById('city_town').value = city;
                            document.getElementById('state').value = state;
                        } else {
                            var part1 = parts[1].trim();
                            var part2 = parts[2].trim();
                            var part3 = parts[3].trim();
                            var part4 = parts[4].trim();
                            var city_st = [part1, part2]
                            document.getElementById('country_delivery').value = part4;
                            document.getElementById('city_town').value = part2;
                            document.getElementById('delivery_address1').value = part1;
                            document.getElementById('state').value = part3;
                        }



                    } else {
                        $('#address').val('No address found');
                    }
                });
            }
        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {


        $('[type="checkbox"]').change(function() {

            if (this.checked) {
                $('[type="checkbox"]').not(this).prop('checked', false);
            }
        });

    });
</script>

<script>
    document.getElementById('checkbox').addEventListener('change', function() {
        var form = document.getElementById('myForm');
        var checkbox = document.getElementById('checkbox');

        if (checkbox.checked) {
            form.style.display = 'none'; // Hide the form if the checkbox is checked
        } else {
            form.style.display = 'block'; // Show the form if the checkbox is unchecked
        }
    });
</script>

<!-- Payment -->

<script>
    /*   Payment Method    */

    const showPaymentRadio = document.getElementById('credit');
    const hidePaymentRadio = document.getElementById('cash');
    const upiPaymentRadio = document.getElementById('upi');
    const paymentCardDiv = document.getElementById('payment_card');
    const cashPayment = document.getElementById('cash_checkout');
    const upiPayment = document.getElementById('upi_payment');

    showPaymentRadio.addEventListener('change', function() {
        if (this.checked) {
            paymentCardDiv.style.display = 'block'; // Show the div when 'Credit Card' is selected
            cashPayment.style.display = 'none'; // Hide Checkout 
            upiPayment.style.display = 'none'; // Hide UPI Payment
        }
    });

    upiPaymentRadio.addEventListener('change', function() {
        if (this.checked) {
            paymentCardDiv.style.display = 'none'; // Show the div when 'Credit Card' is selected
            cashPayment.style.display = 'none'; // Hide Checkout 
            upiPayment.style.display = 'block'; // Hide UPI Payment
        }
    });

    hidePaymentRadio.addEventListener('change', function() {
        if (this.checked) {
            paymentCardDiv.style.display = 'none'; // Hide the div when 'Cash' is selected
            cashPayment.style.display = 'block'; // Show Checkout 
            upiPayment.style.display = 'none'; // Hide UPI Payment
        }





    });

    // const showPaymentRadio = document.getElementById('credit');
    // const hidePaymentRadio = document.getElementById('cash');
    // const paymentCardDiv = document.getElementById('payment_card');
    // const cashPayment = document.getElementById('cash_checkout');
    // const paypal = document.getElementById('pay');
    // showPaymentRadio.addEventListener('change', function() {
    //     if (this.checked) {
    //         paymentCardDiv.style.display = 'block'; // Show the div when 'Show Payment' is selected
    //         cashPayment.style.display = 'none'; // hide Checkout 
    //         // paypal.style.display = 'none';
    //     }
    // });
    // hidePaymentRadio.addEventListener('change', function() {
    //     if (this.checked) {
    //         paymentCardDiv.style.display = 'none'; // Hide the div when 'Hide Payment' is selected
    //         cashPayment.style.display = 'block'; // Show Checkout 
    //         // paypal.style.display = 'block';

    //     }
    // });
</script>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    var stripe = Stripe('{{ env("STRIPE_KEY") }}')
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');
    // alert(elements)
    /*------------------------------------------
    --------------------------------------------
    Create Token Code
    --------------------------------------------
    --------------------------------------------*/
    function createToken() {

        document.getElementById("pay-btn").disabled = true;
        stripe.createToken(cardElement).then(function(result) {
            if (typeof result.error != 'undefined') {
                alert("failed")

                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message);
            }

            /* creating token success */
            if (typeof result.token != 'undefined') {
                // alert("pass")
                document.getElementById('stripe_token_id').value = result.token.id;
                document.getElementById('checkout-form').submit();
                // document.getElementById('stripe_token_id').value = result.token.id;
                // document.getElementById('checkout-form').submit();
            }
            // alert(result.token.id)
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('#postcode').keyup(function() {
            var postcode = $(this).val();

            if (postcode.length >= 5) {
                $.getJSON('https://nominatim.openstreetmap.org/search?format=json&postalcode=' + postcode, function(data) {
                    if (data.length > 0) {
                        console.log(data)
                        console.log("Delivet To : ", data[0].display_name)
                        var parts = data[0].display_name.split(',')
                        if (!parts[2]) {
                            // alert(1)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            document.getElementById('country_delivery').value = part1;
                        } else if (!parts[3]) {
                            // alert(2)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            var paryt2 = parts[2].trim();
                            var city_st = [part1, paryt2]
                            document.getElementById('country_delivery').value = paryt2;
                            document.getElementById('city_town').value = city_st;
                        } else if (!parts[4]) {
                            // alert(3)
                            var part1 = parts[0].trim();
                            var city = parts[1].trim();
                            var state = parts[2].trim();
                            var country = parts[3].trim();
                            var city_st = [city, state]
                            document.getElementById('country_delivery').value = country;
                            document.getElementById('city_town').value = city;
                            document.getElementById('state').value = state;
                        } else if (!parts[5]) {
                            var part1 = parts[1].trim();
                            var part2 = parts[2].trim();
                            var part3 = parts[3].trim();
                            var part4 = parts[4].trim();
                            var city_st = [part1, part2]
                            document.getElementById('country_delivery').value = part4;
                            document.getElementById('city_town').value = part2;
                            document.getElementById('delivery_address1').value = part1;
                            document.getElementById('state').value = part3;
                        } else if (!parts[6]) {
                            var part1 = parts[1].trim();
                            var part2 = parts[2].trim();
                            var part3 = parts[3].trim();
                            var part4 = parts[4].trim();
                            var part5 = parts[5].trim();
                            var city_st = [part1, part2]
                            document.getElementById('country_delivery').value = part4;
                            document.getElementById('city_town').value = part2;
                            document.getElementById('delivery_address1').value = part1;
                            document.getElementById('state').value = part3;
                            document.getElementById('address2').value = part3;
                        } else {
                            var address1 = parts[1].trim();
                            var address2 = parts[2].trim();
                            var city = parts[3].trim();
                            var district = parts[4].trim();
                            var state = parts[5].trim();
                            var country = parts[6].trim();
                            var city_st = [city, district]
                            document.getElementById('country_delivery').value = country;
                            document.getElementById('city_town').value = city_st;
                            document.getElementById('delivery_address1').value = address1;
                            document.getElementById('state').value = state;
                            document.getElementById('address2').value = address2;
                        }



                    } else {
                        $('#address').val('No address found');
                    }
                });
            }
        });


        $('#billing_postcode').keyup(function() {
            var postcode = $(this).val();

            if (postcode.length >= 5) {
                $.getJSON('https://nominatim.openstreetmap.org/search?format=json&postalcode=' + postcode, function(data) {
                    if (data.length > 0) {
                        console.log(data)
                        console.log("Billing To : ", data[0].display_name)
                        var parts = data[0].display_name.split(',')
                        if (!parts[2]) {
                            // alert(1)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            document.getElementById('billing_country_delivery').value = part1;
                        } else if (!parts[3]) {
                            // alert(2)
                            var part0 = parts[0].trim();
                            var part1 = parts[1].trim();
                            var paryt2 = parts[2].trim();
                            var city_st = [part1, paryt2]
                            document.getElementById('billing_country_delivery').value = paryt2;
                            document.getElementById('city_town').value = city_st;
                        } else if (!parts[4]) {
                            // alert(3)
                            var part1 = parts[0].trim();
                            var city = parts[1].trim();
                            var state = parts[2].trim();
                            var country = parts[3].trim();
                            var city_st = [city, state]
                            document.getElementById('billing_country_delivery').value = country;
                            document.getElementById('billing_city_town').value = city;
                            document.getElementById('billing_state').value = state;
                        } else if (!parts[5]) {
                            var part1 = parts[1].trim();
                            var part2 = parts[2].trim();
                            var part3 = parts[3].trim();
                            var part4 = parts[4].trim();
                            var city_st = [part1, part2]
                            document.getElementById('billing_country_delivery').value = part4;
                            document.getElementById('billing_city_town').value = part2;
                            document.getElementById('billing_delivery_address1').value = part1;
                            document.getElementById('billing_state').value = part3;
                        } else if (!parts[6]) {
                            var part1 = parts[1].trim();
                            var part2 = parts[2].trim();
                            var part3 = parts[3].trim();
                            var part4 = parts[4].trim();
                            var part5 = parts[5].trim();
                            var city_st = [part1, part2]
                            document.getElementById('billing_country_delivery').value = part4;
                            document.getElementById('billing_city_town').value = part2;
                            document.getElementById('billing_delivery_address1').value = part1;
                            document.getElementById('billing_state').value = part3;
                            document.getElementById('billing_address2').value = part3;
                        } else {
                            var address1 = parts[1].trim();
                            var address2 = parts[2].trim();
                            var city = parts[3].trim();
                            var district = parts[4].trim();
                            var state = parts[5].trim();
                            var country = parts[6].trim();
                            var city_st = [city, district]
                            document.getElementById('billing_country_delivery').value = country;
                            document.getElementById('billing_city_town').value = city_st;
                            document.getElementById('billing_delivery_address1').value = address1;
                            document.getElementById('billing_state').value = state;
                            document.getElementById('billing_address2').value = address2;
                        }



                    } else {
                        $('#address').val('No address found');
                    }
                });
            }
        });
    });
</script>
@endsection