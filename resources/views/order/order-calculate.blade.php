@extends('home.layouts.app')
@section('content')
<style>
    icon-shape {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        vertical-align: middle;
    }

    .icon-sm {
        width: 2rem;
        height: 2rem;

    }
</style>

@php
$totalAmount = 0;
$itemCount = 0;
@endphp

<section>
    <div class="inner-main">
        <div class="container" id="flashmessages">
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">View Enquiry List</span> </div>
            <div class="cart-common-layout">
                <div class="left-box">
                    <div class="top-tab-list-typ1">
                        <ul class="clearfix">
                            <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">View Selected Items</span></li>
                            <li class="active"><span class="tab-list-img"></span> <span class="tab-list-txt">Calculate Order</span></li>
                            <li><span class="tab-list-img"></span> <span class="tab-list-txt">Delivery Address</span></li>
                            <li><span class="tab-list-img"></span> <span class="tab-list-txt">Review & Payments</span></li>
                        </ul>
                    </div>

                    <div class="cart-table-typ typ2">
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
                                            <img src="{{asset('products/'.$item->product->product_image)}}" style="    height: 75px; " />
                                        </span>
                                        <span class="prod-name-text" id="limit-error-msg0"> {{ $item->product->product_name }}<span class="prod-sec-txt">

                                            </span>
                                            <span  class="prd-code">Product Code : {{ $item->product->product_code }}</span>
                                            <span class="prd-code">Product Price : ${{ $item->product->product_price }}</span>
                                            <span  class="prd-code">Total Price : ${{ $item->product->product_price*$item['product_quantity'] }}</span>

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
                                                        <input type="number" min="1" step="1" max="10" value="{{$item['product_quantity']}}" id="quantity" name="quantity" class="quantity-field border-0 text-center w-15" style="width: 50px;">
                                                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                    </div>
                                                    <input type="hidden" id="id" name="id" value="{{ $item['product_id']}}">
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
                    </div>


                </div>
                <!-- <p>Total Items: {{ $itemCount }}&nbsp;
            <span>Total Amount: {{ $totalAmount }}
            </span>
          </p> -->
                <div class="right-box">
                    <div class="btn-box-wrapper">
                        <!-- <div class="btn-box class-for-disable" id="savechanges"><a class="btn-typ5" title="Save Changes" href="javascript:void(0)">Save Changes</a></div> -->
                        <div class="btn-box"><a class="btn-typ5" title="Continue Shopping" href="{{url('/')}}">Continue Shopping</a></div>
                        <div class="btn-box">

                            <a class="btn-typ5" id="calculateorder" href="{{ url('order-address').'/'. $totalAmount}}" title="">Total Amount: {{ $totalAmount }}</a>

                            <!--	<a class="btn-typ5" title="Calculate my order" id="calculatelimit" href="javascript:void(0);">TEST CALCULATION</a>-->
                        </div>
                        <!-- <div class="btn-box" id="sendenquiry"><a class="btn-typ5" title="Request Quotation" href="#/order/quotation">Request Quotation</a></div> -->

                    </div>
                </div>
            </div>
            <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>

        </div>
    </div>
</section>

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
@endsection