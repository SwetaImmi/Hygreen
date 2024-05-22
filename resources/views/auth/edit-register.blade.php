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
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>User Account<span class="page-lnk"></span>

            </div>
            <div class="row">
                <form action="{{route('register.create')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    <div class="col-md-6">
                        <div class="checkout-contact-wrap">
                            <div class="hd-typ7 btm-brdr mrg30-B R-mrg30-B">
                                User Account</div>
                            <div class="form-row-box-typ">

                                <input type="hidden" id="hddn_field" name="hddn_field">
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">First name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="firstname" >
                                            </span>
                                            <span> @error('firstname')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Last name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" name="lastname" >
                                            </span>
                                            <span> @error('lastname')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Email Address *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="email" name="email" >
                                            </span>
                                            <span> @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-box">
                                            <label class="lbl-typ">Mobile Number *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2" type="tel" name="phone" >
                                            </span>
                                            <span> @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Your Title *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2"  name="title">
                                            </span>
                                            <span> @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                            <label class="lbl-typ">Company Name *</label>
                                            <span class="filed-sec">
                                                <input class="textbox-typ2"  name="company">
                                            </span>
                                            <span> @error('company')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="create-account-rows">
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box mrg25-B">
                                                <label class="lbl-typ">City *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2"  name="address2">
                                                </span>
                                                <span> @error('address2')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Country *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2"  type="text" name="country"  >
                                                </span>
                                                <span> @error('country')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                        <div class="field-box">
                                                <label class="lbl-typ">Customer Type *</label>
                                                <span class="filed-sec">
                                                    <select class="textbox-typ2"  name="customergroup">
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
                                                <span> @error('customergroup')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">PO Box # *</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2"  name="pobox">
                                                </span>
                                                <span> @error('pobox')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
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
                                                <!-- <span> @error('lastname')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Accounts User Email </label>
                                                <span class="filed-sec">
                                                    <input type="email" class="textbox-typ2" name="sec_user_email" placeholder="Enter User Email">
                                                </span>
                                                <span> @error('sec_user_email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Accounts User Telephone</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="officephone" placeholder="Enter User Telephone">
                                                </span>
                                                <span> @error('officephone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Delivery Address *</label>
                                                <span class="filed-sec">
                                                    <textarea name="delivery" class="textbox-typ2" id="autocomplete" placeholder="Enter your address" onFocus="geolocate()"  rows="6" cols="50" style="height: 100%;"></textarea>
                                                    
                                                </span>
                                                <span> @error('delivery')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</span>
                                            </div>
                                            <div class="field-box file-area">
                                                

                                            </div>
                                        </div>

                                    </div>




                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <div class="btm-align-btn-boxesc col-md-6">
                                                    <button class="btn-typ6" title="Request Quotation" name="quotation" type="submit">Create New User Account</button>
                                                </div>
                                                <div class="btm-align-btn-boxes col-md-6">
                                                    Already Have
                                                    <a href="{{url('/')}}">Click Here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
            </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#hddn_field").val(window.location.href);
            });
            // Function to validate URL
            function isValidURL(url) {
                var pattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w.-]*)*\/?$/;
                return pattern.test(url);
            }

            // Function to validate file size and extension
            function isValidFile(fileInput) {
                var file = fileInput.files[0];
                if (!file) return false; // No file selected
                var fileSize = file.size; // Size in bytes
                var maxSize = 10 * 1024 * 1024; // 10 MB
                var validExtensions = ["pdf", "doc", "docx", "png", "jpg", "jpeg"];

                // Check file size
                if (fileSize > maxSize) {
                    return false; // File size exceeds limit
                }

                // Check file extension
                var extension = file.name.split('.').pop().toLowerCase();
                if (!validExtensions.includes(extension)) {
                    return false; // Invalid file extension
                }

                return true; // File is valid
            }

            // Function to handle form submission
            function validateForm() {
                var websiteInput = document.querySelector('input[type="url"]');
                var fileInputs = document.querySelectorAll('input[type="file"][]');

                // Check website URL
                if (websiteInput.value.trim() !== "" && !isValidURL(websiteInput.value)) {
                    alert('Please enter a valid website URL.');
                    return false;
                }

                // Check file inputs
                for (var i = 0; i < fileInputs.length; i++) {
                    if (!isValidFile(fileInputs[i])) {
                        alert('Please select a valid file (PDF, DOC, DOCX, PNG, JPG, JPEG) under 10MB.');
                        return false;
                    }
                }

                return true; // Form is valid
            }
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $(".btn-typ6.btn-display1").hide();
                $("#map").hide();
            });
            $('input.create-account-check:checkbox').change(function() {
                if ($(this).is(":checked")) {
                    $('.create-account-row .').attr("", "true");
                    $('.create-account-row').slideDown(200);
                    $(".btn-typ6.btn-display2").hide();
                    $(".btn-typ6.btn-display1").show();
                    $("#map").show();
                } else {
                    $('.create-account-row .').removeAttr("");
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
    </div>
    </div>
</section>
@endsection