@extends('home.layout.master')
@section('content')
<section class=home-one>
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="main-banner-wrapper home1_style bdrs6 ovh">
                    <div class="banner-style-one owl-theme owl-carousel">
                        <div class="slide slide-one"
                            style=background-image:url(home/images/home/1.jpg);height:600px>
                            <div class=container>
                                <div class="row home-content">
                                    <div class="col-lg-6 offset-lg-1 col-xl-5"><span class=tag>Limited
                                            Edition</span>
                                        <h3 class=banner-title><span class=fw400>Sport Essentials</span><br>
                                            Yoga Mats, Weights<br class="d-none d-xl-block"> & more</h3>
                                        <p>Discover our new items. Up to<span class=fw500>25% Off !</span>
                                        </p>
                                        <a href=page-shop-cart.html class="btn banner-btn btn-thm">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide-one"
                            style=background-image:url(home/images/home/2.jpg);height:600px>
                            <div class=container>
                                <div class="row home-content">
                                    <div class="col-lg-5 offset-lg-1"><span class=tag>Limited
                                            Edition</span>
                                        <h3 class=banner-title><span class=fw400>Game Consoles
                                                and</span><br> Accessories Super Deals</h3>
                                        <p>Discover our new items. Up to<span class=fw500>25% Off !</span>
                                        </p>
                                        <a href=page-shop-cart.html class="btn banner-btn btn-thm">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide-one bgpc"
                            style=background-image:url(home/images/home/5.jpg);height:600px>
                            <div class=container>
                                <div class="row home-content">
                                    <div class="col-lg-5 offset-lg-1"><span class=tag>New Arrivals</span>
                                        <h3 class=banner-title><span class=fw400>Wall clock</span><br>
                                            renaissance
                                        </h3>
                                        <p>Discover our new items. Up to<span class=fw500>25% Off !</span>
                                        </p>
                                        <a href=page-shop-cart.html class="btn banner-btn btn-thm">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn"><span
                            class="carousel-btn left-btn"><i
                                class="fas fa-chevron-left left"></i></span><span
                            class="carousel-btn right-btn"><i
                                class="fas fa-chevron-right right"></i></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features pt30 pb20">
    <div class="container bb1">
        <div class="row ovh">
            <div class="col-sm-6 col-xl-3">
                <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.0s>
                    <div class=icon><span class=flaticon-fast-delivery></span></div>
                    <div class=details>
                        <h5 class=title>Free Shipping</h5>
                        <p class=para>Free Shipping for orders over $200</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.2s>
                    <div class=icon><span class=flaticon-shield></span></div>
                    <div class=details>
                        <h5 class=title>Money Guarantee</h5>
                        <p class=para>Within 30 days for an exchange.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.4s>
                    <div class=icon><span class=flaticon-headphones></span></div>
                    <div class=details>
                        <h5 class=title>Online Support</h5>
                        <p class=para>24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.6s>
                    <div class=icon><span class=flaticon-credit-card></span></div>
                    <div class=details>
                        <h5 class=title>Flexible Payment</h5>
                        <p class=para>Pay with Multiple Credit Cards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="deliver-divider pt30 pb70">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="d-flex db-500 justify-content-between">
                    <div class="main-title mb0-500 d-block d-lg-flex">
                        <h2>Deal of the Day</h2>
                        <div class=deal_countdown>
                            <ul class="deal_counter ml0-md" id=timer>
                                <li class="list-inline-item days"></li>
                                <li class=list-inline-item><span class=title>Days :</span></li>
                                <li class="list-inline-item hours"></li>
                                <li class=list-inline-item><span class=title>Hours :</span></li>
                                <li class="list-inline-item minutes"></li>
                                <li class=list-inline-item><span class=title>Minutes :</span></li>
                                <li class="list-inline-item seconds"></li>
                                <li class=list-inline-item><span class=title>Seconds</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-title mb-5"> <a class="title_more_btn mt10"
                            href=page-shop-list-v2.html>View All</a> </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div
                    class="navi_pagi_bottom_center shop_item_5grid_slider dod_slider owl-carousel owl-theme">
                    <div class="item ovh">
                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.0s>
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd1.png')}} alt="Deal Day1">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SAMSUNG</div>
                                <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K UHD HDR
                                        QLED Tizen Smart TV</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del> <span
                                                class="off_tag text-thm1">20% Off</span></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ovh">
                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.2s>
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd2.png')}} alt="Deal Day2">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Ozark Trail 6-Person Clip
                                        & Camp Dome Tent</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ovh">
                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.4s>
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd3.png')}} alt="Deal Day3">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Beats by Dr. Dre Studio3
                                        Skyline Over-Ear Noise Cancelling</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$399.00 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ovh">
                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.6s>
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd4.png')}} alt="Deal Day4">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>Eastsport</div>
                                <div class=title><a href=page-shop-single-v1.html>Eastsport Unisex Campus
                                        Tech Backpack Charcoal</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ovh">
                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.8s>
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd5.png')}} alt="Deal Da5">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>rolex</div>
                                <div class=title><a href=page-shop-single-v1.html>Pre-Owned Rolex Day-date
                                        1802 Gold Watch (Certified Authenti...</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$18.124 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd1.png')}} alt="Deal Day1">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SAMSUNG</div>
                                <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K UHD HDR
                                        QLED Tizen Smart TV</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del> <span
                                                class="off_tag text-thm1">20% Off</span></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd2.png')}} alt="Deal Day2">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Ozark Trail 6-Person Clip
                                        & Camp Dome Tent</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd3.png')}} alt="Deal Day3">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Beats by Dr. Dre Studio3
                                        Skyline Over-Ear Noise Cancelling</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$399.00 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd4.png')}} alt="Deal Day4">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>Eastsport</div>
                                <div class=title><a href=page-shop-single-v1.html>Eastsport Unisex Campus
                                        Tech Backpack Charcoal</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd5.png')}} alt="Deal Da5">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>rolex</div>
                                <div class=title><a href=page-shop-single-v1.html>Pre-Owned Rolex Day-date
                                        1802 Gold Watch (Certified Authenti...</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$18.124 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd1.png')}} alt="Deal Day1">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SAMSUNG</div>
                                <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K UHD HDR
                                        QLED Tizen Smart TV</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del> <span
                                                class="off_tag text-thm1">20% Off</span></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd2.png')}} alt="Deal Day2">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Ozark Trail 6-Person Clip
                                        & Camp Dome Tent</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd3.png')}} alt="Deal Day3">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>SONY</div>
                                <div class=title><a href=page-shop-single-v1.html>Beats by Dr. Dre Studio3
                                        Skyline Over-Ear Noise Cancelling</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$399.00 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd4.png')}} alt="Deal Day4">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>Eastsport</div>
                                <div class=title><a href=page-shop-single-v1.html>Eastsport Unisex Campus
                                        Tech Backpack Charcoal</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$32.50 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class="shop_item bdrtrb1 px-2 px-sm-3">
                            <div class="thumb pb30"> <img src={{asset('home/images/shop-items/dd5.png')}} alt="Deal Da5">
                                <div class=thumb_info>
                                    <ul class=mb0>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-heart></span></a></li>
                                        <li><a href=page-dashboard-wish-list.html><span
                                                    class=flaticon-show></span></a></li>
                                        <li><a href=page-shop-list-v6.html><span
                                                    class=flaticon-graph></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop_item_cart_btn d-grid"> <a href=page-shop-cart.html
                                        class="btn btn-thm">Add to Cart</a> </div>
                            </div>
                            <div class=details>
                                <div class=sub_title>rolex</div>
                                <div class=title><a href=page-shop-single-v1.html>Pre-Owned Rolex Day-date
                                        1802 Gold Watch (Certified Authenti...</a></div>
                                <div class="review d-flex db-500">
                                    <ul class="mb0 me-2">
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                        <li class=list-inline-item><a href=#><i
                                                    class="fas fa-star"></i></a></li>
                                    </ul>
                                    <div class=review_count><a href=#>3,014 reviews</a></div>
                                </div>
                                <div class=si_footer>
                                    <div class=price>$18.124 <small><del>$45</del></small></div>
                                    <div class="line mt20"></div>
                                    <div class="sell_stock mt10">
                                        <div class=sell>Sold 56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="top-category pb30 pt20">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="d-flex justify-content-between">
                    <div class=main-title>
                        <h2>Shop by Category</h2>
                    </div>
                    <div class="main-title mb-5"><a class="title_more_btn mt10"
                            href=page-shop-list-v2.html>View All Categories</a></div>
                </div>
            </div>
        </div>
        <div class="row ovh">
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.7s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct1.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Electronics</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.9s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct2.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Clothings</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.1s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct3.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Health & Beauty</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.3s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct4.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Home & Kitchen</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.5s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct5.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Home & Furniture</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.7s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct6.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Grocery & Market</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.9s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct7.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Toy & Video Games</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=2.1s>
                <a href=page-shop-list-v6.html>
                    <div class=iconbox>
                        <div class=icon><img src={{asset('home/images/shop-items/ct8.png')}} alt="Category Image"></div>
                        <div class=details>
                            <h5 class=title>Babies & Moms</h5>
                            <p class=subtitle>29 items</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row ovh mt70">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.7s>
                <div class="banner_one home1_style color1 mb30">
                    <div class="thumb style1"><img class=float-end src={{asset('home/images/banner/smartwatch.png')}}
                            alt=smartwatch></div>
                    <div class=details>
                        <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                        <h3 class=title>Health Care Monitor</h3>
                        <a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.9s>
                <div class="banner_one home1_style color2 mb30">
                    <div class="thumb style1"><img class=float-end src={{asset('home/images/banner/earphone.png')}}
                            alt=EarPhone></div>
                    <div class=details>
                        <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                        <h3 class=title>Stainless Steel Scissors</h3>
                        <a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1.1s>
                <div class="banner_one home1_style color3 mb30">
                    <div class=thumb><img class=float-end src={{asset('home/images/banner/smartdevice.png')}}
                            alt=smartdevice.png')}}>
                        <div class=off_banner><img src={{asset('home/images/banner/off-banner.png')}} alt="Off Banner"></div>
                    </div>
                    <div class=details>
                        <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                        <h3 class=title>Blood Pressure Meter</h3>
                        <a href=page-shop-list-v1.html class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-product pt0 pb90">
    <div class=container>
        <div class=row>
            <div class=col-lg-6>
                <div class="main-title mb0-sm">
                    <h2>Best seller in the last month</h2>
                </div>
            </div>
            <div class=col-lg-6>
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-start justify-content-lg-end"
                        role=tablist>
                        <button class="nav-link active" id=nav-home-tab data-bs-toggle=tab
                            data-bs-target=#nav-home role=tab aria-controls=nav-home aria-selected=true>Top
                            20</button>
                        <button class=nav-link id=nav-shopping-tab data-bs-toggle=tab
                            data-bs-target=#nav-shopping role=tab aria-controls=nav-shopping
                            aria-selected=false>Baby</button>
                        <button class=nav-link id=nav-hotels-tab data-bs-toggle=tab
                            data-bs-target=#nav-hotels role=tab aria-controls=nav-hotels
                            aria-selected=false>Furniture</button>
                        <button class=nav-link id=nav-destination-tab data-bs-toggle=tab
                            data-bs-target=#nav-destination role=tab aria-controls=nav-destination
                            aria-selected=false>Electronic</button>
                        <button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab
                            data-bs-target=#nav-bread role=tab aria-controls=nav-bread
                            aria-selected=false>All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="popular_listing_sliders row ui_kit_tab style2">
                    <div class="tab-content col-lg-12" id=nav-tabContent>
                        <div class="tab-pane fade show active" id=nav-home role=tabpanel
                            aria-labelledby=nav-home-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.1s>
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm1.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Great Value
                                                    Ultra Strong Paper Towels, Split Sheets, 6 Double </a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.3s>
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm2.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Dell Inspiron
                                                    3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                    i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.5s>
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm3.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>LG Gram 17"
                                                    Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB
                                                    SSD/16GB RAM) -En -Only at Best Buy</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.7s>
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm4.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>HP 15.6"
                                                    Touchscreen Laptop - Natural Silver (AMD Ryzen 5
                                                    5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.9s>
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm5.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Marketside
                                                    Large Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-shopping role=tabpanel
                            aria-labelledby=nav-shopping-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm1.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Great Value
                                                    Ultra Strong Paper Towels, Split Sheets, 6 Double </a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm2.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Dell Inspiron
                                                    3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                    i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm3.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>LG Gram 17"
                                                    Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB
                                                    SSD/16GB RAM) -En -Only at Best Buy</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm4.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>HP 15.6"
                                                    Touchscreen Laptop - Natural Silver (AMD Ryzen 5
                                                    5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm5.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Marketside
                                                    Large Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-hotels role=tabpanel
                            aria-labelledby=nav-hotels-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm1.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Great Value
                                                    Ultra Strong Paper Towels, Split Sheets, 6 Double </a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm2.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Dell Inspiron
                                                    3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                    i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm3.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>LG Gram 17"
                                                    Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB
                                                    SSD/16GB RAM) -En -Only at Best Buy</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm4.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>HP 15.6"
                                                    Touchscreen Laptop - Natural Silver (AMD Ryzen 5
                                                    5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm5.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Marketside
                                                    Large Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-destination role=tabpanel
                            aria-labelledby=nav-destination-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm1.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Great Value
                                                    Ultra Strong Paper Towels, Split Sheets, 6 Double </a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm2.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Dell Inspiron
                                                    3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                    i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm3.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>LG Gram 17"
                                                    Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB
                                                    SSD/16GB RAM) -En -Only at Best Buy</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm4.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>HP 15.6"
                                                    Touchscreen Laptop - Natural Silver (AMD Ryzen 5
                                                    5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm5.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Marketside
                                                    Large Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-bread role=tabpanel
                            aria-labelledby=nav-bread-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm1.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Great Value
                                                    Ultra Strong Paper Towels, Split Sheets, 6 Double </a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm2.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Dell Inspiron
                                                    3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                    i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm3.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>LG Gram 17"
                                                    Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB
                                                    SSD/16GB RAM) -En -Only at Best Buy</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm4.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>HP 15.6"
                                                    Touchscreen Laptop - Natural Silver (AMD Ryzen 5
                                                    5625U/1TB SSD/12GB RAM/Windows 11)</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30">
                                            <img src={{asset('home/images/shop-items/bslm5.png')}} alt="Best Seller Item">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <a href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Marketside
                                                    Large Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124 <small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="deliver-divider pt0 pb90">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="online_delivery text-center">
                    <h5 class=title>Members get free shipping* with no order minimum!*Restrictions apply.Try
                        free 30-day trial</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-product pt0">
    <div class=container>
        <div class=row>
            <div class=col-md-5>
                <div class="main-title mb0-sm">
                    <h2>Furniture products</h2>
                </div>
            </div>
            <div class=col-md-7>
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end"
                        role=tablist>
                        <button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab
                            data-bs-target=#nav-narive role=tab aria-controls=nav-narive
                            aria-selected=true>New arrivals</button>
                        <button class=nav-link id=nav-bseller-tab data-bs-toggle=tab
                            data-bs-target=#nav-bseller role=tab aria-controls=nav-bseller
                            aria-selected=false>Best sellers</button>
                        <button class=nav-link id=nav-brated-tab data-bs-toggle=tab
                            data-bs-target=#nav-brated role=tab aria-controls=nav-brated
                            aria-selected=false>Best rated</button>
                        <button class="nav-link me-0" id=nav-afurniture-tab data-bs-toggle=tab
                            data-bs-target=#nav-afurniture role=tab aria-controls=nav-afurniture
                            aria-selected=false>All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="popular_listing_sliders row ui_kit_tab style2">
                    <div class="tab-content col-lg-12" id=nav-tabContent2>
                        <div class="tab-pane fade show active" id=nav-narive role=tabpanel
                            aria-labelledby=nav-narive-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.1s>
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp1.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K
                                                    UHD HDR QLED Tizen Smart TV</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.3s>
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp2.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Ozark Trail
                                                    6-Person Clip & Camp Dome Tent</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.5s>
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp3.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>Beats by Dr.
                                                    Dre Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.7s>
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp4.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Eastsport
                                                    Unisex Campus Tech Backpack Charcoal</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration=1.9s>
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp5.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Pre-Owned
                                                    Rolex Day-date 1802 Gold Watch (Certified
                                                    Authenti...</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-bseller role=tabpanel
                            aria-labelledby=nav-bseller-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp1.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K
                                                    UHD HDR QLED Tizen Smart TV</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp2.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Ozark Trail
                                                    6-Person Clip & Camp Dome Tent</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp3.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>Beats by Dr.
                                                    Dre Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp4.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Eastsport
                                                    Unisex Campus Tech Backpack Charcoal</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp5.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Pre-Owned
                                                    Rolex Day-date 1802 Gold Watch (Certified
                                                    Authenti...</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-brated role=tabpanel
                            aria-labelledby=nav-brated-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp1.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K
                                                    UHD HDR QLED Tizen Smart TV</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp2.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Ozark Trail
                                                    6-Person Clip & Camp Dome Tent</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp3.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>Beats by Dr.
                                                    Dre Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp4.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Eastsport
                                                    Unisex Campus Tech Backpack Charcoal</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp5.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Pre-Owned
                                                    Rolex Day-date 1802 Gold Watch (Certified
                                                    Authenti...</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-afurniture role=tabpanel
                            aria-labelledby=nav-afurniture-tab>
                            <div
                                class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp1.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SAMSUNG</div>
                                            <div class=title><a href=page-shop-single-v1.html>Samsung 65" 4K
                                                    UHD HDR QLED Tizen Smart TV</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp2.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>SONY</div>
                                            <div class=title><a href=page-shop-single-v1.html>Ozark Trail
                                                    6-Person Clip & Camp Dome Tent</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp3.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>Eastsport</div>
                                            <div class=title><a href=page-shop-single-v1.html>Beats by Dr.
                                                    Dre Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$399.00<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp4.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Eastsport
                                                    Unisex Campus Tech Backpack Charcoal</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$32.50<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                        <div class="thumb pb30"><img src={{asset('home/images/shop-items/fp5.png')}}
                                                alt="Furniture Product">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-heart></span></a></li>
                                                    <li><a href=page-dashboard-wish-list.html><span
                                                                class=flaticon-show></span></a></li>
                                                    <li><a href=page-shop-list-v6.html><span
                                                                class=flaticon-graph></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid"><a
                                                    href=page-shop-cart.html class="btn btn-thm">Add to
                                                    Cart</a></div>
                                        </div>
                                        <div class=details>
                                            <div class=sub_title>rolex</div>
                                            <div class=title><a href=page-shop-single-v1.html>Pre-Owned
                                                    Rolex Day-date 1802 Gold Watch (Certified
                                                    Authenti...</a></div>
                                            <div class="review d-flex db-500">
                                                <ul class="mb0 me-2">
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                    <li class=list-inline-item><a href=#><i
                                                                class="fas fa-star"></i></a></li>
                                                </ul>
                                                <div class=review_count><a href=#>3,014 reviews</a></div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>$18.124<small><del>$45</del></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-product pt0">
    <div class=container>
        <div class=row>
            <div class=col-md-5>
                <div class="main-title mb0-sm">
                    <h2>Electronics products</h2>
                </div>
            </div>
            <div class=col-md-7>
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end"
                        role=tablist>
                        <button class="nav-link active" id=nav-enarive-tab data-bs-toggle=tab
                            data-bs-target=#nav-enarive role=tab aria-controls=nav-enarive
                            aria-selected=true>New arrivals</button>
                        <button class=nav-link id=nav-ebseller-tab data-bs-toggle=tab
                            data-bs-target=#nav-ebseller role=tab aria-controls=nav-ebseller
                            aria-selected=false>Best sellers</button>
                        <button class=nav-link id=nav-ebrated-tab data-bs-toggle=tab
                            data-bs-target=#nav-ebrated role=tab aria-controls=nav-ebrated
                            aria-selected=false>Best rated</button>
                        <button class="nav-link me-0" id=nav-aelectronic-tab data-bs-toggle=tab
                            data-bs-target=#nav-aelectronic role=tab aria-controls=nav-aelectronic
                            aria-selected=false>All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="popular_listing_sliders row ui_kit_tab style2">
                    <div class="tab-content col-lg-12" id=nav-tabContent3>
                        <div class="tab-pane fade show active" id=nav-enarive role=tabpanel
                            aria-labelledby=nav-enarive-tab>
                            <div class=row>
                                <div class=col-lg-12>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                data-wow-duration=1.1s>
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep1.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            Watch SE (GPS) 40mm Space Grey Aluminum Case
                                                            with</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                data-wow-duration=1.3s>
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep2.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            iPhone 11 64GB Smartphone - Black.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                data-wow-duration=1.5s>
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep3.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href=page-shop-single-v1.html>iRobot
                                                            Roomba i3+ EVO Wi-Fi Connected Self-Empty
                                                            Robot.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $399.00<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                data-wow-duration=1.7s>
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep4.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Dyson
                                                            V7 Complete Cordless Stick Vacuum -
                                                            Iron/Blue</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                data-wow-duration=1.9s>
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep5.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Meta
                                                            Quest 2 256GB VR Headset with Touch
                                                            Controllers</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $18.124<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-ebseller role=tabpanel
                            aria-labelledby=nav-ebseller-tab>
                            <div class=row>
                                <div class=col-lg-12>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep1.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            Watch SE (GPS) 40mm Space Grey Aluminum Case
                                                            with</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep2.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            iPhone 11 64GB Smartphone - Black.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep3.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href=page-shop-single-v1.html>iRobot
                                                            Roomba i3+ EVO Wi-Fi Connected Self-Empty
                                                            Robot.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $399.00<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep4.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Dyson
                                                            V7 Complete Cordless Stick Vacuum -
                                                            Iron/Blue</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep5.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Meta
                                                            Quest 2 256GB VR Headset with Touch
                                                            Controllers</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $18.124<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-ebrated role=tabpanel
                            aria-labelledby=nav-ebrated-tab>
                            <div class=row>
                                <div class=col-lg-12>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep1.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            Watch SE (GPS) 40mm Space Grey Aluminum Case
                                                            with</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep2.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            iPhone 11 64GB Smartphone - Black.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep3.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href=page-shop-single-v1.html>iRobot
                                                            Roomba i3+ EVO Wi-Fi Connected Self-Empty
                                                            Robot.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $399.00<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep4.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Dyson
                                                            V7 Complete Cordless Stick Vacuum -
                                                            Iron/Blue</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep5.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Meta
                                                            Quest 2 256GB VR Headset with Touch
                                                            Controllers</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $18.124<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-aelectronic role=tabpanel
                            aria-labelledby=nav-aelectronic-tab>
                            <div class=row>
                                <div class=col-lg-12>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep1.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            Watch SE (GPS) 40mm Space Grey Aluminum Case
                                                            with</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep2.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Apple</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Apple
                                                            iPhone 11 64GB Smartphone - Black.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep3.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href=page-shop-single-v1.html>iRobot
                                                            Roomba i3+ EVO Wi-Fi Connected Self-Empty
                                                            Robot.</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $399.00<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep4.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Dyson
                                                            V7 Complete Cordless Stick Vacuum -
                                                            Iron/Blue</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small><del>$45</del></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src={{asset('home/images/shop-items/ep5.png')}}
                                                        alt="Electronics Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-heart></span></a>
                                                            </li>
                                                            <li><a href=page-dashboard-wish-list.html><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href=page-shop-list-v6.html><span
                                                                        class=flaticon-graph></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a
                                                            href=page-shop-cart.html
                                                            class="btn btn-thm">Add to Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href=page-shop-single-v1.html>Meta
                                                            Quest 2 256GB VR Headset with Touch
                                                            Controllers</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href=#><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href=#>3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>
                                                            $18.124<small><del>$45</del></small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt100">
            <div class=col-lg-12>
                <div
                    class="shop_item_7grid_slider slider_dib_400 dots_none nav_none shop_by_brand style2 owl-carousel owl-theme">
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.1s
                            href=#>Wireless Networks</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.3s href=#>Cell
                            Phones</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.5s
                            href=#>Cameras</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.7s href=#>Head
                            Phones</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.9s
                            href=#>Accessories</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.1s href=#>Gaming
                            Monitors</a></div>
                    <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.3s
                            href=#>Virtual Reality</a></div>
                </div>
            </div>
        </div>
        <div class="banner_one_large bdrs6 mt100 px-4 px-md-0">
            <div class=row>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="apple_widget_home1 mb-4 mb-lg-0">
                        <h1 class=title>Apple Watch</h1>
                        <p class="para mt-3 mb-4">Now up to $70 off. Give Mom a gift that shows off your
                            love.</p>
                        <a href=page-shop-list-v1.html class="btn btn-thm">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="apple_widget_home1 animate_content text-center">
                        <div class="thumb animate_thumb"><img src={{asset('home/images/banner/banner-img1.png')}}
                                alt="Banner Image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-product pt0">
    <div class=container>
        <div class=row>
            <div class=col-md-6>
                <div class="main-title mb0-sm">
                    <h2>Hot New Arrivals</h2>
                </div>
            </div>
            <div class=col-md-6>
                <div class="popular_listing_sliders style2 ui_kit_tab">
                    <div class="justify-content-md-end justify-content-start mb30 nav nav-tabs"
                        role=tablist>
                        <button aria-controls=nav-hnat20 aria-selected=true class="nav-link active"
                            data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab role=tab>Top
                            20</button>
                        <button aria-controls=nav-hnababy aria-selected=false class=nav-link
                            data-bs-target=#nav-hnababy data-bs-toggle=tab id=nav-hnababy-tab
                            role=tab>Baby</button>
                        <button aria-controls=nav-hnafurniture aria-selected=false class=nav-link
                            data-bs-target=#nav-hnafurniture data-bs-toggle=tab id=nav-hnafurniture-tab
                            role=tab>Furniture</button>
                        <button aria-controls=nav-hnaent aria-selected=false class="nav-link me-0"
                            data-bs-target=#nav-hnaent data-bs-toggle=tab id=nav-hnaent-tab
                            role=tab>Electronic</button>
                        <button aria-controls=nav-hnaall aria-selected=false class="nav-link me-0"
                            data-bs-target=#nav-hnaall data-bs-toggle=tab id=nav-hnaall-tab
                            role=tab>All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="row popular_listing_sliders style2 ui_kit_tab">
                    <div class="col-lg-12 tab-content" id=nav-tabContent4>
                        <div class="fade tab-pane active show" id=nav-hnat20
                            aria-labelledby=nav-hnat20-tab role=tabpanel>
                            <div class=row>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap1.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony DJ Headphones
                                                    4334205465, Black, Standard</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap2.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE
                                                    24-70mm f/2.8 GM II G Master</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap3.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap4.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap5.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap6.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra
                                                    Silicone Case with S-Pen Bundle</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap7.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap8.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap
                                                    Desk Chair Mesh Computer</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap9.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n
                                                    Double Bridge Round Sunglasses</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap10.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell
                                                    Phone Desk Mount Stand</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap11.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>PopSockets PopWallet+:
                                                    Swappable and Repositionable</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap12.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer
                                                    with Soothing Aloe</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id=nav-hnababy aria-labelledby=nav-hnababy-tab
                            role=tabpanel>
                            <div class=row>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap1.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony DJ Headphones
                                                    4334205465, Black, Standard</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap2.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE
                                                    24-70mm f/2.8 GM II G Master</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap3.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap4.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap5.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap6.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra
                                                    Silicone Case with S-Pen Bundle</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap7.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap8.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap
                                                    Desk Chair Mesh Computer</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap9.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n
                                                    Double Bridge Round Sunglasses</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap10.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell
                                                    Phone Desk Mount Stand</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap11.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>PopSockets PopWallet+:
                                                    Swappable and Repositionable</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap12.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer
                                                    with Soothing Aloe</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id=nav-hnafurniture
                            aria-labelledby=nav-hnafurniture-tab role=tabpanel>
                            <div class=row>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap1.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony DJ Headphones
                                                    4334205465, Black, Standard</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap2.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE
                                                    24-70mm f/2.8 GM II G Master</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap3.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap4.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap5.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap6.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra
                                                    Silicone Case with S-Pen Bundle</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap7.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap8.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap
                                                    Desk Chair Mesh Computer</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap9.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n
                                                    Double Bridge Round Sunglasses</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap10.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell
                                                    Phone Desk Mount Stand</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap11.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>PopSockets PopWallet+:
                                                    Swappable and Repositionable</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap12.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer
                                                    with Soothing Aloe</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id=nav-hnaent aria-labelledby=nav-hnaent-tab
                            role=tabpanel>
                            <div class=row>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap1.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony DJ Headphones
                                                    4334205465, Black, Standard</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap2.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE
                                                    24-70mm f/2.8 GM II G Master</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap3.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap4.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap5.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap6.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra
                                                    Silicone Case with S-Pen Bundle</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap7.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap8.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap
                                                    Desk Chair Mesh Computer</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap9.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n
                                                    Double Bridge Round Sunglasses</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap10.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell
                                                    Phone Desk Mount Stand</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap11.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>PopSockets PopWallet+:
                                                    Swappable and Repositionable</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap12.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer
                                                    with Soothing Aloe</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id=nav-hnaall aria-labelledby=nav-hnaall-tab
                            role=tabpanel>
                            <div class=row>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap1.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony DJ Headphones
                                                    4334205465, Black, Standard</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap2.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Sony E-Mount Full Frame FE
                                                    24-70mm f/2.8 GM II G Master</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap3.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=0.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap4.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>TV 55" 4-Series 4K UHD smart
                                                    TV</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap5.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap6.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Samsung Galaxy S21 Ultra
                                                    Silicone Case with S-Pen Bundle</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap7.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Apple iPhone Retina 6s Plus
                                                    64GB</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.7s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap8.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Office Chair Ergonomic Cheap
                                                    Desk Chair Mesh Computer</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=1.9s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap9.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Ray-Ban Women's Rb3647n
                                                    Double Bridge Round Sunglasses</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.1s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap10.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Suptek Aluminum Alloy Cell
                                                    Phone Desk Mount Stand</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.3s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap11.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>PopSockets PopWallet+:
                                                    Swappable and Repositionable</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                    data-wow-duration=2.5s>
                                    <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                        <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                src={{asset('home/images/shop-items/hnap12.png')}}></div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="mb-2 title"><a href=#>Cooling Body Gel Moisturizer
                                                    with Soothing Aloe</a></div>
                                            <div class="para text-thm1">$32.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=our-partners class="our-partners pt0 pb60">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="text-center mb35">
                    <h5 class=fz16>Trusted by the world’s best</h5>
                </div>
            </div>
            <div class=col-lg-12>
                <div
                    class="shop_item_6grid_slider slider_dib_sm dots_none nav_none owl-carousel owl-theme">
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=0.3s><img
                                src={{asset('home/images/partners/1.png')}} alt=1.png')}}></div>
                    </div>
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=0.5s><img
                                src={{asset('home/images/partners/2.png')}} alt=2.png')}}></div>
                    </div>
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=0.7s><img
                                src={{asset('home/images/partners/3.png')}} alt=3.png')}}></div>
                    </div>
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=0.9s><img
                                src={{asset('home/images/partners/4.png')}} alt=4.png')}}></div>
                    </div>
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=1.1s><img
                                src={{asset('home/images/partners/5.png')}} alt=5.png')}}></div>
                    </div>
                    <div class=item>
                        <div class="partner_item wow fadeInUp" data-wow-duration=1.3s><img
                                src={{asset('home/images/partners/6.png')}} alt=6.png')}}></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
