<section class="footer_one home1 bdrt1">
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp

    <div class="container pb60">
        <div class="row mt60">
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-3">
                <div class=footer_contact_widget>
                    <h4>Contact Us</h4>
                    <div class="footer_contact_iconbox d-flex mb-4">
                        <div class=icon><span class=flaticon-phone-call></span></div>
                        <div class="details ms-4">
                            <h5 class=title>Monday-Friday: 08am-9pm</h5>
                            <a href=#>@isset($settings)
                                {{$settings->phone}}
                            @endisset</a>
                        </div>
                    </div>
                    <div class="footer_contact_iconbox d-flex">
                        <div class=icon><span class=flaticon-email></span></div>
                        <div class="details ms-4">
                            <h5 class=title>Need help with your order?</h5>
                            <a href=#>@isset($settings)
                                {{$settings->email}}
                            @endisset</a></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>About Zenmart</h4>
                    <ul class=list-unstyled>
                        <li><a href=#>Track Your Order</a></li>
                        <li><a href=#>Product Guides</a></li>
                        <li><a href=#>Wishlists</a></li>
                        <li><a href=#>Privacy Policy</a></li>
                        <li><a href=#>Store Locator</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>Customer Support</h4>
                    <ul class=list-unstyled>
                        <li><a href=#>Contact Us</a></li>
                        <li><a href=#>Help Centre</a></li>
                        <li><a href=#>Returns & Exchanges</a></li>
                        <li><a href=#>Best Buy Financing</a></li>
                        <li><a href=#>Best Buy Gift Card</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>Services</h4>
                    <ul class=list-unstyled>
                        <li><a href=#>Geek Squad</a></li>
                        <li><a href=#>In-Home Advisor</a></li>
                        <li><a href=#>Trade-In Program</a></li>
                        <li><a href=#>Electronics Recycling</a></li>
                        <li><a href=#>Best Buy Health</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-3 col-xl-3">
                <div class=footer_social_widget>
                    <h4 class=title>Follow us</h4>
                    <div class="social_icon_list mt30">
                        <ul class=mb20>@isset($settings)
                            <li class=list-inline-item><a href="{{$settings->facebook}}"><i class="fab fa-facebook"></i></a></li>
                            <li class=list-inline-item><a href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li class=list-inline-item><a href="{{$settings->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            <li class=list-inline-item><a href="{{$settings->linkedIn}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        @endisset
                        </ul>
                    </div>
                </div>
                <div class="footer_mobile_app_widget mb25">
                    <h4 class="title mb10">Mobile Apps</h4>
                    <div class=mobile_app_list>
                        <ul class=mb0>@isset($settings)
                            <li><a href="{{$settings->app_one}}"><span class=flaticon-apple></span>iOS App</a></li>
                            <li><a href="{{$settings->app_two}}"><span class=flaticon-android></span>Android App</a></li>@endisset
                        </ul>
                    </div>
                </div>
                <div class=footer_acceped_card_widget>
                    <h4 class="title mb20">We accept</h4>
                    <div class=acceped_card_list>
                        <ul class="d-flex mb-0">
                            <li class=me-2><a href=#><img src={{ asset('home/images/resource/visa-card.png') }}
                                        alt=visa-card></a></li>
                            <li class=me-2><a href=#><img src={{ asset('home/images/resource/master-card.png') }}
                                        alt=master-card></a></li>
                            <li class=me-2><a href=#><img src={{ asset('home/images/resource/apple-pay.png') }}
                                        alt=apple-pay></a></li>
                            <li class=me-2><a href=#><img src={{ asset('home/images/resource/discover-card.png') }}
                                        alt=discover-card></a></li>
                            <li class=me-2><a href=#><img src={{ asset('home/images/resource/paypal.png') }}
                                        alt=paypal></a>
                            </li>
                            <li><a href=#><img src={{ asset('home/images/resource/amex-card.png') }} alt=amex-card></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bdrt1 pt20 pb20">
        <div class=row>
            <div class=col-lg-6>
                <div class="copyright-widget text-center text-lg-start d-block d-lg-flex mb15-md">
                    <p class=me-4>© {{date("Y")}} Zeomart. All Rights Reserved</p>
                    <p><a href=#>Privacy</a>·<a href=#>Terms</a>·<a href=#>Sitemap</a></p>
                </div>
            </div>
            {{-- <div class=col-lg-6>
                <div class="footer_bottom_right_widgets text-center text-lg-end">
                    <ul class=mb0>
                        <li class="list-inline-item mb20-340">
                            <select class="selectpicker show-tick">
                                <option>Currency : USD</option>
                                <option>Euro</option>
                                <option>Pound</option>
                            </select>
                        </li>
                        <li class=list-inline-item>
                            <select class="selectpicker show-tick">
                                <option>Language: English</option>
                                <option>Frenc</option>
                                <option>Italian</option>
                                <option>Spanish</option>
                                <option>Turkey</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>
