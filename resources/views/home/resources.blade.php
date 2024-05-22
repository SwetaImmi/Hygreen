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
                <span class="sep-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span><span class="page-lnk">Resources</span>
            </div>
            <div class="resources-page-main">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Resources</h1>
                        <div class="resources-block">
                            <h2>Useful Links</h2>
                            <ul>
                                <li><a href="http://www.nlm.nih.gov/medlineplus/infectioncontrol.html" target="_blank">MedlinePlus / Infection Control</a></li>
                                <li><a href="http://www.ajicjournal.org/" target="_blank">American Journal of Infection Control</a></li>
                                <li><a href="https://www.cdc.gov/flu/professionals/infectioncontrol/" target="_blank">CDC / Infection Control in Healthcare Facilities</a></li>
                                <li><a href="http://www.who.int/topics/hygiene/en/" target="_blank">WHO / Hygiene</a></li>
                                <li><a href="http://www.webmd.com/parenting/features/teen-hygiene" target="_blank">WebMD / Teen Hygiene Tips</a></li>
                                <li><a href="http://www.jointcommissioninternational.org/" target="_blank">Joint Commission International</a></li>
                                <li><a href="http://www.health.com/health/" target="_blank">Health.com</a></li>
                                <li><a href="http://www.sch.gov.qa/health-services/services-to-public/qatar-health-system" target="_blank">SCH / Qatar Health System</a></li>
                            </ul>
                        </div>
                        <div class="resources-block">
                            <h2>Reference Videos</h2>
                            <ul>
                                <li><a href="http://www.youtube.com/watch?v=PYah5m_tG7Q" target="_blank">The New Deb Group</a></li>
                                <li><a href="http://www.youtube.com/watch?v=iju-wURkQJg" target="_blank">Deb Skincare Range</a></li>
                                <li><a href="http://www.youtube.com/watch?v=HYC6tdUVC5U" target="_blank">Deb Hand Hygiene ‘Best Practice</a></li>
                                <li><a href="http://www.youtube.com/watch?v=w-6i_viCISQ" target="_blank">Deb Gritty Foam</a></li>
                                <li><a href="http://www.youtube.com/watch?v=YoY9CH_jc7Q" target="_blank">Cisne Mopatex</a></li>
                                <li><a href="http://www.youtube.com/watch?v=UtQUfeh6ufs" target="_blank">Bio Organic Catalyst<sup>™</sup></a></li>
                                <li><a href="http://www.youtube.com/watch?v=16nCUWd7tR8" target="_blank">Kitchen greasy surface cleaning with BOC technology</a></li>
                                <li><a href="http://www.youtube.com/watch?v=56wnucBDQ0g" target="_blank">BOC energy efficiency in wastewater treatment</a></li>
                            </ul>
                        </div>
                        <div class="resources-block">
                            <h2>Material Safety Data Sheets (MSDS)</h2>
                            <ul>
                                <li><a href="http://www.debgroup.com/us/msds/" target="_blank">Deb Group</a></li>
                                <li><a href="http://bio-organic.com/material-safety-data-sheet/" target="_blank">BOC</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection