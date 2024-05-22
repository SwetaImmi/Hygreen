@extends('home.layouts.app')
@section('content')

<section>
    <div class="inner-main">
        <div class="container" id="flashmessages">

            <div class="page-path-bx"> <a class="home-icon" title="Home" href="#"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">My Account</span> </div>
            <div class="side-main-bx-wrapper clearfix">
                <div class="sidebar-box">
                    <div class="sidebar-lnk-typ2-box my-account-sidebar mrg50-B R-mrg30-B">
                        <ul>
                            <li><a class="side-main-lnk active" title="My Account" href="#account"><span class="icon"></span><span class="text-link-typ">My Account</span></a> </li>
                            <li> <a class="side-main-lnk " title="My Address Book" href="#account/addressbook"><span class="icon"></span><span class="text-link-typ">My Address Book</span></a> </li>
                            <li> <a class="side-main-lnk " title="My Orders" href="#account/myorders"><span class="icon"></span><span class="text-link-typ">My Orders</span></a> </li>
                            <li> <a class="side-main-lnk" title="My Contract Price List" href="#account/contractpricelist"><span class="icon"></span><span class="text-link-typ">My Contract Price List</span></a> </li>
                            <!--  <li> <a class="side-main-lnk new-product-request" title="New product request" href="#"><span class="icon"></span><span class="text-link-typ">New product request</span></a> </li>
                                 <li> <a class="side-main-lnk send-us-message" title="Send Us A Message" href="#"><span class="icon"></span><span class="text-link-typ">Send Us A Message</span></a> </li>-->
                            <li> <a href="#site/logouting" class="side-main-lnk" title="Log Out"><span class="icon"></span><span class="text-link-typ">Log Out</span></a> </li>

                        </ul>
                    </div>
                    <div class="acc-manager-box">
                        <!-- <div class="title-box">Your Account Manager</div> -->
                        <!-- <div class="acc-manager-info-sec"> -->
                        <!-- <div class="img-sec-typ"><img src="data:image/png;base64," /></div>
                            <div class="bottom-txt-typ1">Customer Service</div>
                            <div class="bottom-txt-typ2"><a title="sales@hygreen.qa" href="mailto:sales@hygreen.qa">sales@hygreen.qa</a></div> -->
                        <!-- <div class="bottom-txt-typ2"><a title=""></a></div>-->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="main-box">
                    <div class="box-model-typ1 mrg20-B R-mrg20-B">
                        <div class="hd-typ9 mrg15-B R-mrg15-B">My Dashboard</div>
                        <!-- -->
                        <div class="common-content-typ3"> <span class="fw-B">Hello, {{Auth()->user()->name}}
                                !</span><br>
                            <!--   From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information -->
                            Your Dashboard allows you to view and edit your account information. To view your order
                            history, please select "MY ORDERS".You can also select "MY ADDRESS BOOK" to edit or add
                            delivery locations. If you have a contract with us, you can view the contract items list and
                            prices by selecting "MY CONTRACT PRICE LIST".
                        </div>
                    </div>
                    <div class="account-info-row-wrap">
                        <div class="account-info-row mrg40-B R-mrg30-B pos-rel">
                            <div class="row mrg20-B">
                                <div class="col-md-6 sm-mrg20-B R-mrg20-B">
                                    <div class="box-model-typ1 add-info-common pos-rel">
                                        <div class="edit-lnk-typ-box typ2">
                                            <a class="edit-lnk-typ account-info-edit1" href="#"><span class="icon"><img src="/images/edit-icon.png" /></span><span class="txt">Edit</span></a>
                                               
                                        </div>
                                        <div class="hd-box">CUSTOMER INFORMATION</div>
                                        <div class="box-content-typ1"> <span class="left-info">Company ID</span><span class="right-info">{{Auth()->user()->customer_id}}</span><br>
                                            <span class="left-info">Company Name</span><span class="right-info">{{Auth()->user()->company_name}}</span><br>
                                            <span class="left-info">Authorised User ID</span><span class="right-info">{{Auth()->user()->id}}</span><br>
                                            <span class="left-info">Authorised User Name</span><span class="right-info">{{Auth()->user()->name}}</span><br>
                                            <span class="left-info">Title</span><span class="right-info">{{Auth()->user()->title}}</span><br>
                                            <span class="left-info">Mobile Number</span><span class="right-info">{{Auth()->user()->contact}}</span><br>
                                            <span class="left-info">Email Address</span><span class="right-info">{{Auth()->user()->email}}</span><br>
                                            <span class="left-info"></span><span class="right-info"></span><br>
                                            <!--span class="left-info">Current Password</span><span class="right-info">******</span><br-->
                                            <!--span class="change-password-btm-lnk-typ"><a class="edit-lnk-typ change-passwd-lnk-typ" href="#" title="">Change Password</a></span-->
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 sm-mrg20-B R-mrg20-B">
                                    <div class="box-model-typ1 add-info-common pos-rel">
                                        <div class="edit-lnk-typ-box typ2">
                                            <!-- <a class="edit-lnk-typ account-info-edit box2" href="#"><span class="icon"><img src="/images/edit-icon.png" /></span><span class="txt">Edit</span></a>-->
                                        </div>
                                        <div class="hd-box">REGISTERED ADDRESS </div>
                                        <div class="box-content-typ1 account_depart">
                                            <span class="left-info">Accounts User ID</span><span class="right-info">
                                                {{Auth()->user()->customer_type}} </span><br>
                                            <span class="left-info">User Name</span><span class="right-info">
                                                {{Auth()->user()->account_user_name}}</span><br>
                                            <span class="left-info">User Email Address</span><span class="right-info">{{Auth()->user()->account_user_email}}</span><br>
                                            <span class="left-info">Country</span><span class="right-info">{{Auth()->user()->country}}</span><br>
                                            <span class="left-info">City : </span><span class="right-info">{{Auth()->user()->city}}</span><br>
                                            <span class="left-info">Postal Code : </span><span class="right-info">{{Auth()->user()->post_office}}</span><br>
                                            <span class="left-info">Contact No.</span><span class="right-info">{{Auth()->user()->account_user_contact}}</span><br>

                                            <!--span class="change-password-btm-lnk-typ"><a class="edit-lnk-typ change-passwd-lnk-typ" href="#" title="">Change Password</a></span-->
                                            <!--span class=""><a class="edit-lnk-typ" href="javascript:void(0);" title="View Statement of Account">Edit Accounts Email & PW</a></span-->
                                            <span class="statement_of_account"><a class="edit-lnk-typ" href="javascript:void(0);" title="View Statement of Account">Print
                                                    SOA (will be emailed)</a></span>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="account-info-row pos-rel">
                                <div class="row">
                                    <div class="col-md-6 sm-mrg20-B R-mrg20-B">
                                        <div class="box-content-typ2 add-book-block pos-rel">
                                            <div class="hd-typ10 mrg15-B R-mrg15-B">DEFAULT BILLING ADDRESS</div>
                                            <div class="common-content-typ3">
                                                <p> INFO: {{$address->billing_firstname}}
                                                    {{$address->billing_lastname}},
                                                    {{$address->billing_email}},
                                                    {{$address->billing_phone}},
                                                </p>
                                                <p> ADDRESS: {{$address->billing_delivery_address1}},
                                                    {{$address->billing_address2}},
                                                    {{$address->billing_city_town}}
                                                    {{$address->billing_state}}

                                                    <br> {{$address->billing_country_delivery}} ,
                                                    {{$address->billing_postcode}}
                                                </p>
                                            </div>
                                            <div class="edit-lnk-typ-box">
                                                <a class="edit-lnk-typ billing-address-edit" href="#"><span class="icon"></span><span class="txt">
					                            EDit</span></a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div style="display:none;">
                                            <div id="billing-address-popup" class="popup-box-typ2">

                                                <div class="field-box mrg15-B R-mrg15-B">
                                                    <label class="lbl-typ">DEFAULT BILLING ADDRESS</label>
                                                    <span class="filed-sec">

                                                    </span>
                                                    <form action="#" method="post">
                                                        <div class="add-new-address-row">
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                                <div class="col-md-6">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Location Name</label>
                                                                        <span class="filed-sec">
                                                                            <textarea class="textbox-typ2" name="street1">Building 123        Street 123,                        23435</textarea>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Street Address</label>
                                                                        <span class="filed-sec">
                                                                            <textarea class="textbox-typ2" name="street"></textarea>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">City</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="city" value=" Doha" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">State</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="state" value="" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Country</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="country" value="QAT" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Zip Code</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="zip" value="" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="bid" value="59491">
                                                            <div class="submit-btn-box-typ align-R R-align-C">
                                                                <button class="btn-typ7">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>


                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-content-typ2 add-book-block pos-rel">
                                            <div class="hd-typ10 mrg15-B R-mrg15-B">DEFAULT SHIPPING ADDRESS</div>
                                            <div class="common-content-typ3" style="min-height:95px!important;">
                                                <p> INFO: {{$address->firstname}}
                                                    {{$address->lastname}},
                                                    {{$address->email}},
                                                    {{$address->phone}},
                                                </p>
                                                <p> ADDRESS: {{$address->delivery_address1}},
                                                    {{$address->address2}},
                                                    {{$address->city_town}}
                                                    {{$address->state}}

                                                    <br> {{$address->country_delivery}} , {{$address->postcode}}
                                                </p>
                                            </div>
                                            <div class="edit-lnk-typ-box"><a class="edit-lnk-typ shipping-address-edit" href="#"><span class="icon"><img src="/images/edit-icon.png"></span><span class="txt">
                                                        Edit </span></a></div>
                                        </div>
                                        <div style="display:none;">
                                            <div id="shipping-address-popup" class="popup-box-typ2">

                                                <div class="field-box mrg15-B R-mrg15-B">
                                                    <label class="lbl-typ">DEFAULT SHIPPING ADDRESS</label>
                                                    <span class="filed-sec">

                                                    </span>
                                                    <form action="#   account/deliveryaddress" method="post">
                                                        <div class="add-new-address-row">
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                                <div class="col-md-6">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Location Name</label>
                                                                        <span class="filed-sec">
                                                                            <textarea class="textbox-typ2" name="street1">ABCDE</textarea>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Street Address</label>
                                                                        <span class="filed-sec">
                                                                            <textarea class="textbox-typ2" name="street">Building 123
                                                                                Street 123</textarea>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">City</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="city" value="Doha" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Country</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="country" value="QAT" />
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                                                <div class="col-md-6">
                                                                    <div class="field-box">
                                                                        <label class="lbl-typ">Post Box</label>
                                                                        <span class="filed-sec">
                                                                            <input class="textbox-typ2" name="zip" value="23435" />
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="did" value="59490">
                                                            <div class="submit-btn-box-typ align-R R-align-C">
                                                                <button class="btn-typ7">Submit</button>
                                                            </div>
                                                        </div>
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
            <div style="display:none;">
                <div id="statement-info-popup" class="popup-box-typ2 login-popup-size">
                    Your account statement will be sent to your e-mail.
                    Thank you !

                </div>
            </div>

        </div>
    </div>
</section>
@endsection