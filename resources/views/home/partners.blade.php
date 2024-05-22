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
            <div class="page-path-bx"> <a class="home-icon" title="Home" href="https://hygreen.qa"><i class="fa fa-home" aria-hidden="true"></i></a><span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">Our Partners</span> </div>
            <div class="page-title-box mrg30-B R-mrg30-B"><span class="page-title">Our Partners</span></div>
            <div class="partners-wrapper">
                <ul>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/1">
                            <span><img src="/backend/web/uploads/Deb logo2.jpg" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/2">
                            <span><img src="/backend/web/uploads/Thomil-1.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/7">
                            <span><img src="/backend/web/uploads/gvhealth-logo.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/8">
                            <span><img src="/backend/web/uploads/CrosstexProtectsLogo.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/9">
                            <span><img src="/backend/web/uploads/Medivators-logo-2012-1.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/10">
                            <span><img src="/backend/web/uploads/VIGITECHNICSLogo-1.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/11">
                            <span><img src="/backend/web/uploads/TELIC.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/12">
                            <span><img src="/backend/web/uploads/allied-web.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/13">
                            <span><img src="/backend/web/uploads/365-log.jpg" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/15">
                            <span><img src="/backend/web/uploads/rayner-web.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/16">
                            <span><img src="/backend/web/uploads/lid_logo_site_sm.gif" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/18">
                            <span><img src="/backend/web/uploads/gmd.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/20">
                            <span><img src="/backend/web/uploads/vesis-web.png" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/21">
                            <span><img src="/backend/web/uploads/Defend-logo.jpg" /></span>
                        </a>
                    </li>
                    <li><a class="partnr-logo" title="" href="#site/partners/details/24">
                            <span><img src="/backend/web/uploads/Debmed-logo.jpg" /></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

@endsection