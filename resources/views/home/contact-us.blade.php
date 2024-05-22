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
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="https://hygreen.qa"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">Contact Us</span> </div>
            <div class="page-title-box mrg30-B R-mrg30-B"><span class="page-title">Contact us</span></div>
            <div class="contact-pg-outer">
                <div class="contact-map mrg60-B R-mrg40-B">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.726663590709!2d51.52454991553127!3d25.279778783857864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c547caec6d69%3A0xe42dfa19ac6f1a81!2sHyGreen!5e0!3m2!1sen!2sin!4v1527927238676" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact-sec-box">
                    <div class="row">
                        <div class="col-md-4 sm-mrg30-B R-mrg30-B">
                            <div class="contact-left-box">
                                <div class="title">HyGreen Co. Ltd</div>
                                <div class="contact-info">
                                    <p> Office 905, Building# 5, <br>
                                        Al Diwan St, Area 14,<br>
                                        Doha, Qatar </p>
                                    Mail: PO Box 23435, Doha, Qatar<br>
                                    Tel: +974 4442 2021 <br>
                                    Fax: +974 4442 2012 <br>
                                    WhatsApp: +974 313 65 800 <br>
                                    Email: <a title="info@hygreen.qa" href="mailto:info@hygreen.qa">info@hygreen.qa</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="contact-right-box">
                                <form id="contact-form" action="{{route('contact.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_csrf-frontend" value="m5BeoDFG4tRH2VZSv6_vL8j02K6yhYwDOmY78HlhyXWixW_UVRmE4SOVDmCPx5Z4ipGNyOjauXRoP02oAFX4Ew==">
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Name</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="name">
                                                </span>

                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Email</label>
                                                <span class="filed-sec">
                                                    <input type="email" class="textbox-typ2" name="email">
                                                </span>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-6 R-mrg20-B sm-mrg20-B">
                                            <div class="field-box">
                                                <label class="lbl-typ">Phone Number</label>
                                                <span class="filed-sec">
                                                    <input class="textbox-typ2" name="phone">
                                                </span>

                                                @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-box">
                                                <label class="lbl-typ">Country</label>
                                                <span class="filed-sec">
                                                    <select class="textbox-typ2" name="country">
                                                        <option>Qatar</option>
                                                        <option>GCC Countries</option>
                                                        <option>Other Countries</option>
                                                    </select>
                                                </span>
                                                @error('country')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>
                                    <div id="customergroupcon" class="row mrg30-B R-mrg20-B sm-mrg20-B">

                                        <div class="col-md-12">

                                            <div class="field-box">

                                                <label class="lbl-typ">Customer Type</label>

                                                <span class="filed-sec">

                                                    <select class="textbox-typ2" name="customergroup" id="customergroup">
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
                                                @error('customergroup')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrg30-B R-mrg20-B sm-mrg20-B">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <label class="lbl-typ">Message</label>
                                                <span class="filed-sec">
                                                    <textarea class="textbox-typ2" name="message"></textarea>
                                                </span>
                                                @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                    <div class="contact-btn-typ">
                                        <span class="btn-col"><button class="contact-btn-btm">Send</button></span>
                                        <!-- <span class="btn-col">
                                            <button class="contact-btn-btm cancel">Cancel</button></span> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection