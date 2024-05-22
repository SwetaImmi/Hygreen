@extends('layouts.app')
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
            <div class="midbar-slider-box">
                <!-- wow zoomIn animated" data-wow-delay="7s"-->
                <div class="midbar-slider pos-rel">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/?name=biohazard-management">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499380vesismin4.png" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/?name=biohazard-management">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499419gv 4.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/?name=cleaning-agents">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707500459Deb-4.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/?name=body-care-55">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499465OXD 4.png" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#category/hand-hygiene">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499508VIG_IM_TWC03b (4).jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/item/life-clean-disinfectant-1l-16200-en-1">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707497956Thomil Magic3.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#category/personal-protection">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499530sol4.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#products/item/ndp-air-total-green-50ml-at-gc50ife">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499559Dermafix 4.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#category/personal-hygiene">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707499578standard size4.jpg" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image-sec">
                                <a href="#category/disinfecting-agent?page=2&per-page=30">
                                    <div class="resp-image"><img class="" src="/backend/web/banner/1707500308helewa4.png" alt="Banner" /></div>
                                    <div class="mid-caption-wrapper">
                                        <div class="container">
                                            <div class="mid-caption-bx">
                                                <div class="top-txt-bx">Cleanis AQUA<span>Non-rinse Wash Glove</span></div>
                                                <div class="btm-txt-bx">
                                                    The FNI 41cc Chainsaw is Here!
                                                </div>
                                                <div class="mid-cap-view-more"><a class="btn-typ1" title="View More" href="#">View More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="users-tab-outer-sections">
            <div class="users-tab-outer" id="sectional-tab-list">
                <div class="users-tab-list-outer" id="sec-tablist-id">
                    <div class="container">
                        <div class="users-tab-list">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class='active grouplistview' title="Hospital & Clinic" class="grouplistview" data-toggle="tooltip" data-placement="top" id="hospital-clinic">
                                    <a href="#tabHospitalClinic" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Hospital & Clinic</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="Homecare" class="grouplistview" data-toggle="tooltip" data-placement="top" id="homecare">
                                    <a href="#tabHomecare" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Homecare</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="Pharmacies" class="grouplistview" data-toggle="tooltip" data-placement="top" id="pharmacies">
                                    <a href="#tabPharmacies" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Pharmacies</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="FM & Prof" class="grouplistview" data-toggle="tooltip" data-placement="top" id="fm-prof">
                                    <a href="#tabFMProf" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">FM & Prof</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="Health & Sport" class="grouplistview" data-toggle="tooltip" data-placement="top" id="health-sport">
                                    <a href="#tabHealthSport" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Health & Sport</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="Hospitality" class="grouplistview" data-toggle="tooltip" data-placement="top" id="hospitality">
                                    <a href="#tabHospitality" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Hospitality</span>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" title="Spa & Beauty" class="grouplistview" data-toggle="tooltip" data-placement="top" id="spa-beauty">
                                    <a href="#tabSpaBeauty" role="tab" data-toggle="tab">
                                        <span class="icon-txt-wrap">
                                            <span class="icon-box">
                                                <img class="img-normal" src="/frontend/web/images/users-icon1.png" />
                                                <img class="img-active" src="/frontend/web/images/users-icon1-hover.png" />
                                            </span>
                                            <span class="text-box groupname">Spa & Beauty</span>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="users-tab-list-container">
        <div class="container">
                    

        </div>
      </div>
    </div>
    -->
                <div class="users-tab-list-container">
                    <div class="container">

                        <div role="tabpanel" class="tab-pane active" id="tabHospitalClinic">
                            <div class="tab-box current">
                                <div class="prod-slider-box-sec" style="display:block;">
                                    <div class="owl-carousel owl-theme">

                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/dispopet-1-coloured-antiseptic-solution-500ml-1">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/0040500B_HG-010206.jpg' />
                                                            <span class="" id="loader1"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dispopet 1% Coloured Antiseptic Solution (500ml)</span></a>
                                                    <span class="" id="loader'1"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="1" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds1">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/proline-manual-sanitizer-dispenser-1l-35">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/155303__HG-012583.jpg' />
                                                            <span class="" id="loader35"></span>
                                                        </span>

                                                        <span class="prod-name-title">Proline Manual Sanitizer Dispenser (1L)</span></a>
                                                    <span class="" id="loader'35"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="35" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds35">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/promed-centrifuge-polypropylene-test-tubes-50ml-129">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/21405_HG-005414.jpg' />
                                                            <span class="" id="loader129"></span>
                                                        </span>

                                                        <span class="prod-name-title">Promed® Centrifuge Polypropylene Test Tubes (50ml)</span></a>
                                                    <span class="" id="loader'129"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="129" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds129">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/promed-centrifuge-test-tube-15ml-130">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/21409_HG-002383.jpg' />
                                                            <span class="" id="loader130"></span>
                                                        </span>

                                                        <span class="prod-name-title">Promed® Centrifuge Test Tube (15ml)</span></a>
                                                    <span class="" id="loader'130"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="130" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Rack" id="UnitIds130">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/coprotainer-polypropylene-faeces-container-30ml-140">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/25135E_HG-005417.jpg' />
                                                            <span class="" id="loader140"></span>
                                                        </span>

                                                        <span class="prod-name-title">Coprotainer® Polypropylene Faeces Container (30ml)</span></a>
                                                    <span class="" id="loader'140"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="140" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds140">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/multibox-sharps-container-5l-143">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/25205_HG-005416.jpg' />
                                                            <span class="" id="loader143"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multibox Sharps Container (5L)</span></a>
                                                    <span class="" id="loader'143"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="143" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds143">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/shoe-cover-dispenser-244">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/460547_HG-007678.jpg' />
                                                            <span class="" id="loader244"></span>
                                                        </span>

                                                        <span class="prod-name-title">Shoe Cover Dispenser</span></a>
                                                    <span class="" id="loader'244"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="244" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds244">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sds-manual-dispenser-1l-beige-260">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/4D40Q5_HG-008915.jpg' />
                                                            <span class="" id="loader260"></span>
                                                        </span>

                                                        <span class="prod-name-title">SDS Manual Dispenser (1L, Beige)</span></a>
                                                    <span class="" id="loader'260"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="260" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds260">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sds-manual-dispenser-1l-black-261">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/4D50Q5_HG-008916.jpg' />
                                                            <span class="" id="loader261"></span>
                                                        </span>

                                                        <span class="prod-name-title">SDS Manual Dispenser (1L, Black)</span></a>
                                                    <span class="" id="loader'261"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="261" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds261">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/super-strength-heavy-duty-wipes-80-wipes-299">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/73157_HG-010938.jpg' />
                                                            <span class="" id="loader299"></span>
                                                        </span>

                                                        <span class="prod-name-title">Super Strength Heavy Duty Wipes (80 wipes)</span></a>
                                                    <span class="" id="loader'299"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="299" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds299">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/carebag-bedpan-liner-20pcs-301">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PACK_BASSIN_HG-000190.jpg' />
                                                            <span class="" id="loader301"></span>
                                                        </span>

                                                        <span class="prod-name-title">CareBag® Bedpan Liner (20pcs)</span></a>
                                                    <span class="" id="loader'301"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="301" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds301">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/carebag-male-urinal-20pcs-302">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PACK_URINAL_MASCULIN_HG-000192.jpg' />
                                                            <span class="" id="loader302"></span>
                                                        </span>

                                                        <span class="prod-name-title">CareBag® Male Urinal (20pcs)</span></a>
                                                    <span class="" id="loader'302"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="302" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds302">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/carebag-commode-liner-20pcs-303">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PACK_SEAU_PETIT_HG-000193.jpg' />
                                                            <span class="" id="loader303"></span>
                                                        </span>

                                                        <span class="prod-name-title">CareBag® Commode Liner (20pcs)</span></a>
                                                    <span class="" id="loader'303"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="303" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds303">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/carebag-male-urinal-with-holder-12pcs-374">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/en-carebag-men-urinal-with-holder-01_HG-001332.jpg' />
                                                            <span class="" id="loader374"></span>
                                                        </span>

                                                        <span class="prod-name-title">CareBag® Male Urinal with Holder (12pcs)</span></a>
                                                    <span class="" id="loader'374"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="374" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds374">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/refresh-hair-body-gel-500ml-380">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/99065464_HG-002964.jpg' />
                                                            <span class="" id="loader380"></span>
                                                        </span>

                                                        <span class="prod-name-title">Refresh Hair & Body Gel (500ml)</span></a>
                                                    <span class="" id="loader'380"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="380" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds380">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cleanse-antibac-dispenser-1l-404">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/ANT1LDSEN_HG-000321.jpg' />
                                                            <span class="" id="loader404"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cleanse AntiBac Dispenser (1L)</span></a>
                                                    <span class="" id="loader'404"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="404" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds404">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/aromatherapy-handwash-dispenser-1l-white-405">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/ard1000d_HG-000654.jpg' />
                                                            <span class="" id="loader405"></span>
                                                        </span>

                                                        <span class="prod-name-title">Aromatherapy Handwash Dispenser (1L, White)</span></a>
                                                    <span class="" id="loader'405"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="405" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds405">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/7-hole-air-water-3-way-syringe-tips-clear-250pcs-410">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/7-Hole-Air-Water-Syringe-Tips_HG-001749.jpg' />
                                                            <span class="" id="loader410"></span>
                                                        </span>

                                                        <span class="prod-name-title">7 Hole Air/Water 3-Way Syringe Tips (Clear, 250pcs)</span></a>
                                                    <span class="" id="loader'410"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="410" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds410">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/biodegradable-disposable-apron-200-roll-411">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/AWRB4616_HG-006161.jpg' />
                                                            <span class="" id="loader411"></span>
                                                        </span>

                                                        <span class="prod-name-title">BioDegradable Disposable Apron(200/Roll)</span></a>
                                                    <span class="" id="loader'411"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="411" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Roll" id="UnitIds411">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bedpan-liner-600ml-20-pcs-415">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/B60020_HG-006914.jpg' />
                                                            <span class="" id="loader415"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bedpan Liner (600ml, 20 Pcs)</span></a>
                                                    <span class="" id="loader'415"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="415" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds415">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sanisafe-3-qrd-1500-wipes-418">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/sanisafe-QRD_HG-004846_HG-004397.jpg' />
                                                            <span class="" id="loader418"></span>
                                                        </span>

                                                        <span class="prod-name-title">SaniSafe® 3 - QRD (1500 Wipes)</span></a>
                                                    <span class="" id="loader'418"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="418" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds418">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sanisafe-dairy-wipes-1000-sheets-419">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/B81020038_HG-004396.jpg' />
                                                            <span class="" id="loader419"></span>
                                                        </span>

                                                        <span class="prod-name-title">SaniSafe® Dairy Wipes (1000 Sheets)</span></a>
                                                    <span class="" id="loader'419"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="419" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds419">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bodyfresh-cleansing-wipes-150-sheets-420">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/B81070019_HG-004391.jpg' />
                                                            <span class="" id="loader420"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bodyfresh Cleansing Wipes (150 Sheets)</span></a>
                                                    <span class="" id="loader'420"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="420" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds420">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/lab-transport-bags-15x25cm-250pcs-each-423">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BAGS_HG-002307.jpg' />
                                                            <span class="" id="loader423"></span>
                                                        </span>

                                                        <span class="prod-name-title">Lab Transport Bags (15x25cm, 250pcs/Each)</span></a>
                                                    <span class="" id="loader'423"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="423" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds423">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sparkle-air-water-syringe-tips-disposable-424">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BCSAWS_HG-006228.jpg' />
                                                            <span class="" id="loader424"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sparkle™ Air Water Syringe Tips Disposable</span></a>
                                                    <span class="" id="loader'424"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="424" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds424">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/syringe-sleeves-6x25cm-425">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BCSS_HG-000983.jpg' />
                                                            <span class="" id="loader425"></span>
                                                        </span>

                                                        <span class="prod-name-title">Syringe Sleeves (6x25cm)</span></a>
                                                    <span class="" id="loader'425"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="425" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds425">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/syringe-sleeves-500-box-426">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BCSSO_PHOTO_HG-000802.jpg' />
                                                            <span class="" id="loader426"></span>
                                                        </span>

                                                        <span class="prod-name-title">Syringe Sleeves (500/Box)</span></a>
                                                    <span class="" id="loader'426"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="426" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds426">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/barrier-film-10x15cm-1200-sheets-427">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Barrier-Film_HG-001751.jpg' />
                                                            <span class="" id="loader427"></span>
                                                        </span>

                                                        <span class="prod-name-title">Barrier Film (10x15cm, 1200 Sheets)</span></a>
                                                    <span class="" id="loader'427"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="427" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Roll" id="UnitIds427">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/syringe-sleeves-2-5x10-428">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Syringe-Sleeve-Covers_HG-001763.jpg' />
                                                            <span class="" id="loader428"></span>
                                                        </span>

                                                        <span class="prod-name-title">Syringe Sleeves (2.5x10)</span></a>
                                                    <span class="" id="loader'428"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="428" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds428">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cutan-metal-bracket-400ml-432">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BKT400ML_HG-006229.jpg' />
                                                            <span class="" id="loader432"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cutan Metal Bracket (400ml)</span></a>
                                                    <span class="" id="loader'432"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="432" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds432">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/esr-rack-for-8x120-2pcs-box-434">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/br100_HG-011009.jpg' />
                                                            <span class="" id="loader434"></span>
                                                        </span>

                                                        <span class="prod-name-title">ESR Rack for 8x120 (2Pcs/Box)</span></a>
                                                    <span class="" id="loader'434"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="434" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds434">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bite-trays-anterior-thin-35pcs-437">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Bite-Trays-2_HG-001755.jpg' />
                                                            <span class="" id="loader437"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bite Trays Anterior (Thin, 35pcs)</span></a>
                                                    <span class="" id="loader'437"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="437" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds437">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bite-trays-posterior-thin-50pcs-438">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Bite-Trays-2_HG-001756.jpg' />
                                                            <span class="" id="loader438"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bite Trays Posterior (Thin, 50pcs)</span></a>
                                                    <span class="" id="loader'438"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="438" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds438">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bite-trays-sideless-posterior-thin-50pcs-439">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Bite-Trays-2_HG-001758.jpg' />
                                                            <span class="" id="loader439"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bite Trays Sideless Posterior (Thin, 50pcs)</span></a>
                                                    <span class="" id="loader'439"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="439" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds439">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bite-trays-quadrant-thin-35pcs-440">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Bite-Trays-2_HG-001757.jpg' />
                                                            <span class="" id="loader440"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bite Trays Quadrant (Thin, 35pcs)</span></a>
                                                    <span class="" id="loader'440"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="440" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds440">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/confirm-10-in-office-biological-monitoring-system-441">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/c10sk_HG-002304.jpg' />
                                                            <span class="" id="loader441"></span>
                                                        </span>

                                                        <span class="prod-name-title">ConFirm™ 10 In-Office Biological Monitoring System</span></a>
                                                    <span class="" id="loader'441"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="441" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds441">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-enzymatic-foam-cleaner-750-ml-447">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Care_ENZY_HG-012117.jpg' />
                                                            <span class="" id="loader447"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Enzymatic Foam Cleaner (750 ml)</span></a>
                                                    <span class="" id="loader'447"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="447" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds447">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-surgical-intrument-lubricant-250-ml-449">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Care_INS-LB_HG-012119.jpg' />
                                                            <span class="" id="loader449"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Surgical Intrument Lubricant (250 ml)</span></a>
                                                    <span class="" id="loader'449"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="449" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds449">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-metal-care-steel-spray-750-ml-450">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Care_steel_HG-012120.jpg' />
                                                            <span class="" id="loader450"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Metal Care-Steel Spray (750 ml)</span></a>
                                                    <span class="" id="loader'450"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="450" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds450">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/refresh-luxury-3-in-1-hair-body-1l-467">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/cmw1l_HG-000673.jpg' />
                                                            <span class="" id="loader467"></span>
                                                        </span>

                                                        <span class="prod-name-title">Refresh Luxury 3-in-1 Hair & Body (1L)</span></a>
                                                    <span class="" id="loader'467"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="467" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds467">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/multisan-haccp-all-first-aid-kit-472">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/cps101-76199-by-pvs-f2f_HG-001891.jpg' />
                                                            <span class="" id="loader472"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multisan HACCP-All First Aid Kit</span></a>
                                                    <span class="" id="loader'472"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="472" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds472">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/multisan-sport-first-aid-kit-473">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/orig_40_HG-001892.jpg' />
                                                            <span class="" id="loader473"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multisan Sport First Aid Kit</span></a>
                                                    <span class="" id="loader'473"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="473" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds473">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cotton-rolls-38-1x9-5mm-479">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/CottonRoll_HG-002375.jpg' />
                                                            <span class="" id="loader479"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cotton Rolls (38.1x9.5mm)</span></a>
                                                    <span class="" id="loader'479"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="479" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds479">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/ffp2-face-mask-482">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/FFP2-b_HG-009476.jpg' />
                                                            <span class="" id="loader482"></span>
                                                        </span>

                                                        <span class="prod-name-title">FFP2 Face Mask</span></a>
                                                    <span class="" id="loader'482"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="482" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds482">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/hand-sanitising-station-silver-498">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/DISPSTDCH_HG-000320.jpg' />
                                                            <span class="" id="loader498"></span>
                                                        </span>

                                                        <span class="prod-name-title">Hand Sanitising Station (Silver)</span></a>
                                                    <span class="" id="loader'498"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="498" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds498">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/dispomedic-7-5-povidone-iodine-soap-solution-500ml-515">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/DPM0500B_HG-010205.jpg' />
                                                            <span class="" id="loader515"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dispomedic 7.5% Povidone Iodine Soap Solution (500ml)</span></a>
                                                    <span class="" id="loader'515"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="515" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds515">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/dispoyod-antiseptic-solution-10-125ml-517">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/dispoyod-wpv_600pxx600px_HG-012594.jpg' />
                                                            <span class="" id="loader517"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dispoyod antiseptic solution 10% (125ml)</span></a>
                                                    <span class="" id="loader'517"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="517" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds517">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/dispoyod-antiseptic-solution-10-500ml-518">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/dispoyod-wpv_600pxx600px_HG-012593.jpg' />
                                                            <span class="" id="loader518"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dispoyod antiseptic solution 10% (500ml)</span></a>
                                                    <span class="" id="loader'518"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="518" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds518">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/deb-handrub-display-board-a4-521">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Handrub_-01_HG-000804_HG-000804.jpg' />
                                                            <span class="" id="loader521"></span>
                                                        </span>

                                                        <span class="prod-name-title">Deb Handrub Display Board (A4)</span></a>
                                                    <span class="" id="loader'521"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="521" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds521">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/skin-stapler-f-35w-0-6mm-35-5pcs-box-533">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/DSSf35w_HG-010776.jpg' />
                                                            <span class="" id="loader533"></span>
                                                        </span>

                                                        <span class="prod-name-title">Skin Stapler F-35W 0.6mm 35 (5Pcs/Box)</span></a>
                                                    <span class="" id="loader'533"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="533" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds533">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/refresh-energie-foam-1l-538">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/ENG1L_HG-000672.jpg' />
                                                            <span class="" id="loader538"></span>
                                                        </span>

                                                        <span class="prod-name-title">Refresh™ Energie Foam (1L)</span></a>
                                                    <span class="" id="loader'538"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="538" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds538">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/exam-table-paper-white-539">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PST-CRO-ETPC21__08237.1510345220_HG-009386.jpg' />
                                                            <span class="" id="loader539"></span>
                                                        </span>

                                                        <span class="prod-name-title">Exam Table Paper (White)</span></a>
                                                    <span class="" id="loader'539"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="539" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds539">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/gritty-foam-dispenser-3-25l-548">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/GPF3LWH1_HG-000219.jpg' />
                                                            <span class="" id="loader548"></span>
                                                        </span>

                                                        <span class="prod-name-title">Gritty Foam Dispenser (3.25L)</span></a>
                                                    <span class="" id="loader'548"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="548" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds548">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cable-ties-black-300mm-1000pcs-550">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/GVZIPB300_HG-005694.jpg' />
                                                            <span class="" id="loader550"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cable Ties Black (300mm, 1000PCS)</span></a>
                                                    <span class="" id="loader'550"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="550" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds550">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cable-ties-clear-300mm-1000pcs-551">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/GVZIPN300_HG-006160.jpg' />
                                                            <span class="" id="loader551"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cable Ties Clear (300mm, 1000PCS)</span></a>
                                                    <span class="" id="loader'551"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="551" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds551">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/estesol-hair-body-1l-552">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HAB1L_HG-000220.jpg' />
                                                            <span class="" id="loader552"></span>
                                                        </span>

                                                        <span class="prod-name-title">Estesol Hair & Body (1L)</span></a>
                                                    <span class="" id="loader'552"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="552" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds552">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/stokoderm-triple-active-gel-dispenser-563">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HC111004_HG-001494.jpg' />
                                                            <span class="" id="loader563"></span>
                                                        </span>

                                                        <span class="prod-name-title">Stokoderm® Triple Active Gel Dispenser</span></a>
                                                    <span class="" id="loader'563"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="563" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds563">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cleanse-heavy-dispenser-2l-571">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HVY2LDPEN_HG-000217.jpg' />
                                                            <span class="" id="loader571"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cleanse Heavy Dispenser (2L)</span></a>
                                                    <span class="" id="loader'571"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="571" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds571">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/tongue-depressors-15cm-500pcs-each-572">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/IC_HG-001179_HG-009411.jpg' />
                                                            <span class="" id="loader572"></span>
                                                        </span>

                                                        <span class="prod-name-title">Tongue Depressors (15cm, 500pcs/Each)</span></a>
                                                    <span class="" id="loader'572"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="572" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds572">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Dr Helewa Pre-Moistened Wash Gloves (12 Pcs)" data-image="#backend/web/productimage/WashGlove_HG-006915.jpg" data-id="ICBATH12" class="availablein">Available In</a>

                                                    <a href="/products/item/dr-helewa-pre-moistened-wash-gloves-12-pcs-573">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/WashGlove_HG-006915.jpg' />
                                                            <span class="" id="loader573"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dr Helewa Pre-Moistened Wash Gloves (12 Pcs)</span></a>
                                                    <span class="" id="loader'573"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="573" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds573">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/instantfoam-touch-free-dispenser-1-2l-white-576">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/IFSTF2EN_HG-000221.jpg' />
                                                            <span class="" id="loader576"></span>
                                                        </span>

                                                        <span class="prod-name-title">InstantFoam Touch Free Dispenser (1.2L, White)</span></a>
                                                    <span class="" id="loader'576"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="576" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds576">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sani-hld-holder-35-2cm-x-24-4cm-x-13cm-584">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/JHOLD_HG-000969.jpg' />
                                                            <span class="" id="loader584"></span>
                                                        </span>

                                                        <span class="prod-name-title">SANI HLD Holder (35.2cm x 24.4cm x 13cm)</span></a>
                                                    <span class="" id="loader'584"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="584" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds584">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bacter-quat-750ml-632">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/LSLG062_HG-000640.jpg' />
                                                            <span class="" id="loader632"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bacter Quat (750ml)</span></a>
                                                    <span class="" id="loader'632"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="632" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds632">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/bacter-quat-4l-637">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/LSLG064_HG-000641_HG-003614.jpg' />
                                                            <span class="" id="loader637"></span>
                                                        </span>

                                                        <span class="prod-name-title">Bacter Quat (4L)</span></a>
                                                    <span class="" id="loader'637"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="637" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds637">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sprayer-master-ergo-1000-1l-648">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/master-ergo1000_HG-002020.jpg' />
                                                            <span class="" id="loader648"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sprayer Master ergo 1000 (1L)</span></a>
                                                    <span class="" id="loader'648"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="648" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds648">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sprayer-master-ergo-2000-2l-649">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/master-ergo2000_HG-002019.jpg' />
                                                            <span class="" id="loader649"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sprayer Master ergo 2000 (2L)</span></a>
                                                    <span class="" id="loader'649"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="649" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds649">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/ndp-med-foam-200ml-663">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Vesismin_NDP_Foam-300x285_HG-005349.jpg' />
                                                            <span class="" id="loader663"></span>
                                                        </span>

                                                        <span class="prod-name-title">NDP Med Foam (200ml)</span></a>
                                                    <span class="" id="loader'663"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="663" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds663">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/anti-bacterial-cleaner-32-oz-669">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/MG10532_HG-010915.jpg' />
                                                            <span class="" id="loader669"></span>
                                                        </span>

                                                        <span class="prod-name-title">Anti-Bacterial Cleaner (32 OZ)</span></a>
                                                    <span class="" id="loader'669"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="669" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds669">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/schools-mr-soapy-soap-dispenser-1l-682">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/MSS1LDS_HG-001499.jpg' />
                                                            <span class="" id="loader682"></span>
                                                        </span>

                                                        <span class="prod-name-title">Schools _ Mr Soapy Soap_ Dispenser (1L)</span></a>
                                                    <span class="" id="loader'682"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="682" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds682">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cytotoxic-waste-bag-5x50pcs-5kg-683">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/MVN453_HG-005695.jpg' />
                                                            <span class="" id="loader683"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cytotoxic Waste Bag (5x50pcs, 5kg)</span></a>
                                                    <span class="" id="loader'683"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="683" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds683">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Multi Detachable & Disposable Fitted Sheet (3/Pack)" data-image="#backend/web/productimage/HelewaNewBedding_HG-009314.jpg" data-id="NBED1003" class="availablein">Available In</a>

                                                    <a href="/products/item/multi-detachable-disposable-fitted-sheet-3-pack-699">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HelewaNewBedding_HG-009314.jpg' />
                                                            <span class="" id="loader699"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multi Detachable & Disposable Fitted Sheet (3/Pack)</span></a>
                                                    <span class="" id="loader'699"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="699" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds699">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Multi Detachable & Disposable Fitted Sheet (5/Pack)" data-image="#backend/web/productimage/HelewaNewBedding_HG-009315.jpg" data-id="NBED1005" class="availablein">Available In</a>

                                                    <a href="/products/item/multi-detachable-disposable-fitted-sheet-5-pack-700">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HelewaNewBedding_HG-009315.jpg' />
                                                            <span class="" id="loader700"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multi Detachable & Disposable Fitted Sheet (5/Pack)</span></a>
                                                    <span class="" id="loader'700"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="700" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds700">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Multi Detachable & Disposable Fitted Sheet (5/Pack)" data-image="#backend/web/productimage/HelewaNewBedding_HG-009316.jpg" data-id="NBED1405" class="availablein">Available In</a>

                                                    <a href="/products/item/multi-detachable-disposable-fitted-sheet-5-pack-701">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/HelewaNewBedding_HG-009316.jpg' />
                                                            <span class="" id="loader701"></span>
                                                        </span>

                                                        <span class="prod-name-title">Multi Detachable & Disposable Fitted Sheet (5/Pack)</span></a>
                                                    <span class="" id="loader'701"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="701" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pack" id="UnitIds701">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/standard-dry-block-incubators-11mm-704">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/NDB-060E_HG-001182_HG-009412.jpg' />
                                                            <span class="" id="loader704"></span>
                                                        </span>

                                                        <span class="prod-name-title">Standard Dry Block Incubators (11mm)</span></a>
                                                    <span class="" id="loader'704"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="704" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds704">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/non-woven-sponges-5x5cm-32gm-708">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Sponge_HG-002376.jpg' />
                                                            <span class="" id="loader708"></span>
                                                        </span>

                                                        <span class="prod-name-title">Non-Woven Sponges (5x5cm, 32gm)</span></a>
                                                    <span class="" id="loader'708"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="708" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds708">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxybac-dispenser-1l-719">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/OXY1LDS_HG-000243.jpg' />
                                                            <span class="" id="loader719"></span>
                                                        </span>

                                                        <span class="prod-name-title">OxyBAC Dispenser (1L)</span></a>
                                                    <span class="" id="loader'719"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="719" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds719">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/knapsack-rx12-12l-722">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/RX_zoom_HG-002021.jpg' />
                                                            <span class="" id="loader722"></span>
                                                        </span>

                                                        <span class="prod-name-title">Knapsack RX12 (12L)</span></a>
                                                    <span class="" id="loader'722"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="722" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds722">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sprayer-titan-20l-723">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/p-20_HG-002018.jpg' />
                                                            <span class="" id="loader723"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sprayer Titan (20L)</span></a>
                                                    <span class="" id="loader'723"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="723" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds723">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/trolley-hand-sprayer-20l-724">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Marolex_MX20_Trolley_Sprayer-254-105_HG-001251.jpg' />
                                                            <span class="" id="loader724"></span>
                                                        </span>

                                                        <span class="prod-name-title">Trolley Hand Sprayer (20L)</span></a>
                                                    <span class="" id="loader'724"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="724" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds724">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-prophy-angles-purple-100pcs-725">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/DEFEND-Plus-Prophy-Angles_HG-001759.jpg' />
                                                            <span class="" id="loader725"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Prophy Angles (Purple, 100pcs)</span></a>
                                                    <span class="" id="loader'725"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="725" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds725">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-prophy-angles-green-100pcs-726">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/DEFEND-Plus-Prophy-Angles_HG-001760.jpg' />
                                                            <span class="" id="loader726"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Prophy Angles (Green, 100pcs)</span></a>
                                                    <span class="" id="loader'726"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="726" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds726">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-pre-bent-dispensing-tips-25g-100pcs-770">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Pre-Bent-Dispensing-Tips_HG-003354.jpg' />
                                                            <span class="" id="loader770"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Pre-Bent Dispensing Tips (25G, 100pcs)</span></a>
                                                    <span class="" id="loader'770"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="770" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds770">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/prosan-chlorine-1-67g-nadcc-6-x-200-tablets-771">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PN501_HG-002986.jpg' />
                                                            <span class="" id="loader771"></span>
                                                        </span>

                                                        <span class="prod-name-title">Prosan Chlorine 1.67g Nadcc (6 x 200 Tablets)</span></a>
                                                    <span class="" id="loader'771"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="771" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Case" id="UnitIds771">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/protect-dispenser-1l-780">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PRO1LDSEN_HG-000247.jpg' />
                                                            <span class="" id="loader780"></span>
                                                        </span>

                                                        <span class="prod-name-title">Protect Dispenser (1L)</span></a>
                                                    <span class="" id="loader'780"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="780" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds780">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cutan-moisturising-cream-dispenser-1l-782">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PROB01HCMC_HG-006616.jpg' />
                                                            <span class="" id="loader782"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cutan Moisturising Cream Dispenser (1L)</span></a>
                                                    <span class="" id="loader'782"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="782" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds782">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/healthcare-hand-sanitiser-dispenser-7-circles-1l-784">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PROb01SA_HG-001729.jpg' />
                                                            <span class="" id="loader784"></span>
                                                        </span>

                                                        <span class="prod-name-title">Healthcare Hand Sanitiser Dispenser - 7 Circles (1L)</span></a>
                                                    <span class="" id="loader'784"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="784" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds784">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/amity-biocide-2-5l-793">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PX07_HG-012636.jpg' />
                                                            <span class="" id="loader793"></span>
                                                        </span>

                                                        <span class="prod-name-title">Amity Biocide (2.5L)</span></a>
                                                    <span class="" id="loader'793"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="793" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds793">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/smart-one-dispenser-801">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/R-1311_HG-000257.jpg' />
                                                            <span class="" id="loader801"></span>
                                                        </span>

                                                        <span class="prod-name-title">Smart One Dispenser</span></a>
                                                    <span class="" id="loader'801"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="801" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds801">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/mini-smart-one-toilet-dispenser-802">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/R-1311S_HG-000258.jpg' />
                                                            <span class="" id="loader802"></span>
                                                        </span>

                                                        <span class="prod-name-title">Mini Smart One Toilet Dispenser</span></a>
                                                    <span class="" id="loader'802"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="802" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds802">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sensor-hygienic-toilet-seat-cover-803">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/R-1314_HG-001277.jpg' />
                                                            <span class="" id="loader803"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sensor Hygienic Toilet Seat Cover</span></a>
                                                    <span class="" id="loader'803"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="803" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Pieces" id="UnitIds803">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/c-v-fold-toilet-paper-dispenser-805">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/R-1319_HG-004947.jpg' />
                                                            <span class="" id="loader805"></span>
                                                        </span>

                                                        <span class="prod-name-title">C/V Fold Toilet Paper Dispenser</span></a>
                                                    <span class="" id="loader'805"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="805" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds805">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/smart-one-toilet-paper-refill-6pcs-808">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/R-2604_HG-000261.jpg' />
                                                            <span class="" id="loader808"></span>
                                                        </span>

                                                        <span class="prod-name-title">Smart One Toilet Paper Refill (6pcs)</span></a>
                                                    <span class="" id="loader'808"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="808" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Carton" id="UnitIds808">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/odex-cabinet-rinse-aid-5l-814">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/RAWW60_HG-002974.jpg' />
                                                            <span class="" id="loader814"></span>
                                                        </span>

                                                        <span class="prod-name-title">Odex® Cabinet Rinse Aid (5L)</span></a>
                                                    <span class="" id="loader'814"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="814" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds814">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/restore-dispenser-1l-816">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/RES1LDSEN_HG-000269.jpg' />
                                                            <span class="" id="loader816"></span>
                                                        </span>

                                                        <span class="prod-name-title">Restore Dispenser (1L)</span></a>
                                                    <span class="" id="loader'816"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="816" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds816">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/refresh-luxury-shower-dispenser-1l-822">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/RSH1LDSEN_HG-002586.jpg' />
                                                            <span class="" id="loader822"></span>
                                                        </span>

                                                        <span class="prod-name-title">Refresh Luxury Shower Dispenser (1L)</span></a>
                                                    <span class="" id="loader'822"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="822" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds822">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sah-facial-tissue-50-sheets-3-plies-blue-829">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/BLUE_150_-_FRONT_HG-000573.jpg' />
                                                            <span class="" id="loader829"></span>
                                                        </span>

                                                        <span class="prod-name-title">SAH Facial Tissue (50 Sheets, 3 Plies, Blue)</span></a>
                                                    <span class="" id="loader'829"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="829" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds829">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sah-facial-tissue-50-sheets-3-plies-pink-830">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/PINK_150_HG-000574.jpg' />
                                                            <span class="" id="loader830"></span>
                                                        </span>

                                                        <span class="prod-name-title">SAH Facial Tissue (50 Sheets, 3 Plies, Pink)</span></a>
                                                    <span class="" id="loader'830"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="830" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds830">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sah-facial-tissue-50-sheets-3-plies-silver-831">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Silver_150_HG-000575.jpg' />
                                                            <span class="" id="loader831"></span>
                                                        </span>

                                                        <span class="prod-name-title">SAH Facial Tissue (50 Sheets, 3 Plies, Silver)</span></a>
                                                    <span class="" id="loader'831"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="831" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds831">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sah-wallet-tissue-24x8-sheets-3-plies-pink-833">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Pink_wallet_HG-000576.jpg' />
                                                            <span class="" id="loader833"></span>
                                                        </span>

                                                        <span class="prod-name-title">SAH Wallet Tissue (24x8 Sheets, 3 Plies, Pink)</span></a>
                                                    <span class="" id="loader'833"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="833" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds833">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/exclusive-diffuser-840">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Diffuser_HG-001161_HG-003532.jpg' />
                                                            <span class="" id="loader840"></span>
                                                        </span>

                                                        <span class="prod-name-title">Exclusive Diffuser</span></a>
                                                    <span class="" id="loader'840"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="840" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds840">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sanitise-foam-dispenser-1l-841">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SAN1LDSEN_HG-000271.jpg' />
                                                            <span class="" id="loader841"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sanitise Foam Dispenser (1L)</span></a>
                                                    <span class="" id="loader'841"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="841" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds841">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-hand-skin-disinfectant-1l-850">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Sept_HG-012122.jpg' />
                                                            <span class="" id="loader850"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Hand & Skin Disinfectant (1L)</span></a>
                                                    <span class="" id="loader'850"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="850" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds850">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-hand-skin-antiseptic-1l-851">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Sept_CH_HG-012121.jpg' />
                                                            <span class="" id="loader851"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Hand & Skin Antiseptic (1L)</span></a>
                                                    <span class="" id="loader'851"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="851" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds851">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-hand-skin-disinfectant-gel-500-ml-853">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Sept_Gel_HG-012133.jpg' />
                                                            <span class="" id="loader853"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Hand & Skin Disinfectant Gel (500 ml)</span></a>
                                                    <span class="" id="loader'853"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="853" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds853">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/stokolan-light-gel-100ml-859">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/sge100ml_HG-000556.jpg' />
                                                            <span class="" id="loader859"></span>
                                                        </span>

                                                        <span class="prod-name-title">Stokolan® Light Gel (100ml)</span></a>
                                                    <span class="" id="loader'859"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="859" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds859">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/soapergirl-dispenser-1l-863">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SGIRL1LDS_HG-001480.jpg' />
                                                            <span class="" id="loader863"></span>
                                                        </span>

                                                        <span class="prod-name-title">Soapergirl Dispenser (1L)</span></a>
                                                    <span class="" id="loader'863"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="863" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds863">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cleanse-shower-dispenser-1l-864">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SHW1LDSEN_HG-000274.jpg' />
                                                            <span class="" id="loader864"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cleanse Shower Dispenser (1L)</span></a>
                                                    <span class="" id="loader'864"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="864" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds864">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sani-tube-nylon-sterilization-tubing-30m-roll-5cm-865">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SI3_HG-001739_HG-002235.jpg' />
                                                            <span class="" id="loader865"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 5cm)</span></a>
                                                    <span class="" id="loader'865"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="865" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds865">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sani-tube-nylon-sterilization-tubing-30m-roll-10cm-866">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SI3_HG-001739_HG-002301.jpg' />
                                                            <span class="" id="loader866"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 10cm)</span></a>
                                                    <span class="" id="loader'866"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="866" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds866">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sani-tube-nylon-sterilization-tubing-30m-roll-15cm-867">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SI3_HG-001739_HG-002302.jpg' />
                                                            <span class="" id="loader867"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 15cm)</span></a>
                                                    <span class="" id="loader'867"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="867" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds867">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uv-children-s-protect-dispenser-1l-874">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SKCSUNDISP_HG-001498.jpg' />
                                                            <span class="" id="loader874"></span>
                                                        </span>

                                                        <span class="prod-name-title">UV Children_ s Protect Dispenser (1L)</span></a>
                                                    <span class="" id="loader'874"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="874" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds874">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/soaperman-dispenser-1l-875">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SMAN1LDSEN_HG-001731.jpg' />
                                                            <span class="" id="loader875"></span>
                                                        </span>

                                                        <span class="prod-name-title">Soaperman Dispenser (1L)</span></a>
                                                    <span class="" id="loader'875"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="875" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds875">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-general-purpose-cleaner-1gal-878">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/General-Purpose-Cleaner-1-Ultrasonic-Solution_HG-003425.jpg' />
                                                            <span class="" id="loader878"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND General Purpose Cleaner (1gal)</span></a>
                                                    <span class="" id="loader'878"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="878" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bottle" id="UnitIds878">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/mr-soapy-soap-dispenser-1l-879">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SOABSOAP_HG-000277.jpg' />
                                                            <span class="" id="loader879"></span>
                                                        </span>

                                                        <span class="prod-name-title">Mr Soapy Soap Dispenser (1L)</span></a>
                                                    <span class="" id="loader'879"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="879" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds879">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-sterilization-pouches-50x220mm-200pcs-883">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SP-0350-SJ_HG-002344.jpg' />
                                                            <span class="" id="loader883"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Sterilization Pouches (50x220mm, 200pcs)</span></a>
                                                    <span class="" id="loader'883"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="883" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds883">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-sterilization-pouches-70x255mm-200pcs-884">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SP-0350-SJ_HG-002345.jpg' />
                                                            <span class="" id="loader884"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Sterilization Pouches (70x255mm, 200pcs)</span></a>
                                                    <span class="" id="loader'884"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="884" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds884">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-plus-sterilization-pouches-190x360mm-200pcs-box-885">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SP-0350-SJ_HG-002373.jpg' />
                                                            <span class="" id="loader885"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND+PLUS Sterilization Pouches (190x360mm, 200pcs/Box)</span></a>
                                                    <span class="" id="loader'885"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="885" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds885">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-spray-disinfectant-1l-887">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Spray_HG-012124.jpg' />
                                                            <span class="" id="loader887"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Spray Disinfectant (1L)</span></a>
                                                    <span class="" id="loader'887"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="887" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds887">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/i-d-spray-nest-disinfectant-1l-888">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Spray_nest_HG-012126.jpg' />
                                                            <span class="" id="loader888"></span>
                                                        </span>

                                                        <span class="prod-name-title">I&D Spray-Nest Disinfectant (1L)</span></a>
                                                    <span class="" id="loader'888"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="888" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds888">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/scraper-scoop-350-pcs-895">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SSGV100_HG-006163.jpg' />
                                                            <span class="" id="loader895"></span>
                                                        </span>

                                                        <span class="prod-name-title">Scraper / Scoop (350 Pcs)</span></a>
                                                    <span class="" id="loader'895"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="895" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds895">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/surgical-aspirator-tips-1-59mm-25pcs-898">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Surgical-Aspirator-Tips_HG-001747.jpg' />
                                                            <span class="" id="loader898"></span>
                                                        </span>

                                                        <span class="prod-name-title">Surgical Aspirator Tips (1.59mm, 25pcs)</span></a>
                                                    <span class="" id="loader'898"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="898" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds898">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/surgical-aspirator-tips-6-35mm-25pcs-899">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Surgical-Aspirator-Tips_HG-001745.jpg' />
                                                            <span class="" id="loader899"></span>
                                                        </span>

                                                        <span class="prod-name-title">Surgical Aspirator Tips (6.35mm, 25pcs)</span></a>
                                                    <span class="" id="loader'899"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="899" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds899">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sun-protect-dispenser-1l-901">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SUN1LDSEN_HG-000278.jpg' />
                                                            <span class="" id="loader901"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sun Protect Dispenser (1L)</span></a>
                                                    <span class="" id="loader'901"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="901" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds901">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sun-heroes-dispenser-1l-903">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/SUNHR01LD_HG-002963.jpg' />
                                                            <span class="" id="loader903"></span>
                                                        </span>

                                                        <span class="prod-name-title">Sun Heroes Dispenser (1L)</span></a>
                                                    <span class="" id="loader'903"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="903" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds903">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Heat Cream (200ml)" data-image="#backend/web/productimage/T3001_HG-001465.jpg" data-id="T3001" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-heat-cream-200ml-904">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3001_HG-001465.jpg' />
                                                            <span class="" id="loader904"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Heat Cream (200ml)</span></a>
                                                    <span class="" id="loader'904"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="904" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds904">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Intense Heat Cream (200ml)" data-image="#backend/web/productimage/T3002_HG-001467.jpg" data-id="T3002" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-intense-heat-cream-200ml-905">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3002_HG-001467.jpg' />
                                                            <span class="" id="loader905"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Heat Cream (200ml)</span></a>
                                                    <span class="" id="loader'905"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="905" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds905">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Cooling Gel (200ml)" data-image="#backend/web/productimage/T3003_HG-001469.jpg" data-id="T3003" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-cooling-gel-200ml-906">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3003_HG-001469.jpg' />
                                                            <span class="" id="loader906"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Cooling Gel (200ml)</span></a>
                                                    <span class="" id="loader'906"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="906" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds906">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Intense Cooling Gel (200ml)" data-image="#backend/web/productimage/T3004_HG-001471.jpg" data-id="T3004" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-intense-cooling-gel-200ml-907">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3004_HG-001471.jpg' />
                                                            <span class="" id="loader907"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Cooling Gel (200ml)</span></a>
                                                    <span class="" id="loader'907"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="907" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds907">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Replenishing Gel (200ml)" data-image="#backend/web/productimage/T3005_HG-001473.jpg" data-id="T3005" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-replenishing-gel-200ml-908">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3005_HG-001473.jpg' />
                                                            <span class="" id="loader908"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Replenishing Gel (200ml)</span></a>
                                                    <span class="" id="loader'908"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="908" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds908">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Cold/Hot Pack (130x260mm)" data-image="#backend/web/productimage/T3022_HG-001475.jpg" data-id="T3022" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-cold-hot-pack-130x260mm-910">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3022_HG-001475.jpg' />
                                                            <span class="" id="loader910"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Cold/Hot Pack (130x260mm)</span></a>
                                                    <span class="" id="loader'910"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="910" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds910">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Heat Cream (100ml)" data-image="#backend/web/productimage/T3024_HG-001464.jpg" data-id="T3024" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-heat-cream-100ml-911">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3024_HG-001464.jpg' />
                                                            <span class="" id="loader911"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Heat Cream (100ml)</span></a>
                                                    <span class="" id="loader'911"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="911" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds911">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Intense Heat Cream (100ml)" data-image="#backend/web/productimage/T3025_HG-001466.jpg" data-id="T3025" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-intense-heat-cream-100ml-912">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3025_HG-001466.jpg' />
                                                            <span class="" id="loader912"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Heat Cream (100ml)</span></a>
                                                    <span class="" id="loader'912"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="912" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds912">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Cooling Gel (100ml)" data-image="#backend/web/productimage/T3026_HG-001468.jpg" data-id="T3026" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-cooling-gel-100ml-913">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3026_HG-001468.jpg' />
                                                            <span class="" id="loader913"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Cooling Gel (100ml)</span></a>
                                                    <span class="" id="loader'913"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="913" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds913">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Intense Cooling Gel (100ml)" data-image="#backend/web/productimage/T3027_HG-001470.jpg" data-id="T3027" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-intense-cooling-gel-100ml-914">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3027_HG-001470.jpg' />
                                                            <span class="" id="loader914"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Cooling Gel (100ml)</span></a>
                                                    <span class="" id="loader'914"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="914" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds914">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="OXD Replenishing Gel (100ml)" data-image="#backend/web/productimage/T3028_HG-001472.jpg" data-id="T3028" class="availablein">Available In</a>

                                                    <a href="/products/item/oxd-replenishing-gel-100ml-915">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3028_HG-001472.jpg' />
                                                            <span class="" id="loader915"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Replenishing Gel (100ml)</span></a>
                                                    <span class="" id="loader'915"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="915" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds915">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-intense-heat-cream-1l-917">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3030_HG-005406.jpg' />
                                                            <span class="" id="loader917"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Heat Cream (1L)</span></a>
                                                    <span class="" id="loader'917"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="917" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds917">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-cooling-gel-1l-918">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3031_HG-005409.jpg' />
                                                            <span class="" id="loader918"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Cooling Gel (1L)</span></a>
                                                    <span class="" id="loader'918"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="918" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds918">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-intense-cooling-gel-1l-919">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3032_HG-005408.jpg' />
                                                            <span class="" id="loader919"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Intense Cooling Gel (1L)</span></a>
                                                    <span class="" id="loader'919"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="919" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds919">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-ultrasound-gel-blue-250ml-923">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3040_HG-012195.jpg' />
                                                            <span class="" id="loader923"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Ultrasound Gel (Blue, 250ml)</span></a>
                                                    <span class="" id="loader'923"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="923" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds923">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-ultra-sound-gel-blue-1l-924">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3041_HG-005386.jpg' />
                                                            <span class="" id="loader924"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Ultra Sound Gel - Blue (1L)</span></a>
                                                    <span class="" id="loader'924"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="924" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds924">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-ultra-sound-gel-clear-250ml-925">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/T3044_HG-008432.jpg' />
                                                            <span class="" id="loader925"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Ultra Sound Gel - Clear (250ml)</span></a>
                                                    <span class="" id="loader'925"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="925" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds925">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-body-lotion-1l-926">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TBC00_HG-009394.jpg' />
                                                            <span class="" id="loader926"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Body Lotion (1L)</span></a>
                                                    <span class="" id="loader'926"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="926" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds926">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/translucent-dispenser-1l-black-927">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TBK1LDS_HG-001496.jpg' />
                                                            <span class="" id="loader927"></span>
                                                        </span>

                                                        <span class="prod-name-title">Translucent Dispenser (1L, Black)</span></a>
                                                    <span class="" id="loader'927"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="927" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds927">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/blayco-face-shield-50-carton-929">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Telic_FM_HG-012592.jpg' />
                                                            <span class="" id="loader929"></span>
                                                        </span>

                                                        <span class="prod-name-title">Blayco Face Shield (50/Carton)</span></a>
                                                    <span class="" id="loader'929"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="929" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Carton" id="UnitIds929">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-moisturizing-cream-1l-930">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TBT01_HG-009395.jpg' />
                                                            <span class="" id="loader930"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Moisturizing cream (1L)</span></a>
                                                    <span class="" id="loader'930"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="930" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds930">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-anti-cellulite-gel-1l-931">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TBT02_HG-009396.jpg' />
                                                            <span class="" id="loader931"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Anti-Cellulite Gel (1L)</span></a>
                                                    <span class="" id="loader'931"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="931" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds931">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/touchfree-ultra-dispenser-1-2l-blue-932">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TF2AZU_HG-000291.jpg' />
                                                            <span class="" id="loader932"></span>
                                                        </span>

                                                        <span class="prod-name-title">TouchFREE Ultra Dispenser (1.2L, Blue)</span></a>
                                                    <span class="" id="loader'932"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="932" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds932">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-neutral-massage-oil-1l-934">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA04_HG-005404.jpg' />
                                                            <span class="" id="loader934"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Neutral Massage Oil (1L)</span></a>
                                                    <span class="" id="loader'934"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="934" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds934">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-shea-butter-body-oil-500ml-935">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA0K_HG-008431.jpg' />
                                                            <span class="" id="loader935"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Shea Butter Body Oil (500ml)</span></a>
                                                    <span class="" id="loader'935"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="935" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds935">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-tired-legs-massage-oil-500ml-936">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA0O_HG-008430.jpg' />
                                                            <span class="" id="loader936"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Tired Legs Massage Oil (500ml)</span></a>
                                                    <span class="" id="loader'936"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="936" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds936">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-relating-body-oil-500ml-937">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA0P_HG-009397.jpg' />
                                                            <span class="" id="loader937"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Relating Body Oil (500ml)</span></a>
                                                    <span class="" id="loader'937"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="937" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds937">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-arggang-body-oil-500ml-938">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA0R_HG-009398.jpg' />
                                                            <span class="" id="loader938"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Arggang Body Oil (500ml)</span></a>
                                                    <span class="" id="loader'938"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="938" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds938">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-massage-oil-with-arnica-1l-939">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFA0T_HG-005401.jpg' />
                                                            <span class="" id="loader939"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Massage Oil with Arnica (1L)</span></a>
                                                    <span class="" id="loader'939"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="939" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds939">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-neutral-cream-long-massages-1l-941">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/crema-neutra-masajes-prolongados-1000ml_HG-009281.jpg' />
                                                            <span class="" id="loader941"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Neutral Cream Long Massages (1L)</span></a>
                                                    <span class="" id="loader'941"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="941" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds941">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sc-arnica-gel-100ml-946">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFG07_HG-009400.jpg' />
                                                            <span class="" id="loader946"></span>
                                                        </span>

                                                        <span class="prod-name-title">SC Arnica Gel (100ml)</span></a>
                                                    <span class="" id="loader'946"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="946" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds946">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/sc-cold-gel-200ml-947">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFG25_HG-009401.jpg' />
                                                            <span class="" id="loader947"></span>
                                                        </span>

                                                        <span class="prod-name-title">SC Cold Gel (200ml)</span></a>
                                                    <span class="" id="loader'947"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="947" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds947">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-neutral-massage-lotion-1l-948">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TFLM1_HG-009402.jpg' />
                                                            <span class="" id="loader948"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Neutral Massage Lotion (1L)</span></a>
                                                    <span class="" id="loader'948"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="948" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds948">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-anti-cellulite-mild-heat-effect-cream-1kg-955">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TOCB1_HG-008429.jpg' />
                                                            <span class="" id="loader955"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Anti-Cellulite Mild Heat Effect Cream (1KG)</span></a>
                                                    <span class="" id="loader'955"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="955" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds955">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/uman-cream-for-cryotherapy-1l-956">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TOCB8_HG-009406.jpg' />
                                                            <span class="" id="loader956"></span>
                                                        </span>

                                                        <span class="prod-name-title">UMAN Cream for Cryotherapy (1L)</span></a>
                                                    <span class="" id="loader'956"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="956" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds956">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/oxd-electro-gel-g-10-250ml-957">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TOG01_HG-005412.jpg' />
                                                            <span class="" id="loader957"></span>
                                                        </span>

                                                        <span class="prod-name-title">OXD Electro-Gel G-10 (250ml)</span></a>
                                                    <span class="" id="loader'957"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="957" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds957">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/deb-drip-tray-white-961">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TRYWHI_HG-003457.jpg' />
                                                            <span class="" id="loader961"></span>
                                                        </span>

                                                        <span class="prod-name-title">Deb Drip Tray (White)</span></a>
                                                    <span class="" id="loader'961"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="961" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds961">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/c-100-4l-964">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TSMA008_HG-000666_HG-000666.jpg' />
                                                            <span class="" id="loader964"></span>
                                                        </span>

                                                        <span class="prod-name-title">C-100 (4L)</span></a>
                                                    <span class="" id="loader'964"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="964" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds964">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/polish-4l-967">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/tsmi010_HG-000670_HG-000670.jpg' />
                                                            <span class="" id="loader967"></span>
                                                        </span>

                                                        <span class="prod-name-title">Polish (4L)</span></a>
                                                    <span class="" id="loader'967"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="967" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds967">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/deka-4l-968">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TSPR_006_HG-000825_HG-000825.jpg' />
                                                            <span class="" id="loader968"></span>
                                                        </span>

                                                        <span class="prod-name-title">Deka (4L)</span></a>
                                                    <span class="" id="loader'968"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="968" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds968">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/dura-plus-2-4l-970">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TSTM-005_HG-000998.jpg' />
                                                            <span class="" id="loader970"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dura Plus-2 (4L)</span></a>
                                                    <span class="" id="loader'970"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="970" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds970">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/vitro-base-4l-971">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/TSTV_006_HG-000826_HG-000826.jpg' />
                                                            <span class="" id="loader971"></span>
                                                        </span>

                                                        <span class="prod-name-title">Vitro Base (4L)</span></a>
                                                    <span class="" id="loader'971"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="971" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds971">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/vitro-fin-4l-972">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/tstv_026_HG-001254_HG-001254.jpg' />
                                                            <span class="" id="loader972"></span>
                                                        </span>

                                                        <span class="prod-name-title">Vitro Fin (4L)</span></a>
                                                    <span class="" id="loader'972"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="972" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds972">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/twincruiser-vgf-230v-50hz-975">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VIG_IM_TWC01a_HG-000907.JPG' />
                                                            <span class="" id="loader975"></span>
                                                        </span>

                                                        <span class="prod-name-title">TwinCruiser® VGF (230V, 50Hz)</span></a>
                                                    <span class="" id="loader'975"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="975" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds975">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/translucent-dispenser-1l-white-976">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/twh1lds_HG-001495.jpg' />
                                                            <span class="" id="loader976"></span>
                                                        </span>

                                                        <span class="prod-name-title">Translucent Dispenser (1L, White)</span></a>
                                                    <span class="" id="loader'976"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="976" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds976">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Dr Helewa Male Urinal 600 (20Pcs)" data-image="#backend/web/productimage/UrinalBag_HG-006913.jpg" data-id="U60020" class="availablein">Available In</a>

                                                    <a href="/products/item/dr-helewa-male-urinal-600-20pcs-980">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/UrinalBag_HG-006913.jpg' />
                                                            <span class="" id="loader980"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dr Helewa Male Urinal 600 (20Pcs)</span></a>
                                                    <span class="" id="loader'980"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="980" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds980">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/cleanse-ultra-dispenser-2l-982">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/ULT2LDPEN_HG-000323.jpg' />
                                                            <span class="" id="loader982"></span>
                                                        </span>

                                                        <span class="prod-name-title">Cleanse Ultra Dispenser (2L)</span></a>
                                                    <span class="" id="loader'982"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="982" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds982">
                                                <div class="prod-slide-box">
                                                    <a href="javascript:void(0)" data-pname="Dr Helewa Vomit bag 600 (20Pcs)" data-image="#backend/web/productimage/VomitBag_HG-006912.jpg" data-id="V60020" class="availablein">Available In</a>

                                                    <a href="/products/item/dr-helewa-vomit-bag-600-20pcs-986">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VomitBag_HG-006912.jpg' />
                                                            <span class="" id="loader986"></span>
                                                        </span>

                                                        <span class="prod-name-title">Dr Helewa Vomit bag 600 (20Pcs)</span></a>
                                                    <span class="" id="loader'986"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="986" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds986">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/virus-gurad-long-term-disinfection-wipes-300-wipes-bucket-991">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VG_Wipes_HG-012591.jpg' />
                                                            <span class="" id="loader991"></span>
                                                        </span>

                                                        <span class="prod-name-title">Virus-Gurad Long Term Disinfection Wipes (300 Wipes/Bucket)</span></a>
                                                    <span class="" id="loader'991"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="991" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds991">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/clear-intra-oral-tips-small-100pcs-992">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Clear-Intra-Oral-Tips_HG-003358.jpg' />
                                                            <span class="" id="loader992"></span>
                                                        </span>

                                                        <span class="prod-name-title">Clear Intra-Oral Tips (Small,100pcs)</span></a>
                                                    <span class="" id="loader'992"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="992" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds992">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/yellow-intra-oral-tips-100pcs-993">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/Yellow-Intra-Oral-Tips-2_HG-003357.jpg' />
                                                            <span class="" id="loader993"></span>
                                                        </span>

                                                        <span class="prod-name-title">Yellow Intra-Oral Tips (100pcs)</span></a>
                                                    <span class="" id="loader'993"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="993" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds993">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/t-mix-mixing-tips-teal-994">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VP-8104T_HG-002338.jpg' />
                                                            <span class="" id="loader994"></span>
                                                        </span>

                                                        <span class="prod-name-title">T-Mix Mixing Tips (Teal)</span></a>
                                                    <span class="" id="loader'994"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="994" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds994">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/t-mix-mixing-tips-yellow-995">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VP-8105T_HG-002337.jpg' />
                                                            <span class="" id="loader995"></span>
                                                        </span>

                                                        <span class="prod-name-title">T-Mix Mixing Tips (Yellow)</span></a>
                                                    <span class="" id="loader'995"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="995" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds995">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/crown-bridge-t-mix-tips-blue-orange-996">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VP-8108T_HG-002339.jpg' />
                                                            <span class="" id="loader996"></span>
                                                        </span>

                                                        <span class="prod-name-title">Crown & Bridge T-Mix Tips (Blue-Orange)</span></a>
                                                    <span class="" id="loader'996"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="996" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds996">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/defend-crown-bridge-t-mix-tips-blue-clear-997">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/VP-8111T_HG-002340.jpg' />
                                                            <span class="" id="loader997"></span>
                                                        </span>

                                                        <span class="prod-name-title">DEFEND Crown & Bridge T-Mix Tips (Blue-Clear)</span></a>
                                                    <span class="" id="loader'997"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="997" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Bag" id="UnitIds997">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/wall-dispencnser-998">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/WDA_HG-012142.jpg' />
                                                            <span class="" id="loader998"></span>
                                                        </span>

                                                        <span class="prod-name-title">Wall Dispencnser</span></a>
                                                    <span class="" id="loader'998"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="998" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds998">
                                            </div>

                                        </div>
                                        <div class="item" style="display:block;">
                                            <div class="prod-slide-box-wrapper ">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/proline-dispenser-1l-white-1000">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/whb1lds_HG-000655.jpg' />
                                                            <span class="" id="loader1000"></span>
                                                        </span>

                                                        <span class="prod-name-title">Proline Dispenser (1L, White )</span></a>
                                                    <span class="" id="loader'1000"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="1000" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds1000">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/aero-face-shield-1001">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/FS-WSI_HG-009320.jpg' />
                                                            <span class="" id="loader1001"></span>
                                                        </span>

                                                        <span class="prod-name-title">Aero Face Shield</span></a>
                                                    <span class="" id="loader'1001"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="1001" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Box" id="UnitIds1001">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/schools-wash-your-hands-dispenser-1l-1003">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/wyh1lds_HG-001497.jpg' />
                                                            <span class="" id="loader1003"></span>
                                                        </span>

                                                        <span class="prod-name-title">Schools _ Wash Your Hands_ Dispenser (1L)</span></a>
                                                    <span class="" id="loader'1003"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="1003" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds1003">
                                                <div class="prod-slide-box">

                                                    <a href="/products/item/marolex-sprayer-nozzles-kit-7pcs-1006">
                                                        <span class="img-box">
                                                            <img class="owl-lazy" data-src='#backend/web/productimage/b_gotowe11-16_Z09j_7_HG-002022.jpg' />
                                                            <span class="" id="loader1006"></span>
                                                        </span>

                                                        <span class="prod-name-title">Marolex Sprayer Nozzles - Kit (7pcs)</span></a>
                                                    <span class="" id="loader'1006"></span>
                                                    <span class="cart-icon-typ2-cover">
                                                        <span class="cart-icon-typ2-wrap">
                                                            <span class="cart-icon-typ2-sec">
                                                                <span class="cart-icon-typ2 addtocart cboxClose" title="Add to cart product" id="1006" href="javascript:void(0);"></span> </span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <input type="hidden" value="Each" id="UnitIds1006">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="users-tab-outer">

                <div class="container">
                    <div class="intro-content-video-box">
                        <div class="row">
                            <div class="col-md-6 sm-mrg30-B R-mrg30-B">

                                <h2 class="hd-typ1 homeTitle">Hy<span>Green</span>
                                    <span class="homeCaption">Your local healthcare partner</span>
                                </h2>
                                <!--
					<h2 class="hd-typ1">Hy<span>Green</span></h2>
                    <h3 class="hd-typ2"></h2>
					<h3 class="hd-typ2 "></h3> -->
                                <div class="common-content mrg30-B R-mrg30-B">
                                    Hygreen brings world-class infection prevention and control, healthcare and facility management solutions to Qatar. Our focus is on supporting our customers by delivering the required solution when and where it is required. </div>
                                <div class="read-more-btn-bx"><a class="btn-typ2" href="#site/about-us" title="Read More">Read More</a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-sec-box">
                                    <iframe width="100%" height="340" src="https://www.youtube.com/embed/Imqk0tjOWZY" frameborder="0" ; encrypted-media=" allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <footer>
            <div class="footer-outer">
                <div class="container">
                    <!-- <div class="newsletter-area">
          <button class="subscribe" data-toggle="modal" data-target="#subscribe_modal">Subscribe to Newsletter</button>
          <div class="newsletter-popup" id="subscribe_modal" tabindex="-1" role="dialog" aria-labelledby="subscribe_modalLabel" aria-hidden="true">
            <div class="newsletter-inner">
              <a href="#" class="close-newsletter" data-dismiss="modal" aria-label="Close"><span></span></a>
              <div class="newsletter">
                <form action="#site/addnewsletter" method="post" name="newsletter_hygreen">
                  <h3>Subscribe to Hygreen</h3>
                  <ul>
                    <li>
                      <input type="text" name="name" id="your_name" placeholder="Enter your full name" required>
                    </li>
                    <li>
                      <input type="email" name="email" id="your_email" placeholder="Enter your valid email address" required>
                    </li>
                    <li>
                      <input type="number" name="number" id="your_email" placeholder="Enter your valid mobile number">
                    </li>
                    <li>
                     <select class="textbox-typ2" required  name="customergroup" id="customergroup">
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
                    </li>
                    <li>
                      <input type="submit" value="Subscribe to Hygreen Newsletter">
                      <!-- <button class="submit-button" type="submit">Subscribe to Hygreen Newsletter</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>-->
                    <div class="ft-quick-lnks-box">
                        <ul>
                            <li><a title="About Us" href="#site/about-us">About Us</a></li>
                            <li><a title="Download Brochure" href="/hygreen/index.html" target='_blank'>Download Brochure</a></li>
                            <li><a title="Resources" href="#site/resources">Resources</a></li>
                            <!--<li><a title="Careers" href="#site/careers">Careers</a></li>-->
                            <li><a title="Our Partners" href="#site/partners">Our Partners</a></li>
                            <li><a title="Contact Us" href="#site/contactus">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="ft-social-media"> <a class="soc-media" href="https://www.facebook.com/HyGreenQatar" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a class="soc-media" href="https://twitter.com/HyGreenQatar" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a class="soc-media" href="https://www.linkedin.com/company/hygreen-co--ltd/?trk=ppro_cprof" title="Linked In" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a class="soc-media" href="https://www.instagram.com/hygreenqatar/?hl=en" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
                </div>
                <span class="scroll-to-top"><img src="/images/scroll-top-btn.png" /></span>
                <div style="display:none;">
                    <div id="send-us-message-popup" class="popup-box-typ2">
                        <div class="hd-typ13 mrg15-B R-mrg15-B">SEND US MESSAGE</div>
                        <form action="#account/sendmessage" method="post">
                            <div class="field-box mrg15-B R-mrg15-B">
                                <label class="lbl-typ">Subject</label>
                                <span class="filed-sec">
                                    <input class="textbox-typ2" name="subject" required>
                                </span>
                            </div>
                            <div class="field-box mrg15-B R-mrg15-B">
                                <label class="lbl-typ">Message</label>
                                <span class="filed-sec">
                                    <textarea class="textbox-typ2" name="message" required></textarea>
                                </span>
                            </div>
                            <div class="submit-btn-box-typ align-R R-align-C">
                                <button class="btn-typ7">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="display:none;">
                    <div id="new-product-request-popup" class="popup-box-typ2">
                        <div class="hd-typ13 mrg15-B R-mrg15-B">New Product Request</div>
                        <form action="#account/newproductrequest" method="post">
                            <div class="field-box mrg15-B R-mrg15-B">
                                <label class="lbl-typ">Enter Details</label>
                                <span class="filed-sec">
                                    <textarea class="textbox-typ2" name="message"></textarea>
                                </span>
                            </div>
                            <div class="submit-btn-box-typ align-R R-align-C">
                                <button class="btn-typ7">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div style="display:none;">
                <div id="send-us-credit-popup" class="popup-box-typ2">
                    <div class="hd-typ13 mrg15-B R-mrg15-B">SEND YOUR CREDIT APPLICATION</div>
                    <form action="#account/send-application" method="post">
                        <div class="field-box mrg15-B R-mrg15-B">
                            <label class="lbl-typ">Credit</label>
                            <span class="filed-sec">
                                <input class="textbox-typ2" name="credit" required>
                            </span>
                        </div>
                        <div class="field-box mrg15-B R-mrg15-B">
                            <label class="lbl-typ">Comment</label>
                            <span class="filed-sec">
                                <textarea class="textbox-typ2" name="comment" required></textarea>
                            </span>
                        </div>
                        <div class="submit-btn-box-typ align-R R-align-C">
                            <button class="btn-typ7">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal Available in -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="availablecontent">


                    </div>
                </div>
            </div>
            <!-- End available in -->


            <script>
                (function() {
                    'use strict';


                    // $(activate);

                    /* activate();
  function activate() {
      var val = 0;
    $('.nav-tabs').scrollingTabs().on('ready.scrtabs', function() {
        $('.tab-content').show();
      });

  } */
                }());


                var val = 0,
                    topVal = 100;


                $('.grouplistview').click(function() {
                    val = 1;
                    if ($("body").hasClass("topbar-fix")) {
                        topVal = 100;
                    } else {
                        topVal = 100;
                    }
                    console.log($('.users-tab-outer-sections').offset().top - topVal);
                    $('body, html').animate({
                        scrollTop: $('.users-tab-outer-sections').offset().top - topVal
                    }, 1000);

                })
                $('#sectional-tab-list').click(function() {

                    val = 0;
                });


                jQuery(document).ready(function() {
                    $(document).on('click', 'input[name="newsletter"]', function() {

                        if ($(this).is(':checked')) {
                            $('#customergroupcon').show();
                        } else {

                            $('#customergroupcon').hide();
                        }

                    });

                    /* jQuery('button.subscribe').on('click', function(e){
                      e.preventDefault();
                      jQuery(this).next('.newsletter-popup').fadeIn(400);
                    });
                    jQuery('a.close-newsletter').on('click', function(e){
                      e.preventDefault();
                      jQuery(this).parent('.newsletter-inner').parent('.newsletter-popup').fadeOut(400);
                    });
                    jQuery('.newsletter-popup').on('click', function(e){
                      e.preventDefault();
                      jQuery(this).fadeOut(400);
                    });
                    jQuery('.newsletter-inner, .newsletter input[type="submit"], button.submit-button').on('click', function(e){
                      e.preventDefault();
                      e.stopPropagation();
                    }); */
                });
            </script>

            <!--Start of Tawk.to Script-->
            <!-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e9cc4d069e9320caac54c8e/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script> -->
            <!--End of Tawk.to Script-->
        </footer>
    </div>
    <script src="/assets/95182477/jquery.js"></script>
    <script src="/assets/60026de9/yii.js"></script>
    <script src="/js/tree-menu.js"></script>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.colorbox.js"></script>
    <script src="/js/jquery.scrolling-tabs.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/anlysis.js"></script>
    <script src="/TimeMe.js-master/timeme.min.js"></script>
    <script src="/assets/a2f8f916/jquery-ui.js"></script>
    <script>
        jQuery(function($) {
            $(document).ready(function() {
                $('.groupname').hide();
                $('.grouplistview').mouseenter(function() {
                    $(this).find('.groupname').show();

                })
                $('.grouplistview').mouseleave(function() {
                    $(this).find('.groupname').hide();

                })

                $('.grouplistview').click(function() {

                    var val = $(this).attr('id');
                    $('.users-tab-list ul li.active').removeClass('active');
                    $(this).addClass('active');

                    $.ajax({
                        url: '/site/category',
                        method: 'post',
                        data: {
                            value: val
                        },
                        success: function(result) {
                            $('.users-tab-list-container').html(result);
                            $.noConflict();
                            $('.prod-slider-box-sec .owl-carousel').owlCarousel({
                                loop: true,
                                margin: 10,
                                autoHeight: true,
                                autoplay: false,
                                lazyLoad: true,
                                autoplayTimeout: 10000,
                                smartSpeed: 2000,
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
                            $('.prod-slider-box-sec .owl-prev').html('<i class=\'fa fa-angle-left\'></i>');
                            $('.prod-slider-box-sec .owl-next').html('<i class=\'fa fa-angle-right\'></i>');
                        }
                    });
                });
            })
            jQuery('#w0').autocomplete({
                "source": ["1600 System Enamel Sprays (Red, 12 OZ)", "1660830", "1600 System Enamel Sprays (Yelllow, 12 OZ)", "1644830", "2X ACRYLIC ENAMEL (Gloss\/Black\/12 OZ)", "271903", "511 Impregnator (473 ml)", "511PT6", "511 Seal \u0026 Enhance (473 ml)", "SEENPT6", "7 Hole Air\/Water 3-Way Syringe Tips (Clear, 250pcs)", "AW-6000-X-AH", "ACN Sanitizing Wipes (FF, 110 Wipe)", "7051", "Acrylic Hand Brush Duster (Assorted Colours)", "201001", "Aero Face Shield", "WSI0001", "Air Fresh (4L)", "HAHA 047", "Air Fresh (750ml)", "HAHA 042", "Air Freshener Dispenser (250 ml)", "V-850", "Amity Biocide (2.5L)", "PX07", "Anodized Telescopic Pole (2m)", "530610", "Anodized Telescopic Pole (4m)", "530620", "Anti-Bacterial Cleaner (32 OZ)", "MG10532", "Aromatherapy Handwash Dispenser (1L, White)", "ARD1000D", "AS9100 (Dunes Tan\/1 Gal)", "AS9171425", "Auto \u0026 Garage Cleaner \u0026 Degreaser (40 OZ)", "73135", "Automotive High Heat (Flat Black, 12oz)", "248903", "Automotive High Heat (Flat Red, 12oz)", "248908", "Automotive High Heat Primer Spray (Gray, 12oz)", "249340", "Automotive Professional Undercoating (Black, 15oz)", "248656", "Automotive Rubberized Undercoating (Black, 15oz)", "248657", "Bacter Quat (4L)", "LSLG064EX", "Bacter Quat (750ml)", "LSLG 062", "Balance LV (4L)", "LVAC007", "Barrier Film (10x15cm, 1200 Sheets)", "BF-2600-X-AH", "Bathroom Wiper (40x40cm)", "310208", "Bedpan Liner (600ml, 20 Pcs)", "B60020", "Best Mop Replacement (12x60cm, Blue)", "202160-01", "Best Mop Replacement (12x80cm, Blue)", "202180-01", "Best Mop with Frame  (12x80cm, Blue)", "202080-01", "Best Mop with Frame (12x60cm, Blue)", "202060-01", "Big \u0022X-Frame\u0022 Painted Trolley", "440030", "Bio Neutral Peach (4L)", "TSMF013", "BioDegradable Disposable Apron(200\/Roll)", "AWRB4616", "Bite Trays Anterior (Thin, 35pcs)", "BT-1001", "Bite Trays Posterior (Thin, 50pcs)", "BT-1002", "Bite Trays Quadrant (Thin, 35pcs)", "BT-1004", "Bite Trays Sideless Posterior (Thin, 50pcs)", "BT-1003", "Black Nylon Suture (USP 4\/0, 45 cm)", "N43193B-45", "Black Silk Suture (USP 2\/0, 45 cm)", "S23263-45", "Black Silk Suture (USP 3\/0, 45 cm)", "S33263-45", "Black Silk Suture (USP 4\/0, 45 cm)", "S41163-75", "Black Silk Suture (USP 4\/0, 75 cm)", "S43193-75", "Blayco Face Shield (50\/Carton)", "TBPF2", "Blue Nylon Sutur (USP 3\/0, 45 cm)", "N33263-45", "Boat Bottom Antifouling Paint (32 oz)", "207013", "Bodyfresh Cleansing Wipes (150 Sheets)", "B81070005", "Broom Head Cover (24pcs)", "460100", "Bucket Trolley (20L)", "400108", "C-100 (4L)", "TSMA 008", "C\/V Fold Toilet Paper Dispenser", "R-1319", "Cable Ties Black (300mm, 1000PCS)", "GVZIPB300", "Cable Ties Clear (300mm, 1000PCS)", "GVZIPN300", "Calibration kit", "CALKIT", "Can Gun1", "CG1", "CareBag® Bedpan Liner (20pcs)", "7711141", "CareBag® Commode Liner (20pcs)", "7831738", "CareBag® Male Urinal (20pcs)", "7733993", "CareBag® Male Urinal with Holder (12pcs)", "9610118", "CareBag® Urine Bags (3pcs)", "9610139", "CareBag® Vomit Bag (3pcs)", "2853994", "CHALKBOARD BRUSH-ON (887 ml)", "206540", "Cisne Product Display Stand", "560415", "Cleanse AntiBac Dispenser (1L)", "ANT1LDSEN", "Cleanse Heavy Dispenser (2L)", "HVY2LDPEN", "Cleanse Shower Dispenser (1L)", "SHW1LDSEN", "Cleanse Ultra Dispenser (2L)", "ULT2LDPEN", "Clear Intra-Oral Tips (Small,100pcs)", "VP-8101SM", "Coffee Maker Cleaner (10 oz)", "30281", "COMFORT GRIP®", "241526", "Concrete \u0026 Driveway Degreaser Pressure Washer Ultra (128 OZ)", "73019", "Concrobium Mold Control - PRO (1 Gal)", "625001", "Concrobium Mold Control - PRO Trigger Spray (32oz)", "625326", "Concrobium RTU Mold Stain Remover - PRO Spray (33.8oz)", "6292338", "ConFirm™ 10 In-Office Biological Monitoring System", "C10SK", "Cook-Top Cleaner (24 oz)", "33261", "Coprotainer® Polypropylene Faeces Container (30ml)", "25135E", "Cotton Mop Extra (40CM)", "NZE046", "Cotton Mop Extra (50CM)", "NZE047", "Cotton Plus Micro Mop (40CM)", "NCM051", "Cotton Plus Micro Mop (50CM)", "NCM052", "Cotton Rolls (38.1x9.5mm)", "CS-0200-WBX-AH", "Crown \u0026 Bridge T-Mix Tips (Blue-Orange)", "VP-8108T", "Crystal (4L)", "LSLE 048", "Customized Bag", "MEDBAG", "Customized Bag", "SMBAG", "Cutan Metal Bracket (400ml)", "BKT400ML", "Cutan Moisturising Cream Dispenser (1L)", "PROB01HCMC", "Cytotoxic Drug Spill Kit", "MJZ000", "Cytotoxic Waste Bag (5x50pcs, 5kg)", "MVN453", "Dam Polishing Mop Replacement (12x40cm, White)", "204140", "Dam Polishing Mop Replacement (12x60cm, White)", "204160", "Dam Polishing Mop with Frame (12x40cm, White)", "204040", "Dam Polishing Mop with Frame (12x60cm, White)", "204060", "Deb Drip Tray (White)", "TRYWHI", "Deb Handrub Display Board (A4)", "DS-011", "DEFEND Crown \u0026 Bridge T-Mix Tips (Blue-Clear)", "VP-8111T", "DEFEND General Purpose Cleaner (1gal)", "SO-9400", "DEFEND+PLUS Pre-Bent Dispensing Tips (25G, 100pcs)", "PN-1231", "DEFEND+PLUS Prophy Angles (Green, 100pcs)", "PA-7000-PMP", "DEFEND+PLUS Prophy Angles (Purple, 100pcs)", "PA-6000-PMP", "DEFEND+PLUS Sterilization Pouches (190x360mm, 200pcs\/Box)", "SP-4500-SJ", "DEFEND+PLUS Sterilization Pouches (50x220mm, 200pcs)", "SP-0350-SJ", "DEFEND+PLUS Sterilization Pouches (70x255mm, 200pcs)", "SP-0550-SJ", "Degrass D-40 Bac (4L)", "LSLG059EX", "Degrass Multi (4L)", "LSDE 047", "Deka (4L)", "TSPR 006", "Detergent Dosing Pump (6L\/h @ 0.1 Bar)", "PRT0006A1", "Dexalevo-Drop", "PD19122", "Dexamoxi", "PD19117", "Dish-Draining Wiper (40x50cm, Blue \u0026 White)", "310325", "Disinfecting Peroxide Wipes (160 Wipes)", "30065", "Dispomedic 7.5% Povidone Iodine Soap Solution (500ml)", "DPM0500B", "Dispopet 1% Coloured Antiseptic Solution (500ml)", "0040500B", "Dispoyod antiseptic solution 10% (125ml)", "DPY0125", "Dispoyod antiseptic solution 10% (500ml)", "DPY0500", "Dosatron Proportional Dilutor", "LBD25RE2BPAF", "Double Bucket (14L, Blue)", "460515", "Double Bucket (14L, Green)", "460515-03", "Double Bucket (14L, Red)", "460515-02", "Double Bucket (14L, Yellow)", "460515-01", "Double-Sided Duster (40x40cm, Red)", "310203", "Dr Helewa Male Urinal 600 (20Pcs)", "U60020", "Dr Helewa Pre-Moistened Wash Gloves (12 Pcs)", "ICBATH12", "Dr Helewa Vomit bag 600 (20Pcs)", "V60020", "Dropstar", "PD19132", "Dry Erase Paint (Kit)", "241140", "Dura Plus-2 (4L)", "TSTM 005", "Dust Absorbing Mop + Handle  + Wipers (130cm)", "200301", "Dust Absorbing Wiper (20\/Pack)", "310222", "DW20 (4L)", "LSLG 047", "Eco Chrome Trolley With Basket (25L)", "409055", "Eco Garbage Bin (120L, Blue)", "409020-01", "Eco Microfiber Wet Mop (150g, Blue \u0026 White)", "100950", "Eco Microfiber Wet Mop (150g, Purple)", "100990", "Eco Plastic Trolley (50L, 70x101cm)", "409050", "Eco Wringer", "409010", "Empty Smart Pump Bottle (500ml)", "SP500", "EPOXY Shield Garage Floor Kit (Gloss\/Gray\/1 Gal)", "251965", "ESR Rack for 8x120 (2Pcs\/Box)", "BR100", "Estesol Hair \u0026 Body (1L)", "HAB1L", "Exam Table Paper (White)", "ETPC21", "Exclusive Diffuser", "AD-0002", "Exclusive Diffuser", "SA-3310", "Extra Cotton Kentucky Mop (300g, White)", "201100", "Extra Cotton Wet Mop (165g, White)", "100301", "FFP2 Face Mask", "D13003", "Floor Razor", "YJ494", "Floor Scraper", "YK492", "Foaming Bathroom Cleaner with Bleach (32 OZ)", "73008", "GEL DERM (500ml)", "GD500IFE", "Gel WC (800g)", "LSBA 022", "GelMax® Super Absorbent Pad (25pcs)", "9582104", "Glade Shake and Vac Magnolia and Vanilla (500g)", "683254", "Glass \u0026 Surface Cleaner (14 OZ)", "298474", "Glazier Bucket (20L)", "CK102", "Glazier Bucket with Wheel", "CK103", "Gritty Foam Dispenser (3.25L)", "GPF3LWH1", "Hand Sanitising Station (Silver)", "DISPSTDCH", "Healthcare Hand Sanitiser Dispenser - 7 Circles (1L)", "PROB01SA", "Hercules Bucket (18L)", "HSK809-B", "Hercules Bucket (18L)", "HSK809-R", "Hercules Bucket (25L)", "HSK810", "Hexami Aches Eyewash", "PD19516", "Hexami Single Dose", "PD19459", "House, Deck \u0026 Fence Pressure Washer Concentrate (128 OZ)", "73107", "Housekeeping Synthetic Strips Wet Mop (Yellow)", "100505", "HydroMax® Diamond (230x360mm, 350 Sheets)", "B82010094", "HydroMax® Elite (190x200mm, 400 Sheets)", "B82110028", "I\u0026D Antiseptic Liquid Soap (1L)", "Sept SP-1L", "I\u0026D Antiseptic Liquid Soap (500 ml)", "Sept-SP", "I\u0026D Enzymatic Foam Cleaner (750 ml)", "Care-Enz", "I\u0026D Floor Cleaner (750 ml)", "Care-Face", "I\u0026D Hand \u0026 Skin Antiseptic (1L)", "Sept CH", "I\u0026D Hand \u0026 Skin Disinfectant (1L)", "Sept", "I\u0026D Hand \u0026 Skin Disinfectant Gel (500 ml)", "Sept-Gel", "I\u0026D Metal Care-Steel Spray (750 ml)", "Care-Stl", "I\u0026D Spray Disinfectant (1L)", "Spay-1L", "I\u0026D Spray-Nest Disinfectant (1L)", "Spay-Nest", "I\u0026D Surgical Intrument Lubricant (250 ml)", "Care-INS LB", "Industrial Flat Broom", "EDS071", "Inox Scouring Pad With Sponge (20g)", "460655", "Instant Carpet Stain Remover Plus Deodorizer (32 OZ)", "CR326", "InstantFoam Touch Free Dispenser (1.2L, White)", "IFSTF2EN", "Jetspin Mop Set", "TJM250", "Jumbo Toilet Paper Dispenser", "CP-0204", "Jumbo Toilet Paper Dispenser", "CP-0204-B", "Kentucky Microfiber Mop (200g, Extra White)", "207000", "Ketofen -Drop", "PD19137", "Kitchen Degreaser All Purpose Cleaner (32oz)", "305373", "Knapsack RX12 (12L)", "P12RX", "Krud Kutter Adhesive Remover Spray (8oz)", "336247", "KRUD KUTTER Concrete Clean \u0026 Etch (32 oz)", "CE326", "Krud Kutter Gutter Wash hose end (56 oz)", "295317", "Krud Kutter HD Cleaner \u0026 Disinfectant Spray (32oz)", "298309", "Krud Kutter HD Cleaner \u0026 Disinfectant Spray (32oz)", "DH326", "Krud Kutter HD Wipes (30 Sheet\/Large)", "346527", "Krud Kutter Heavy Trafic Carpet Cleaner (22oz)", "298341", "Krud Kutter Original Cleaner\/Degreaser Aerosol (20oz)", "339798", "Krud Kutter Pro Glass Cleaner (1 Gal)", "352243", "Krud Kutter Pro Glass Cleaner (32 oz)", "352245", "Krud Kutter Sports Stain Remover Spray (22oz)", "305473", "Krud Kutter Tough Task Citrus Remover (32 oz)", "KC324", "Krud Kutter Tough Task Remover Aerosol (12oz)", "KR124", "Krud Kutter Tough Task Remover Spray (32oz)", "KR324", "KRUD KUTTER Window Wash (32 oz)", "WW32H4", "Lab Transport Bags (15x25cm, 250pcs\/Each)", "BAGS", "Leak Seal® Spray (Clear, 11oz)", "265495", "LeakSeal® Self-Fusing Silicone Tape (10 feet\/Black)", "275795", "LeakSeal® Self-Fusing Silicone Tape (10 feet\/White)", "275796", "LeakSeal® Spray (Aluminum, 12oz)", "267972", "LeakSeal® Spray (Black, 12oz)", "265494", "LidHygenix Foam (50ml)", "FM17LHN", "Light Weight Aluminum T-Bar (25cm)", "470101", "Looped  Cotton Wet Mop (185g, White)", "100321", "Looped  Cotton Wet Mop (185g, White)", "100323", "Looped  Cotton Wet Mop (185g, White)", "100324", "Manual Dispenser Catch Tray", "TRYMAN2", "Manual Dosing Pump PRODOSE-R", "HP30EN", "Marolex Sprayer Nozzles - Kit (7pcs)", "Z09j\/7", "Master Polishing Mop (12x60cm, White)", "200660", "Master Polishing Mop (12x80cm, White)", "200680", "Master Polishing Mop Replacement (12x60cm, White)", "200760", "Master Polishing Mop Replacement (12x80cm, White)", "200780", "MasterBox Dilutor", "MBDI025", "MEAN GREEN Anti-Bacterial Cleaner (1 Gal)", "371467", "Metal Floor Wiper (45CM)", "MYK502", "Metal Floor Wiper (45CM)", "MYS505", "Metal Floor Wiper (55CM)", "MYK501", "Metallic Handle For Scissors Mop Frame", "480355", "Microfiber Dish Cloth (2pcs, 50x50cm, Blue \u0026 White)", "310316", "Microfiber Dish Cloth (50x50cm, White)", "310313", "Microfiber Eco Soft Mop (White)", "560530", "Microfiber Flat Mop Replacement  (15x45cm, White)", "208145", "Microfiber Kentucky Mop (200g, Red \u0026 White)", "209000", "Microfiber Kitchen Towel (52x52cm, Orange \u0026 White)", "310314", "Microfiber Looped-end Mop Replacement (15x40cm, Blue \u0026 White", "208340-01", "Microfiber Mop Replacement (13x40cm, Blue \u0026 White)", "207500-01", "Microfiber Mop Replacement (13x40cm, Green \u0026 White)", "207500-04", "Microfiber Mop Replacement (13x40cm, Red \u0026 White)", "207500-02", "Microfiber Mop Replacement (13x40cm, Yellow \u0026 White)", "207500-03", "Microfiber Mop Replacement (17x50cm, Blue \u0026 White)", "207600-01", "Microfiber Mop Replacement (17x50cm, Green \u0026 White)", "207600-04", "Microfiber Mop Replacement (17x50cm, Red \u0026 White)", "207600-02", "Microfiber Mop Replacement (17x50cm, Yellow \u0026 White)", "207600-03", "Microfiber Mop with Frame (15x45cm, White)", "208045", "Microfiber Multipurpose Cloth (38x40cm, Green)", "310407-04", "Microfiber Special Class Cloth (40x50cm, White)", "310420", "Microfiber Special Dust Cloth (38x40cm, Green)", "310408", "Microfiber Standard Sleeve (10pcs, 45cm)", "440145", "Microfiber Strips Kentucky Mop (Cut, 250g, Blue)", "201400", "Microfiber Strips Wet Mop (Blue)", "100740", "Microfiber Swan Mop Replacement  (13x40cm, White)", "204640", "Microfiber Swan Mop Replacement (13.5x40cm, Blue \u0026 White)", "207300-01", "Microfiber Swan Mop Replacement (13.5x40cm, Green \u0026 White)", "207300-04", "Microfiber Swan Mop Replacement (13.5x40cm, Red \u0026 White)", "207300-02", "Microfiber Swan Mop Replacement (13.5x40cm, Yellow \u0026 White)", "207300-03", "Microfiber Swan Mop Replacement (17x50cm, Blue \u0026 White)", "207400-01", "Microfiber Swan Mop Replacement (17x50cm, Green \u0026 White)", "207400-04", "Microfiber Swan Mop Replacement (17x50cm, Red \u0026 White)", "207400-02", "Microfiber Swan Mop Replacement (17x50cm, Yellow \u0026 White)", "207400-03", "Microfiber Wet Mop (150g, Blue \u0026 White)", "100750", "Microfiber Wet Mop (150g, Yellow \u0026 White)", "100770", "Microfibre Cloth Special Glass -Premium (12\/Pack)", "310425-01", "Microfibre Cloths With Sponge (17×25cm, 2pcs)", "560505", "Mimoza Plastic Wringer", "MPP793-G", "Mimoza Plastic Wringer (24L+10L)", "HTS731-G", "Mini Smart One Toilet  Dispenser", "R-1311S", "Miracle Heavy-Duty Cleaner (946 ml)", "MHDCQT6", "MOLDEX - Mold Killer Spray (32oz)", "5010", "Mop Replacement with Button Holes (14x40cm, White)", "204444", "Mousse Désinfectante (50ml)", "DM50", "Mousse Désinfectante (600ml)", "DM600", "Moxieye", "PD19112", "Mr Muscle Multi-Surface Cleaner (750ml)", "670614", "Mr Muscle Washroom Cleaner (750ml)", "693546", "Mr Muscle Window and Glass Cleaner (750ml)", "670612", "Mr Soapy Soap Dispenser (1L)", "SOABSOAP", "Multi Detachable \u0026 Disposable Fitted Sheet (3\/Pack)", "NBED1003", "Multi Detachable \u0026 Disposable Fitted Sheet (5\/Pack)", "NBED1005", "Multi Detachable \u0026 Disposable Fitted Sheet (5\/Pack)", "NBED1405", "Multi-Purpose Plastic Trolley -Eco", "409070", "Multi-Purpose Pressure Washer Concentrate (128 OZ)", "73018", "Multibox Sharps Container (5L)", "25205", "Multisan HACCP-All First Aid Kit", "CPS101", "Multisan Sport First Aid Kit", "CPS281", "Natural Cotton Kentucky Wet Mop (350g, White)", "201111", "Naturelle Bio-Neutral (4L)", "NAMF053", "Naturelle Crystal (4L)", "NALE048", "Naturelle Crystal (750ml)", "NALE042", "Naturelle Degrass Multi (4L)", "NADE047", "Naturelle Degrass Multi (750ml)", "NADE042", "Naturelle Sanyo (800g)", "NABA022", "NDP Med Foam (200ml)", "MF200IFE", "Nebusal Drops 3%", "PD19455", "Non-Slip Dish Draining Wiper (40x40cm, Blue)", "310324", "Non-Tipping Dustpan with Handle", "460502", "Non-Woven Sponges (5x5cm, 32gm)", "NW-0200-AH", "Nozzle Unclogging Tool", "TO001", "Nua PRO Ultra Automation Towel (6 Rolls)", "500642", "Odex® Cabinet Rinse Aid (5L)", "RAGW60", "Odor \u0026 Stain Blocker (26 OZ)", "357660", "OPL BASIC EVO LL SWITCHING 100-240 VAC", "OPL2PBM", "OPL Basic EVO LLL Switching 100-240 VAC", "OPL3PBM", "Optase Cooling Mask", "OCM", "Orange Champ Multi-Purpose Cleaner (32 OZ)", "7323", "Original Krud Kutter Cleaner \u0026 Degreaser (32 oz)", "KK326", "Oven \u0026 Grill Cleaner (12 OZ)", "298478", "OXD Body Lotion (1L)", "TBC00", "OXD Cold\/Hot Pack (130x260mm)", "T3022", "OXD Cooling Gel (100ml)", "T3026", "OXD Cooling Gel (1L)", "T3031", "OXD Cooling Gel (200ml)", "T3003", "OXD Electro-Gel G-10 (250ml)", "TOG01", "OXD Heat Cream (100ml)", "T3024", "OXD Heat Cream (200ml)", "T3001", "OXD Intense Cooling Gel (100ml)", "T3027", "OXD Intense Cooling Gel (1L)", "T3032", "OXD Intense Cooling Gel (200ml)", "T3004", "OXD Intense Heat Cream (100ml)", "T3025", "OXD Intense Heat Cream (1L)", "T3030", "OXD Intense Heat Cream (200ml)", "T3002", "OXD Lubricating Gel G-20 (100ml)", "TOGH1", "OXD Massage Oil with Arnica (1L)", "TFA0T", "OXD Neutral Cream Long Massages (1L)", "TFCM2", "OXD Neutral Massage Lotion (1L)", "TFLM1", "OXD Neutral Massage Oil (1L)", "TFA04", "OXD Replenishing Gel (100ml)", "T3028", "OXD Replenishing Gel (200ml)", "T3005", "OXD Ultra Sound Gel - Blue (1L)", "T3041", "OXD Ultra Sound Gel - Clear (250ml)", "T3044", "OXD Ultrasound Gel  (Blue, 250ml)", "T3040", "OxyBAC Dispenser (1L)", "OXY1LDS", "Peel Coat® Spray (Gloss Black, 10oz)", "298102", "Pet Carpet Cleaner (22 OZ)", "305474", "Phiphos", "PD19466", "Pine Power® Multi-Purpose Cleaner (28 OZ)", "PP121", "Plastic Floor Scraper", "PYK496", "Plastic Glass Scraper", "PCK497", "Plastic Kentucky  Mop Holder (Green)", "480400-04", "Plastic Mop Frame (11x40cm, Blue)", "470004", "Plastic Swan Frame (13x50cm, Blue)", "470003", "Plastic Wet Mop Frame (11x40cm, Blue)", "470000", "Plastic Wet Mop Frame (13x50cm, Blue)", "470001", "Pluma Polishing Mop Replacement (15x45cm, Blue \u0026 White)", "203345", "Pluma Polishing Mop with Frame (15x45cm, Blue \u0026 White)", "203245", "Plus Floor Wiper (75CM)", "PY530", "Polish (4L)", "TSMI 010", "Polishing Mop Replacement (White)", "200799", "Polishing Plus Mop with Frame  (15x60cm, White)", "204260", "Polishing Plus Mop with Frame (15x45cm, White)", "204245", "Pre-Cut Wiper Roll (0.31x14cm, Yellow)", "310158", "Professional Synthetic Strips Wet Mop (White)", "100510-02", "Proline Dispenser (1L, White )", "WHB1LDS", "Proline Manual Sanitizer Dispenser (1L)", "155303", "Promax 1-Chemical  (4L\/min)", "PXB1F04S", "Promed® Centrifuge Polypropylene Test Tubes (50ml)", "21405", "Promed® Centrifuge Test Tube (15ml)", "21409", "Prosan Chlorine 1.67g Nadcc (6 x 200 Tablets)", "PN501", "Protect Dispenser (1L)", "PRO1LDSEN", "Quarizma Dustpan \u0026 Broom", "AF202", "Refresh Hair \u0026 Body Gel (500ml)", "99065464", "Refresh Luxury 3-in-1 Hair \u0026 Body (1L)", "CMW1L", "Refresh Luxury Shower Dispenser (1L)", "RSH1LDSEN", "Refresh Toilet Seat Cleaner (500ml)", "35010", "Refresh™ Clear Foam (1L)", "CLR1L", "Refresh™ Energie Foam (1L)", "ENG1L", "Restore Dispenser (1L)", "RES1LDSEN", "Rinse Aid Dosing Pump (0,4L\/h @ 3 Bar)", "PPM030HA2", "Round Cobweb \u0026 Duster Collector", "470140", "Rust Remover \u0026 Inhibitor (32 OZ)", "305982", "SafeGauze (20 Pcs)", "3005.9", "SAH Facial Tissue (50 Sheets, 3 Plies, Blue)", "S150-BLUE", "SAH Facial Tissue (50 Sheets, 3 Plies, Pink)", "S150-PINK", "SAH Facial Tissue (50 Sheets, 3 Plies, Silver)", "S150-SLVR", "SAH Wallet Tissue (24x8 Sheets, 3 Plies, Pink)", "S24W-PINK", "SANI HLD Holder (35.2cm x 24.4cm x 13cm)", "JHOLD", "Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 10cm)", "SI4", "Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 15cm)", "SI6", "Sani-Tube™ Nylon Sterilization Tubing (30m Roll, 5cm)", "SI2", "SaniSafe® 3 - QRD (1500 Wipes)", "B81010360", "SaniSafe® Dairy Wipes (1000 Sheets)", "B81020097", "Sanitise Foam Dispenser (1L)", "SAN1LDSEN", "SC Arnica Gel (100ml)", "TFG07", "SC Cold Gel (200ml)", "TFG25", "Schools _ Mr Soapy Soap_  Dispenser (1L)", "MSS1LDS", "Schools _ Wash Your Hands_  Dispenser (1L)", "WYH1LDS", "Scissors Mop Metallic Frame", "480335", "Scraper \/ Scoop (350 Pcs)", "SSGV100", "SDS Manual Dispenser (1L, Beige)", "4D40Q5", "SDS Manual Dispenser (1L, Black)", "4D50Q5", "Seiko Twindose 20", "MBDI010", "Sensor Hygienic Toilet Seat Cover", "R-1314", "Shoe Cover Dispenser", "460547", "Simple Duster (40x40cm, Yellow)", "310205", "Skin Hygiene Centre 2-Step (1L)", "SSC2FWS", "Skin Hygiene Centre 3-Step (1L)", "SSC3FWSC", "Skin Safety Van Cradle", "ACC729", "Skin Stapler F-35W 0.6mm 35 (5Pcs\/Box)", "DSSF35W", "Smart One Dispenser", "R-1311", "Smart One Toilet Paper Refill (6pcs)", "R-2604", "Soap Dispenser (1L)", "CJ-1001-I", "Soap Dispenser (1L)", "CJ-1003", "Soap Dispenser (1L)", "CJ-1005", "Soapergirl Dispenser (1L)", "SGIRL1LDS", "Soaperman Dispenser (1L)", "SMAN1LDSEN", "Sparkle™ Air Water Syringe Tips Disposable", "BCSAWS", "Special Cotton Kentucky Mop (350g, White)", "201107", "Special Window Wiper (27x36cm, Orange)", "310202", "Special Wiper (38x40cm, Yellow)", "310124", "Sprayer Master ergo 1000 (1L)", "M1000", "Sprayer Master ergo 2000 (2L)", "M2000", "Sprayer Titan (20L)", "P-20", "Squared Kitchen Towel (40x40cm, Brown \u0026 Blue)", "310303", "Stainless Glass Scraper Holder", "CK490", "Stainless Mesh Inox Scourer (40g)", "460651", "Standard Dry Block Incubators (11mm)", "NDB-060 E", "Standard Dustpan with Handle (Blue)", "460507", "Stoko Skin Safety Centre 3-Step (2L)", "SSCSML1EN", "Stokoderm Foot Care (100ml)", "SFC100ML", "Stokoderm® Triple Active Gel Dispenser", "HC111004", "Stokolan® Light Gel (100ml)", "SGE100ML", "Striped Kitchen Towel (45x45cm, Blue)", "310306", "Strong Green Scouring Pad (15x15cm, Green)", "460603", "Strong Sponge with Nail Protector (7.5x10cm, Green)", "460605", "Sumo Auto Alumin (750ml)", "AULI042", "Sun Heroes Dispenser (1L)", "SUNHRO1LDS", "Sun Protect Dispenser (1L)", "SUN1LDSEN", "Super Duster (40x50cm, Yellow)", "310204", "Super Kitchen Wiper (40x30cm, Blue)", "310104", "Super Strength Cleaner \u0026 Degreaser (128 OZ)", "MG101", "Super Strength Cleaner \u0026 Degreaser (32 OZ)", "30986", "Super Strength Cleaner \u0026 Degreaser (32 OZ)", "932", "Super Strength Heavy Duty Wipes (80 wipes)", "73157", "Super-Woven Flannelette Duster (42x44cm, White)", "310107", "Surgical Aspirator Tips (1.59mm, 25pcs)", "ST-1020-X-AH", "Surgical Aspirator Tips (6.35mm, 25pcs)", "ST-1023-X-AH", "Swarfega® Orange (4L)", "SOR4LMP", "Swarfega® Red Box (150 Wipes)", "SRB150W", "Syringe Sleeves (2.5x10)", "BF-3000-X-AH", "Syringe Sleeves (500\/Box)", "BCSSO", "Syringe Sleeves (6x25cm)", "BCSS", "T-Mix Mixing Tips (Teal)", "VP-8104T", "T-Mix Mixing Tips (Yellow)", "VP-8105T", "Telescopic Handle (3M, 2x1.5M)", "TUS280", "Telescopic Handle (6M, 3x2M)", "TUS282", "Thomilmagic Bottle for Dilution  (750ml)", "PCED 004", "Thomilmatic D-Matic (750ml)", "LPCS042", "Tile \u0026 Stone Cleaner (946 ml)", "TSC6QT", "Tile, Stone \u0026 Grout Sealer (946 ml)", "TSSQT6_", "Titanic Spin Mop And Handle Set", "TYT243", "Titanic Spin Mop Refill", "TYM241", "Titanic Spin Mop Set", "TSM240", "Titanic Spin Mop Spare Handle", "TYS242", "TM Digital Santoprene (0.4 l\/h, 1.5 bar)", "9900298017", "Tobrameson", "PD19127", "Toilet Brush with Holder (White)", "460527", "Toilet Duck Pine (750ml)", "668487", "Tongue Depressors (15cm, 500pcs\/Each)", "IC", "TouchFREE Ultra Dispenser (1.2L, Blue)", "TF2AZU", "Translucent Dispenser (1L, Black)", "TBK1LDS", "Translucent Dispenser (1L, White)", "TWH1LDS", "Trigger (White)", "16001-333", "Trolley Hand Sprayer (20L)", "P20MX", "TW Air filters for compressor", "SP-005_1", "TwinCruiser® VGF (230V, 50Hz)", "TWC_VGF", "Twindose 20", "GTD06R01Y2", "Ultra Disinfectant Wipes Alcohol Free \u0026 FF (160 Wipe)", "310025", "Ultra Disinfectant Wipes Alcohol Free (160 Wipe)", "310031", "Uman Aloe Vera Hand Cream (Tube 100ml)", "TLH45", "UMAN Anti-Cellulite Gel (1L)", "TBT02", "UMAN Anti-Cellulite Mild Heat Effect Cream (1KG)", "TOCB1", "UMAN Arggang Body Oil (500ml)", "TFA0R", "UMAN Cream for Cryotherapy (1L)", "TOCB8", "UMAN Moisturizing cream (1L)", "TBT01", "UMAN Relating Body Oil (500ml)", "TFA0P", "UMAN Shea Butter Body Oil (500ml)", "TFA0K", "UMAN Tired Legs Massage Oil (500ml)", "TFA0O", "Undyed PGLA Suture (USP 4\/0, 75 cm)", "A43193U-75", "Uni-Atropin 1%", "PD19435", "UV Children_ s Protect Dispenser (1L)", "SKCSUNDISP", "UV Hand Hygiene Training Kit", "UV1KIT", "Vein-Eye CARRY", "VECU1", "Vein-Eye Hospital Cart", "VEHC1", "Vesismin 250ml Spray Bottle Trigger", "MAA-088", "Vesismin Gel Derm (1L Airless)", "GD1000IFE", "Vinfer Urinal Deodorisers", "A961100001", "Virus-Gurad Long Term Disinfection Wipes (300 Wipes\/Bucket)", "VG300", "Vitro Base (4L)", "TSTV 006", "Vitro Fin (4L)", "TSTV 026", "W00-RAO200E\/+10.0", "200E\/+10.0", "Wall Dispencnser", "WDA", "Washer Sleeve (35CM)", "CPY248", "Washer Sleeve (45CM)", "CPY249", "Wet Mop Frame Wide (30cm)", "IM211", "Wet Mop Narrow Strip (400GR)", "IY229", "Wet Mop Wide (400gr)", "IY230", "Window Car Combi (20cm, 55cm Handle)", "470009", "Window Inox Squeegee (35cm)", "410001", "Wiper Multipurpose German (32x40cm, Yellow)", "310123", "X-Shape Laundry Cart -Eco", "409060", "XShape Chrome Laundry Trolley", "409057", "Yellow Intra-Oral Tips (100pcs)", "VP-8103", "ZINSSER Mold Killing Primer (1 Gal)", "276049"],
                "minLength": "3",
                "autoFill": true,
                "select": function(event, ui) {
                    $('.ui-autocomplete-input').val(ui.item.value);
                    if ($('.ui-autocomplete-input').val() == ui.item.value) {
                        searchByAutocomplete()
                    }
                }
            });
            $(document).ready(function() {

            });

        });
    </script>
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
            $('.addtocartdetail').click(function(e) {
                var pass = $(this).attr('id');
                var unitid = $('#UnitId').val();
                var qty = $(".qty0").val();
                $("#loaders" + pass).addClass("loader-product");
                //alert(unitid);
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '#products/addtocart',
                    data: {
                        id: pass,
                        unitid: unitid,
                        qty: qty
                    },
                    success: function(data) {
                        $("#primeMenu").text(data["response"])
                        $("#primeMenu").slideDown().delay(3000)
                            .slideUp(500);

                        /*  $( "<div id='w0-success-0' class='alert-success alert fade in'><button type=button class=close data-dismiss=alert aria-hidden=true>×</button>"+data["response"]+"</div>" ).prependTo( "#flashmessages" );*/
                        $.noConflict();
                        // $("#success").slideDown();    
                        //alert(response);
                        // document.getElementById("success").innerHTML=data["response"];
                        //  $.colorbox.close();
                        //  $('.quick-now-btn').colorbox.close();
                        /*     $('html, body').animate({
                          scrollTop: $("div.wrapper").offset().top
                        }, 1000);*/
                        $("#loaders" + pass).removeClass();
                        $(".qty0").val(1);
                        $('#cartitem').html(data["count"]);
                        $("#success").fadeIn("slow");
                        $("#w0-success-0").fadeOut(5000);
                    }
                });
            });
            $('.addtocartdetailquick').click(function(e) {
                var pass = $(this).attr('id');
                var unitid = $('#UnitId' + pass).val();
                var qty = $(".qty" + pass).val();
                $("#loaders" + pass).addClass("loader-product");
                //  alert(unitid);
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '#products/addtocart',
                    data: {
                        id: pass,
                        unitid: unitid,
                        qty: qty
                    },
                    success: function(data) {
                        $("#loaders" + pass).hide();
                        $("#primeMenu").text(data["response"])
                        $("#primeMenu").slideDown().delay(3000)
                            .slideUp(500); /*  $( "<div id='w0-success-0' class='alert-success alert fade in'><button type=button class=close data-dismiss=alert aria-hidden=true>×</button>"+data["response"]+"</div>" ).prependTo( "#flashmessages" );*/
                        // $.noConflict();
                        // $("#success").slideDown();    
                        //alert(response);
                        // document.getElementById("success").innerHTML=data["response"];
                        $.colorbox.close();
                        //  $('.quick-now-btn').colorbox.close();
                        /*   $('html, body').animate({
    scrollTop: $("div.wrapper").offset().top
  }, 1000);*/

                        $('#cartitem').html(data["count"]);
                        $("#success").fadeIn("slow");
                        $("#w0-success-0").fadeOut(5000);
                    }
                });
            });
            $('.addtocart').click(function(e) {
                var pass = $(this).attr('id');
                var unitid = $('#UnitIds' + pass).val();
                var qty = 1;
                $("#loader" + pass).addClass("loader-product");
                // $('#loader'.pass).css('display','block');
                //alert(unitid);
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '#products/addtocart',
                    data: {
                        id: pass,
                        unitid: unitid,
                        qty: qty
                    },
                    success: function(data) {
                        $("#loader" + pass).hide();
                        $("#primeMenu").text(data["response"])
                        $("#primeMenu").slideDown().delay(3000)
                            .slideUp(500);
                        // $('#cartitem').html(data["pkcount"]);
                        $('#cartitem').html(data["count"]);
                        $("#success").fadeIn("slow");
                        $("#w0-success-0").fadeOut(5000);
                    }
                });
            });
            $('.quick-now-btn').click(function(e) {
                var pass = $(this).attr('id');

                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '#account/customersearch',
                    data: {
                        id: pass
                    },
                    success: function(data) {
                        if (data == "1") {
                            //  window.location="#products/details?name="+pass;
                        } else {
                            $('#myModallimit').modal('show');
                        }
                        // $("#success").slideDown();    
                        //alert(response);
                        /*document.getElementById("success").innerHTML=data["response"];
                        $('#cartitem').html(data["count"]);
                         $("#success").fadeIn("slow");
                         $("#success").fadeOut(8000);*/
                    }
                });

            });

            $('.addalltocart').click(function(e) {
                $("#loaderall").addClass("loader-product");
                //var pass =$(this).attr('id');
                $.ajax({
                    type: 'get',
                    dataType: "json",
                    url: '#products/addalltocart',
                    data: {
                        //id:pass
                    },
                    success: function(data) {
                        $("#loaderall").hide();
                        $("#primeMenu").text(data["response"])
                        $("#primeMenu").slideDown().delay(3000)
                            .slideUp(500); /*  $( "<div id='w0-success-0' class='alert-success alert fade in'><button type=button class=close data-dismiss=alert aria-hidden=true>×</button>"+data["response"]+"</div>" ).prependTo( "#flashmessages" );*/
                        // $("#success").slideDown();    
                        // document.getElementById("success").innerHTML=" ";
                        // document.getElementById("success").innerHTML=data["response"];
                        /*    $('html, body').animate({
    scrollTop: $("div.wrapper").offset().top
  }, 1000);*/
                        $('#cartitem').html(data["count"]);
                        $("#flashmessages").fadeIn("slow");
                        $("#w0-success-0").fadeOut(3000);
                    }
                });
            });
        });

        var pkqty = "1";
        $("#cart-list > tbody > .trproductcls").each(function() {
            /* if(window.location.pathname == '/order/calculate'){
            	pkqty = pkqty + parseInt($(this).find(".dataqty").html());
            }else{
            	pkqty = pkqty + parseInt($(this).find("input").val());
            } */
        });
        // debugger;
        // $('#cartitem').html(pkqty);

        $('.account-info-edit, #submitforgotS').click(function() {
            $('#colorbox').addClass('colorbox_login');
            $('#cboxOverlay, #cboxClose').click(function() {
                $('#colorbox').removeClass('colorbox_login');
            });
        });
    </script>
</body>

</html>