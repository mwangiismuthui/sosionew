<footer id="footer-susan" class="page_footer ds section_padding_top_50 section_padding_bottom_65 columns_padding_25 table_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-md-push-4 text-center">
                <div class="widget widget_text">
                    <a href="{{route('index')}}" class="logo vertical_logo">
                        <img src="/images/sosiofooter.png" alt="sosiofruitsandvegetables" style="width:300px; height:200px;">
                    </a>

                    <p class="divider_30" style="text-align:justify !important;">We work with a dedicated team of professionals and supply partners who are all trained in superior labeling and packaging techniques. We follow quality control standards that are so stringent that every order you place with us comes to you bursting with essence and well-being.</p>

                    <p class="bottommargin_5 grey">
            <i class="fa fa-map-marker highlight rightpadding_10" aria-hidden="true"></i> Nairobi,Kenya
        </p>
                    <p class="bottommargin_5 grey">
            <i class="fa fa-phone highlight rightpadding_10" aria-hidden="true"></i> +254714184719
        </p>
                    <p class="darklinks bottommargin_5">
            <i class="fa fa-envelope highlight rightpadding_10" aria-hidden="true"></i><a href="mailto:sales@sosiofruitsandvegetables.com">sales@sosiofruitsandvegetables.com</a>
        </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-md-pull-4 text-center">
                <div class="widget widget_text widget_media_margin">
                    <h3 class="widget-title">Explore Our Variety</h3>
                    <ul class="list1 no-bullets no-top-border no-bottom-border greylinks">
                        <li>
                        <a href="javascript:void();">Mangoes</a>
                        </li>
                        <li>
                            <a href="javascript:void();">Brocolli</a>
                        </li>
                        <li>
                            <a href="javascript:void();">Spices</a>
                        </li>
                        <li>
                            <a href="javascript:void();">Herbs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <div class="widget widget_mailchimp widget_media_margin">
                    <h3 class="widget-title">Newsletter</h3>
                    <form class="signu" action="{{route('newsletter')}}" method="get">
                        @csrf
                        <p>Enter your email address here always to be updated of our new products.</p>
                        <div class="form-group topmargin_25 bottommargin_30">
                            <label for="mailchimp" class="sr-only">Enter your email here</label>
                            <input name="email" type="email" id="mailchimp" class="mailchimp_email form-control text-center" placeholder="Email Address" required>
                        </div>
                        <div>
                            <button type="submit" class="theme_button color1">Subscribe</button>
                        </div>
                        <div class="response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</footer>