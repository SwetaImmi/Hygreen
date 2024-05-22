<footer>
    <div class="footer-outer">
        <div class="container">
            <div class="ft-quick-lnks-box">
                <ul>
                    <li><a title="About Us" href="{{url('about-us')}}">About Us</a></li>
                    <li><a title="Download Brochure" href="{{url('contact-us')}}" target='_blank'>Download Brochure</a></li>
                    <li><a title="Resources" href="{{url('resources')}}">Resources</a></li>
                    <!--<li><a title="Careers" href="{{url('contact-us')}}">Careers</a></li>-->
                    <li><a title="Our Partners" href="{{url('partners')}}">Our Partners</a></li>
                    <li><a title="Contact Us" href="{{url('contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="ft-social-media"> <a class="soc-media" href="https://www.facebook.com/HyGreenQatar" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a class="soc-media" href="https://twitter.com/HyGreenQatar" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a class="soc-media" href="https://www.linkedin.com/company/hygreen-co--ltd/?trk=ppro_cprof" title="Linked In" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a class="soc-media" href="https://www.instagram.com/hygreenqatar/?hl=en" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
        </div>
        <span class="scroll-to-top"><img src="/images/scroll-top-btn.png" /></span>
        <div style="display:none;">
            <div id="send-us-message-popup" class="popup-box-typ2">
                <div class="hd-typ13 mrg15-B R-mrg15-B">SEND US MESSAGE</div>
                <form action="{{url('contact-us')}}" method="post">
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
        });
    </script>
</footer>