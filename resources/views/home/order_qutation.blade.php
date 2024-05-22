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
    <div class="inner-main">
        <div class="container" id="flashmessages">
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">View Enquiry List</span> </div>
            <div class="row">
                <form action="{{route('quotation.send')}}" enctype="multipart/form-data" method="post">
@csrf

                    <div class="col-md-6">
                        <div class="checkout-contact-wrap">
                            <div class="hd-typ7 btm-brdr mrg30-B R-mrg30-B"> Guest Contact Details</div>
                            <div class="form-row-box-typ">

                                <input type="hidden" id="hddn_field" name="hddn_field">
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">First name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="firstname" required>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Last name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="lastname" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Email Address *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Phone Number *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="tel" name="phone" required>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Country *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="text" name="country" value="QATAR" required readonly>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="common-check-box-typ">
                                            <div class="order-checkbox-col">
                                                <input class="create-account-check" name="Account" type="checkbox">
                                                <span class="checkbox-txt">Create Customer Account</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="create-account-row">
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Your Title *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="title">
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Company Name *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="company">
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6 col-sm-12">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">City *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="address2">
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Website</label>
                                                <span class="filed-sec">
                                                    <input type="url" class="textbox-typ2 required" name="businesstype">
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Accounts User Name (optional)</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 " name="sec_user_name">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Accounts User Email </label>
                                                <span class="filed-sec">
                                                    <input type="email" class="textbox-typ2" name="sec_user_email">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Accounts User Telephone</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="officephone">
                                                </span>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box file-area">
                                                <label class="lbl-typ">Computer Card #</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="cardid">
                                                </span>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="card_file" type="file" accept=".doc,.docx,.pdf,.txt,.png,.jpg,.jpeg,">
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="field-box file-area">
                                                <label class="lbl-typ">Commercial Registration # *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="regid">
                                                </span>

                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" type="file" name="cr_file" accept=".doc,.docx,.pdf,.txt">

                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="field-box">
                                                <label class="lbl-typ">Customer Type *</label>
                                                <span class="filed-sec">
                                                    <select class="textbox-typ2 required" name="customergroup" id="customergroup">
                                                        <option value="">Choose customer type</option>
                                                        <option value="10">Retail</option>
                                                        <option value="100">Transportation</option>
                                                        <option value="110">Hospital</option>
                                                        <option value="120">Laundry</option>
                                                        <option value="130">Industrial Sector</option>
                                                        <option value="140">Individual</option>
                                                        <option value="150">FM</option>
                                                        <option value="160">Medical Center</option>
                                                        <option value="20">Dental</option>
                                                        <option value="30">Hospitality</option>
                                                        <option value="40">Pharmacies</option>
                                                        <option value="50">Home Care</option>
                                                        <option value="60">School</option>
                                                        <option value="70">Gov & Public Services</option>
                                                        <option value="80">Wellness & Beauty</option>
                                                        <option value="90">Clinic</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>

                                    </div><br>

                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="field-box">
                                                <label class="lbl-typ">Delivery Address *</label>
                                                <span class="filed-sec">
                                                    <textarea class="textbox-typ2 required" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" name="delivery" rows="4" cols="50" style="height: 100%;"></textarea>
                                                    <input type="hidden" class="textbox-typ2" name="street" id="street_number" disabled="true">
                                                    <input type="hidden" class="textbox-typ2" id="route" name="street2" disabled="true">
                                                    <input type="hidden" class="textbox-typ2" name="city1" id="locality" disabled="true" />
                                                    <input type="hidden" id="administrative_area_level_1" disabled="true">
                                                    <input type="hidden" class="textbox-typ2" id="country" disabled="true" name="country1" />
                                                    <input type="hidden" class="textbox-typ2" id="postal_code" name="zip" disabled="true" />
                                                    <input type="hidden" class="textbox-typ2" id="latitude" name="latitude" />
                                                    <input type="hidden" class="textbox-typ2" id="longitude" name="longitude" />
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">PO Box # *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2 required" name="pobox">
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-list-box-typ">
                            <div class="common-cart-table mrg25-B R-mrg25-B">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Item</th>
                                            <th class="align-C R-align-C">Quantity</th>
                                            <th class="align-C R-align-C">Unit</th>
                                        </tr>
                                        <tr>
                                            <td>Promed® Centrifuge Test Tube (15ml)</td>
                                            <td class="align-C R-align-C">1</td>
                                            <td class="align-C R-align-C">Rack</td>
                                            <input type="hidden" name="pkitemms[]" value="Promed® Centrifuge Test Tube (15ml)">
                                            <input type="hidden" name="pkitemqty[]" value="1">
                                            <input type="hidden" name="pkitemunitid[]" value="Rack">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btm-align-btn-boxes">
                                <button class="btn-typ6 btn-display1" title="Request Quotation" name="quotation" id="quotation" style="display: none;" type="submit">Request Quotation</button>
                                <button class="btn-typ6 btn-display2" title="Send Request" name="sendrequest" type="submit">Send Request</button>
                                <a class="btn-typ6" title="Continue Shopping" href="#">Continue Shopping</a>
                                <a class="btn-typ6 class-for-disable-saveexit" title="Save&amp;Exit" href="javascript:void(0)">Save &amp; Exit</a>
                            </div>
                        </div>

                    </div>
            </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".btn-typ6.btn-display1").hide();
                $("#map").hide();
                $("#hddn_field").val(window.location.href);
            });
            $('input.create-account-check:checkbox').change(function() {

                if ($(this).is(":checked")) {
                    $('.create-account-row .required').attr("required", "true");
                    $('.create-account-row').slideDown(200);
                    $(".btn-typ6.btn-display2").hide();
                    $(".btn-typ6.btn-display1").show();
                    $("#map").show();
                } else {
                    $('.create-account-row .required').removeAttr("required");
                    $('.create-account-row').slideUp(200);
                    $(".btn-typ6.btn-display1").hide();
                    $(".btn-typ6.btn-display2").show();
                    $("#map").hide();
                }
            });
        </script>
        <script>
            // This example displays an address form, using the autocomplete feature
            // of the Google Places API to help users fill in the information.

            // This example requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

            var placeSearch, autocomplete;
            var componentForm = {
                street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'short_name',
                postal_code: 'short_name'
            };

            function initAutocomplete() {
                // Create the autocomplete object, restricting the search to geographical
                // location types.
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */
                    (document.getElementById('autocomplete')), {
                        types: ['geocode']
                    });

                // When the user selects an address from the dropdown, populate the address
                // fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);
            }

            function fillInAddress() {
                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();
                document.getElementById('latitude').value = place.geometry.location.lat();
                document.getElementById('longitude').value = place.geometry.location.lng();
                var latlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: latlng,
                    zoom: 13
                });
                var marker = new google.maps.Marker({
                    map: map,
                    position: latlng,
                    draggable: false,
                    anchorPoint: new google.maps.Point(0, -29)
                });
                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(marker, 'click', function() {
                    var iwContent = '<div id="iw_container">' +
                        '<div class="iw_title"><b>Location</b> : ' + document.getElementById('autocomplete').value + '</div></div>';
                    // including content to the infowindow
                    infowindow.setContent(iwContent);
                    // opening the infowindow in the current map and at the current marker location
                    infowindow.open(map, marker);
                });
                for (var component in componentForm) {
                    document.getElementById(component).value = '';
                    document.getElementById(component).disabled = false;
                }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        if (addressType == 'country')
                            document.getElementById(addressType).value = 'QAT';
                        else
                            document.getElementById(addressType).value = val;
                    }
                }
            }

            // Bias the autocomplete object to the user's geographical location,
            // as supplied by the browser's 'navigator.geolocation' object.
            function geolocate() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var geolocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var circle = new google.maps.Circle({
                            center: geolocation,
                            radius: position.coords.accuracy
                        });
                        autocomplete.setBounds(circle.getBounds());
                    });
                }
            }

            function myFunction() {
                var x = document.getElementById("showaddress");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwqGR0eUfS6qPRVno2YEgyAqvHol853q8&libraries=places&callback=initAutocomplete" async defer></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $('#quotation').click(function(e) {
                //alert("test");
                var customergroup = $("#customergroup").val();
                if (customergroup == "Choose customer type") {
                    swal("Choose Customer Type")
                    e.preventDefault();
                    return false;
                    // go on with script
                } else {
                    return true;
                    // NOTHING IS CHECKED

                }

            });
        </script>



    </div>
    </div>
</section>

@endsection