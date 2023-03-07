@extends('home.layout.master')
@section('content')
    @push('styles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: Home</title>
    @endpush
    <section class=home-one>
        <div class=container>
            <div class=row>
                <div class=col-lg-12>
                    <div class="main-banner-wrapper home1_style bdrs6 ovh">
                        <div class="banner-style-one owl-theme owl-carousel">
                            @foreach ($carousels as $carousel)
                                <div class="slide slide-one"
                                    style="background-image:url({{ asset($carousel->image) }});height:600px">
                                    <div class=container>
                                        <div class="row home-content">
                                            <div class="col-lg-6 offset-lg-1 col-xl-5"><span
                                                    class=tag>{{ $carousel->special_tag }}</span>
                                                <h3 class=banner-title><span
                                                        class=fw400>{{ $carousel->line_one }}</span><br>
                                                    {{ $carousel->line_two }}<br class="d-none d-xl-block">
                                                    {{ $carousel->line_three }}
                                                </h3>
                                                <p>{{ $carousel->details }}</p>
                                                <a href="{{ URL::to($carousel->link) }}" class="btn banner-btn btn-thm">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn"><span class="carousel-btn left-btn"><i
                                    class="fas fa-chevron-left left"></i></span><span class="carousel-btn right-btn"><i
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
    @if (count($specialProducts) < 4)
        <section class="deliver-divider pt30 pb70" id="dealOfTheDay">
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
                            <div class="main-title mb-5"> <a class="title_more_btn mt10">View
                                    All</a> </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="navi_pagi_bottom_center shop_item_5grid_slider dod_slider owl-carousel owl-theme">
                            @foreach ($specialProducts as $specialProduct)
                                @php
                                    $product = \App\Models\Product::find($specialProduct->product_id);
                                @endphp
                                <div class="item ovh">
                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                        data-wow-duration={{ $loop->index * 0.1 + 1.0 . 's' }}>
                                        <div class="thumb pb30"> <img src="{{ asset($product->image_one) }}" alt="Deal Day1"
                                                style="height:270px; width:100%;">
                                            <div class=thumb_info>
                                                <ul class=mb0>
                                                    <li><a
                                                            href="{{ route('single.special.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                class=flaticon-show></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shop_item_cart_btn d-grid">
                                                <input type="hidden" id="cartProductQty" value="1">
                                                <button type="button" data-product-id="{{ $product->id }}"
                                                    class="btn btn-thm addToCartBTN">Add to
                                                    Cart</button>
                                            </div>
                                        </div>
                                        <div class=details>
                                            <div class=title><a
                                                    href="{{ route('single.special.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="review d-flex db-500">
                                                @php
                                                    $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                    $total_rating = 0;
                                                    foreach ($reviews as $review) {
                                                        $total_rating += $review->rating;
                                                    }
                                                    $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                @endphp

                                                <ul class="mb0 me-2">
                                                    @for ($i = 1; $i <= $average_rating; $i++)
                                                        <li class="list-inline-item"><i class="fas fa-star"></i>
                                                        </li>
                                                    @endfor
                                                </ul>
                                                <div class=review_count>{{ count($reviews) }} reviews</div>
                                            </div>
                                            <div class=si_footer>
                                                <div class=price>${{ $product->special_price }}
                                                    <small><del>${{ $product->price }}</del> <span
                                                            class="off_tag text-thm1">{{ (($product->price - $product->special_price) / $product->price) * 100 }}%
                                                            Off</span></small>
                                                </div>
                                                <div class="line mt20"></div>
                                                <div class="sell_stock mt10">
                                                    <div class=sell>Remaining {{ $product->quantity }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="top-category pb30 pt20">
        <div class=container>
            <div class=row>
                <div class=col-lg-12>
                    <div class="d-flex justify-content-between">
                        <div class=main-title>
                            <h2>Shop by Category</h2>
                        </div>
                        <div class="main-title mb-5"><a class="title_more_btn mt10" href="{{route('all.categories')}}">View All
                                Categories</a></div>
                    </div>
                </div>
            </div>
            <div class="row ovh">
                @foreach ($shopByCat as $category)
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                        <a href="{{route('category',$category->id)}}">
                            <div class=iconbox>
                                <div class=icon><img src="{{ asset($category->logo) }}" alt="{{ $category->name }}">
                                </div>
                                <div class=details>
                                    <h5 class=title>{{ $category->name }}</h5>
                                    <p class=subtitle>{{ $category->items_count }} items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row ovh mt70">
                @foreach ($smallBanner as $banner)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                        <div class="banner_one home1_style color1 mb30">
                            <div class="thumb style1"><img class=float-end src={{ asset($banner->image) }}></div>
                            <div class=details>
                                <p class="para color-light-blue">{{ $banner->details }}</p>
                                <h3 class=title>{{ $banner->name }}</h3>
                                <a href="{{ URL::to($banner->link) }}" class="shop_btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @isset($multiCatProductOne)
        <section class="featured-product pt0 pb90" id="importentProduct">
            <div class=container>
                <div class=row>
                    <div class=col-lg-6>
                        <div class="main-title mb0-sm">
                            <h2>{{ $multiCatProductOne->headings }}</h2>
                        </div>
                    </div>
                    <div class=col-lg-6>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            @php
                                $catOne = \App\Models\Category::find($multiCatProductOne->category_one);
                                $catTwo = \App\Models\Category::find($multiCatProductOne->category_two);
                                $catThree = \App\Models\Category::find($multiCatProductOne->category_three);
                                $catFour = \App\Models\Category::find($multiCatProductOne->category_four);
                            @endphp
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-lg-end" role=tablist>
                                @isset($catOne)
                                    <button class="nav-link active" id=nav-home-tab data-bs-toggle=tab data-bs-target=#nav-home
                                        role=tab aria-controls=nav-home aria-selected=true>{{ $catOne->name }}</button>
                                @endisset
                                @isset($catTwo)
                                    <button class=nav-link id=nav-shopping-tab data-bs-toggle=tab data-bs-target=#nav-shopping
                                        role=tab aria-controls=nav-shopping aria-selected=false>{{ $catTwo->name }}</button>
                                @endisset
                                @isset($catThree)
                                    <button class=nav-link id=nav-hotels-tab data-bs-toggle=tab data-bs-target=#nav-hotels role=tab
                                        aria-controls=nav-hotels aria-selected=false>{{ $catThree->name }}</button>
                                @endisset
                                @isset($catFour)
                                    <button class=nav-link id=nav-destination-tab data-bs-toggle=tab data-bs-target=#nav-destination
                                        role=tab aria-controls=nav-destination aria-selected=false>{{ $catFour->name }}</button>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="popular_listing_sliders row ui_kit_tab style2">
                            <div class="tab-content col-lg-12" id=nav-tabContent>
                                <div class="tab-pane fade show active" id=nav-home role=tabpanel aria-labelledby=nav-home-tab>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        @php
                                            $catOneProducts = \App\Models\Product::where('category', $multiCatProductOne->category_one)
                                                ->latest()
                                                ->take(5)
                                                ->get();
                                        @endphp
                                        @foreach ($catOneProducts as $product)
                                            <div class="item ovh">
                                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                    data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                                                    <div class="thumb pb30">
                                                        <img src="{{ asset($product->image_one) }}" alt="{{ $product->name }}"
                                                            style="height:300px; width:100%;">
                                                        <div class=thumb_info>
                                                            <ul class=mb0>
                                                                <li><button type="button" class="btnWishlist"
                                                                        data-product-id="{{ $product->id }}"
                                                                        style="background-color: transparent;border:none;outline:none"><span
                                                                            class="flaticon-heart"></span></button></li>
                                                                <li><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                            class=flaticon-show></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="shop_item_cart_btn d-grid">
                                                            <input type="hidden" id="cartProductQty" value="1">
                                                            <button type="button" data-product-id="{{ $product->id }}"
                                                                class="btn btn-thm addToCartBTN">Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class=details>
                                                        <div class=sub_title>{{ $product->sku }}</div>
                                                        <div class=title><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                            </a>
                                                        </div>
                                                        <div class="review d-flex db-500">
                                                            @php
                                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                $total_rating = 0;
                                                                foreach ($reviews as $review) {
                                                                    $total_rating += $review->rating;
                                                                }
                                                                $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                            @endphp

                                                            <ul class="mb0 me-2">
                                                                @for ($i = 1; $i <= $average_rating; $i++)
                                                                    <li class="list-inline-item"><i class="fas fa-star"></i>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                            <div class=review_count>{{ count($reviews) }} reviews</div>
                                                        </div>
                                                        <div class=si_footer>
                                                            <div class=price>
                                                                ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-shopping role=tabpanel aria-labelledby=nav-shopping-tab>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">

                                        @php
                                            $catTwoProducts = \App\Models\Product::where('category', $multiCatProductOne->category_two)
                                                ->latest()
                                                ->take(5)
                                                ->get();
                                        @endphp
                                        @foreach ($catTwoProducts as $product)
                                            <div class=item>
                                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                    <div class="thumb pb30">
                                                        <img src="{{ asset($product->image_one) }}"
                                                            alt="{{ $product->name }}" style="height:300px; width:100%;">
                                                        <div class=thumb_info>
                                                            <ul class=mb0>
                                                                <li><button type="button" class="btnWishlist"
                                                                        data-product-id="{{ $product->id }}"
                                                                        style="background-color: transparent;border:none;outline:none"><span
                                                                            class="flaticon-heart"></span></button></li>
                                                                <li><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                            class=flaticon-show></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="shop_item_cart_btn d-grid">
                                                            <input type="hidden" id="cartProductQty" value="1">
                                                            <button type="button" data-product-id="{{ $product->id }}"
                                                                class="btn btn-thm addToCartBTN">Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class=details>
                                                        <div class=sub_title>{{ $product->sku }}</div>
                                                        <div class=title><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                            </a>
                                                        </div>
                                                        <div class="review d-flex db-500">
                                                            @php
                                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                $total_rating = 0;
                                                                foreach ($reviews as $review) {
                                                                    $total_rating += $review->rating;
                                                                }
                                                                $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                            @endphp

                                                            <ul class="mb0 me-2">
                                                                @for ($i = 1; $i <= $average_rating; $i++)
                                                                    <li class="list-inline-item"><i class="fas fa-star"></i>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                            <div class=review_count>{{ count($reviews) }} reviews</div>
                                                        </div>
                                                        <div class=si_footer>
                                                            <div class=price>
                                                                ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-hotels role=tabpanel aria-labelledby=nav-hotels-tab>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        @php
                                            $catThreeProducts = \App\Models\Product::where('category', $multiCatProductOne->category_three)
                                                ->latest()
                                                ->take(5)
                                                ->get();
                                        @endphp
                                        @foreach ($catThreeProducts as $product)
                                            <div class=item>
                                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                    <div class="thumb pb30">
                                                        <img src="{{ asset($product->image_one) }}"
                                                            alt="{{ $product->name }}" style="height:300px; width:100%;">
                                                        <div class=thumb_info>
                                                            <ul class=mb0>
                                                                <li><button type="button" class="btnWishlist"
                                                                        data-product-id="{{ $product->id }}"
                                                                        style="background-color: transparent;border:none;outline:none"><span
                                                                            class="flaticon-heart"></span></button></li>
                                                                <li><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                            class=flaticon-show></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="shop_item_cart_btn d-grid">
                                                            <input type="hidden" id="cartProductQty" value="1">
                                                            <button type="button" data-product-id="{{ $product->id }}"
                                                                class="btn btn-thm addToCartBTN">Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class=details>
                                                        <div class=sub_title>{{ $product->sku }}</div>
                                                        <div class=title><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                            </a>
                                                        </div>
                                                        <div class="review d-flex db-500">
                                                            @php
                                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                $total_rating = 0;
                                                                foreach ($reviews as $review) {
                                                                    $total_rating += $review->rating;
                                                                }
                                                                $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                            @endphp

                                                            <ul class="mb0 me-2">
                                                                @for ($i = 1; $i <= $average_rating; $i++)
                                                                    <li class="list-inline-item"><i class="fas fa-star"></i>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                            <div class=review_count>{{ count($reviews) }} reviews</div>
                                                        </div>
                                                        <div class=si_footer>
                                                            <div class=price>
                                                                ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-destination role=tabpanel
                                    aria-labelledby=nav-destination-tab>
                                    <div
                                        class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        @php
                                            $catFourProducts = \App\Models\Product::where('category', $multiCatProductOne->category_four)
                                                ->latest()
                                                ->take(5)
                                                ->get();
                                        @endphp
                                        @foreach ($catFourProducts as $product)
                                            <div class=item>
                                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                    <div class="thumb pb30">
                                                        <img src="{{ asset($product->image_one) }}"
                                                            alt="{{ $product->name }}" style="height:300px; width:100%;">
                                                        <div class=thumb_info>
                                                            <ul class=mb0>
                                                                <li><button type="button" class="btnWishlist"
                                                                        data-product-id="{{ $product->id }}"
                                                                        style="background-color: transparent;border:none;outline:none"><span
                                                                            class="flaticon-heart"></span></button></li>
                                                                <li><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                            class=flaticon-show></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="shop_item_cart_btn d-grid">
                                                            <input type="hidden" id="cartProductQty" value="1">
                                                            <button type="button" data-product-id="{{ $product->id }}"
                                                                class="btn btn-thm addToCartBTN">Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class=details>
                                                        <div class=sub_title>{{ $product->sku }}</div>
                                                        <div class=title><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                            </a>
                                                        </div>
                                                        <div class="review d-flex db-500">
                                                            @php
                                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                $total_rating = 0;
                                                                foreach ($reviews as $review) {
                                                                    $total_rating += $review->rating;
                                                                }
                                                                $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                            @endphp

                                                            <ul class="mb0 me-2">
                                                                @for ($i = 1; $i <= $average_rating; $i++)
                                                                    <li class="list-inline-item"><i class="fas fa-star"></i>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                            <div class=review_count>{{ count($reviews) }} reviews</div>
                                                        </div>
                                                        <div class=si_footer>
                                                            <div class=price>
                                                                ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset
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
    @isset($singleCatProductOne)
        <section class="featured-product pt0" id="bestSales">
            <div class=container>
                <div class=row>
                    <div class=col-md-5>
                        <div class="main-title mb0-sm">
                            @php $singleCat =\App\Models\Category::find($singleCatProductOne->category); @endphp
                            <h2>{{ $singleCat->name }}</h2>
                        </div>
                    </div>
                    <div class=col-md-7>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
                                <button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab data-bs-target=#nav-narive
                                    role=tab aria-controls=nav-narive aria-selected=true>New arrivals</button>
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
                                        @php
                                            $singleCatProductsOne = \App\Models\Product::where('category', $singleCatProductOne->category)
                                                ->latest()
                                                ->take(5)
                                                ->get();
                                        @endphp
                                        @foreach ($singleCatProductsOne as $product)
                                            <div class="item ovh">
                                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                    data-wow-duration="{{ $loop->index * 0.2 + 0.7 . 's' }}">
                                                    <div class="thumb pb30">
                                                        <img src="{{ asset($product->image_one) }}"
                                                            alt="{{ $product->name }}" style="height:300px; width:100%;">
                                                        <div class=thumb_info>
                                                            <ul class=mb0>
                                                                <li><button type="button" class="btnWishlist"
                                                                        data-product-id="{{ $product->id }}"
                                                                        style="background-color: transparent;border:none;outline:none"><span
                                                                            class="flaticon-heart"></span></button></li>
                                                                <li><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                            class=flaticon-show></span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="shop_item_cart_btn d-grid">
                                                            <input type="hidden" id="cartProductQty" value="1">
                                                            <button type="button" data-product-id="{{ $product->id }}"
                                                                class="btn btn-thm addToCartBTN">Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class=details>
                                                        <div class=sub_title>{{ $product->sku }}</div>
                                                        <div class=title><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                            </a>
                                                        </div>
                                                        <div class="review d-flex db-500">
                                                            @php
                                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                $total_rating = 0;
                                                                foreach ($reviews as $review) {
                                                                    $total_rating += $review->rating;
                                                                }
                                                                $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                            @endphp

                                                            <ul class="mb0 me-2">
                                                                @for ($i = 1; $i <= $average_rating; $i++)
                                                                    <li class="list-inline-item"><i class="fas fa-star"></i>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                            <div class=review_count>{{ count($reviews) }} reviews</div>
                                                        </div>
                                                        <div class=si_footer>
                                                            <div class=price>
                                                                ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset
    <section class="featured-product pt0">
        <div class=container>
            @isset($singleCatProductTwo)
                <div class=row>
                    <div class=col-md-5>
                        <div class="main-title mb0-sm">
                            @php $singleCat =\App\Models\Category::find($singleCatProductTwo->category); @endphp
                            <h2>{{ $singleCat->name }}</h2>
                        </div>
                    </div>
                    <div class=col-md-7>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
                                <button class="nav-link active" id=nav-enarive-tab data-bs-toggle=tab
                                    data-bs-target=#nav-enarive role=tab aria-controls=nav-enarive aria-selected=true>New
                                    arrivals</button>
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
                                                @php
                                                    $singleCatProductsTwo = \App\Models\Product::where('category', $singleCatProductTwo->category)
                                                        ->latest()
                                                        ->take(5)
                                                        ->get();
                                                @endphp
                                                @foreach ($singleCatProductsTwo as $product)
                                                    <div class="item ovh">
                                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                            data-wow-duration={{ $loop->index * 0.2 + 0.7 . 's' }}>
                                                            <div class="thumb pb30">
                                                                <img src="{{ asset($product->image_one) }}"
                                                                    alt="{{ $product->name }}"
                                                                    style="height:300px; width:100%;">
                                                                <div class=thumb_info>
                                                                    <ul class=mb0>
                                                                        <li><button type="button" class="btnWishlist"
                                                                                data-product-id="{{ $product->id }}"
                                                                                style="background-color: transparent;border:none;outline:none"><span
                                                                                    class="flaticon-heart"></span></button>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                                                    class=flaticon-show></span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="shop_item_cart_btn d-grid">
                                                                    <input type="hidden" id="cartProductQty" value="1">
                                                                    <button type="button"
                                                                        data-product-id="{{ $product->id }}"
                                                                        class="btn btn-thm addToCartBTN">Add to
                                                                        Cart</button>
                                                                </div>
                                                            </div>
                                                            <div class=details>
                                                                <div class=sub_title>{{ $product->sku }}</div>
                                                                <div class=title><a
                                                                        href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}
                                                                    </a>
                                                                </div>
                                                                <div class="review d-flex db-500">
                                                                    @php
                                                                        $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                        $total_rating = 0;
                                                                        foreach ($reviews as $review) {
                                                                            $total_rating += $review->rating;
                                                                        }
                                                                        $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                                    @endphp

                                                                    <ul class="mb0 me-2">
                                                                        @for ($i = 1; $i <= $average_rating; $i++)
                                                                            <li class="list-inline-item"><i
                                                                                    class="fas fa-star"></i>
                                                                            </li>
                                                                        @endfor
                                                                    </ul>
                                                                    <div class=review_count>{{ count($reviews) }} reviews
                                                                    </div>
                                                                </div>
                                                                <div class=si_footer>
                                                                    <div class=price>
                                                                        ${{ $product->price }}<small><del>${{ $product->old_price }}</del></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset
            @isset($bigBanner)
                <div class="banner_one_large bdrs6 mt100 px-4 px-md-0">
                    <div class=row>
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                            <div class="apple_widget_home1 mb-4 mb-lg-0">
                                <h1 class=title>{{ $bigBanner->name }}</h1>
                                <p class="para mt-3 mb-4">{{ $bigBanner->details }}</p>
                                <a href="{{ URL::to($bigBanner->link) }}" class="btn btn-thm">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="apple_widget_home1 animate_content text-center">
                                <div class="thumb animate_thumb"><img src={{ asset($bigBanner->image) }} alt="Banner Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset

        </div>
    </section>

    @isset($multiCatProductTwo)
        <section class="featured-product pt0" id="newArrivalProduct">
            <div class=container>
                <div class=row>
                    <div class=col-md-6>
                        <div class="main-title mb0-sm">
                            <h2>{{ $multiCatProductTwo->headings }}</h2>
                        </div>
                    </div>
                    @php
                        $catOne = \App\Models\Category::find($multiCatProductTwo->category_one);
                        $catTwo = \App\Models\Category::find($multiCatProductTwo->category_two);
                        $catThree = \App\Models\Category::find($multiCatProductTwo->category_three);
                        $catFour = \App\Models\Category::find($multiCatProductTwo->category_four);
                    @endphp
                    <div class=col-md-6>
                        <div class="popular_listing_sliders style2 ui_kit_tab">
                            <div class="justify-content-md-end justify-content-start mb30 nav nav-tabs" role=tablist>
                                <button aria-controls=nav-hnat20 aria-selected=true class="nav-link active"
                                    data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab
                                    role=tab>{{ $catOne->name }}</button>
                                <button aria-controls=nav-hnababy aria-selected=false class=nav-link data-bs-target=#nav-hnababy
                                    data-bs-toggle=tab id=nav-hnababy-tab role=tab>{{ $catTwo->name }}</button>
                                <button aria-controls=nav-hnafurniture aria-selected=false class=nav-link
                                    data-bs-target=#nav-hnafurniture data-bs-toggle=tab id=nav-hnafurniture-tab
                                    role=tab>{{ $catThree->name }}</button>
                                <button aria-controls=nav-hnaent aria-selected=false class="nav-link me-0"
                                    data-bs-target=#nav-hnaent data-bs-toggle=tab id=nav-hnaent-tab
                                    role=tab>{{ $catFour->name }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="row popular_listing_sliders style2 ui_kit_tab">
                            <div class="col-lg-12 tab-content" id=nav-tabContent4>
                                <div class="fade tab-pane active show" id=nav-hnat20 aria-labelledby=nav-hnat20-tab
                                    role=tabpanel>
                                    <div class=row>
                                        @php
                                            $lastCatProductOne = \App\Models\Product::where('category', $multiCatProductTwo->category_one)
                                                ->inRandomOrder()
                                                ->take(12)
                                            ->get(); @endphp
                                        @foreach ($lastCatProductOne as $product)
                                            <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                                data-wow-duration={{ $loop->index * 0.1 + 0.5 . 's' }}>
                                                <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                    <div class=flex-shrink-0><img alt="{{ $product->name }}"
                                                            style="height: 75px; width:100px; margin-left:20px;"
                                                            src={{ asset($product->image_one) }}></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="mb-2 title"><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <div class="para text-thm1">${{ $product->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnababy aria-labelledby=nav-hnababy-tab role=tabpanel>
                                    <div class=row>
                                        @php
                                            $lastCatProductTwo = \App\Models\Product::where('category', $multiCatProductTwo->category_two)
                                                ->inRandomOrder()
                                                ->take(12)
                                            ->get(); @endphp
                                        @foreach ($lastCatProductTwo as $product)
                                            <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                                data-wow-duration={{ $loop->index * 0.1 + 0.5 . 's' }}>
                                                <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                    <div class=flex-shrink-0><img alt="{{ $product->name }}"
                                                            style="height: 75px; width:100px; margin-left:20px;"
                                                            src={{ asset($product->image_one) }}></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="mb-2 title"><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <div class="para text-thm1">${{ $product->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnafurniture aria-labelledby=nav-hnafurniture-tab
                                    role=tabpanel>
                                    <div class=row>
                                        @php
                                            $lastCatProductThree = \App\Models\Product::where('category', $multiCatProductTwo->category_three)
                                                ->inRandomOrder()
                                                ->take(12)
                                            ->get(); @endphp
                                        @foreach ($lastCatProductThree as $product)
                                            <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                                data-wow-duration={{ $loop->index * 0.1 + 0.5 . 's' }}>
                                                <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                    <div class=flex-shrink-0><img alt="{{ $product->name }}"
                                                            style="height: 75px; width:100px; margin-left:20px;"
                                                            src={{ asset($product->image_one) }}></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="mb-2 title"><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <div class="para text-thm1">${{ $product->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnaent aria-labelledby=nav-hnaent-tab role=tabpanel>
                                    <div class=row>
                                        @php
                                            $lastCatProductFour = \App\Models\Product::where('category', $multiCatProductTwo->category_four)
                                                ->inRandomOrder()
                                                ->take(12)
                                            ->get(); @endphp
                                        @foreach ($lastCatProductFour as $product)
                                            <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                                data-wow-duration={{ $loop->index * 0.1 + 0.5 . 's' }}>
                                                <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                    <div class=flex-shrink-0><img alt="{{ $product->name }}"
                                                            style="height: 75px; width:100px; margin-left:20px;"
                                                            src={{ asset($product->image_one) }}></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="mb-2 title"><a
                                                                href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <div class="para text-thm1">${{ $product->price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset
    <section id=our-partners class="our-partners pt0 pb60">
        <div class=container>
            <div class=row>
                <div class=col-lg-12>
                    <div class="text-center mb35">
                        <h5 class=fz16>Trusted by the world’s best</h5>
                    </div>
                </div>
                <div class=col-lg-12>
                    <div class="shop_item_6grid_slider slider_dib_sm dots_none nav_none owl-carousel owl-theme">
                        @foreach ($sponsors as $sponsor)
                            <div class="item">
                                <div class="partner_item wow fadeInUp" data-wow-duration="0.3s">
                                    <img src="{{ asset($sponsor->logo) }}" alt="{{ $sponsor->name }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $('.addToCartBTN').on('click', function(e) {
                e.preventDefault();

                var product_id = $(this).data('product-id');
                var product_Qty = $('#cartProductQty').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "cart/store",
                    data: {
                        'product_id': product_id,
                        'product_Qty': product_Qty
                    },
                    success: function(response) {
                        if (response.status.indexOf('is add to your cart') !== -1) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.status,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                title: 'Login required!',
                                text: response.status,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });

                $.ajax({
                    url: "cart/data",
                    success: function(data) {
                        var carts = data.carts;
                        var list = $("#cart-list");
                        var cartTotal = $("#subtitle");
                        var cartCount = $("#cartCount");

                        list.empty();
                        cartCount.empty();
                        cartTotal.empty(); // remove previous content

                        var c = carts.reduce(function(sum, cart) {
                            return sum + cart.quantity;
                        }, 0);
                        cartCount.append(c);

                        var t = carts.reduce(function(sum, cart) {
                            return sum + cart.total_price;
                        }, 0);
                        cartTotal.append(t);
                    }
                });

            })
        </script>
        <script>
            $('.btnWishlist').on('click', function(e) {
                e.preventDefault();

                var product_id = $(this).data('product-id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ route('wishlist.store') }}",
                    data: {
                        'product_id': product_id,
                    },
                    success: function(response) {
                        if (response.status.indexOf('is added on your wishlist') !== -1) {
                            Swal.fire({
                                title: 'Success!',
                                text: response.status,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        } else if (response.status.indexOf('is already available on your wishlist') !== -
                            1) {
                            Swal.fire({
                                title: 'Oops!',
                                text: response.status,
                                icon: 'info',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                title: 'Login required!',
                                text: response.status,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });

            });
        </script>
    @endpush
@endsection
