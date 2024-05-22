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

            <div class="page-path-bx">
                <a class="home-icon" title="Home" href="https://hygreen.qa"><i class="fa fa-home" aria-hidden="true"></i></a>
                <span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">About Us</span>
            </div>
            <div class="page-title-box mrg30-B R-mrg30-B"><span class="page-title">About Us</span></div>
            <div class="about-content-part">
                <div class="overlay-section-aboutus">
                    <img src="/images/about-img.png" alt="About Image">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {!! $about->message !!}
                        <!-- <h1>Introducing HyGreen</h1> -->
                        <!-- <h3>Innovative cleaning, infection control and hygiene solutions powered by nature</h3>-->
                        <!-- <h3>Innovative Healthcare, Infection Control and Hygiene solutions powered by nature</h3>
                        <p>HyGreen brings world-class infection control, healthcare and facility management solutions to Qatar. Our focus is on supporting our customers by delivering their requirements when and where it is needed.

                            We are the exclusive distributor of a number of globally renowned brands, offering our customers a wide range of best-in-class products and services. We will continue to bring more ground-breaking solutions for a better standard of living, from around the world, to Qatar.</p> -->

                    </div>
                </div>
            </div>
            <div class="vision-advantages">
                <div class="row">
                    <div class="col-md-6">
                        <h1>The DNA of Our Commitment</h1>
                        <div class="visin-al-section">
                            <h3>Our Vision</h3>
                            <p> To be the leading source of Infection Control, Healthcare and Hygiene solutions in Qatar.</p>
                        </div>
                        <div class="visin-al-section">
                            <h3>Our Mission</h3>
                            <p>Supporting the Medical, Healthcare and Hospitality sectors in Qatar by insuring the availability of adequate supplies of their regular requirements. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1>The HyGreen Advantage</h1>
                        <ul>
                            <li>B2B Web-based Orders Processing</li>
                            <li>Exclusive distributor for the world’s leading medical and healthcare brands</li>
                            <li>Effective infection control solutions for hospitals, hotels, offices and public areas</li>
                            <li>Wide range of Medical and Dental Supplies</li>
                            <li>Innovative environment-friendly product range for cleaning and waste management</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection