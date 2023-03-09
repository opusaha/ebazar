@extends('home.layout.master')
@section('content')
    @push('styles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: Get your Product</title>
    @endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $product->name }}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-single-content pb80 pt0 ovh">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-xxl-7">
                    <div class="shop_single_natabmenu">
                        <div class="d-block">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="shop_single_navmenu_content mb-3 text-center">
                                        <a class="product_popup popup-img67" href="{{ URL::to($product->image_one) }}"><span
                                                class="flaticon-full-screen"></span></a>
                                        <div class="zoomimg_wrapper">
                                            <img class="zoom-img" id="zoom_01" src="{{ asset($product->image_one) }}"
                                                data-zoom-image="{{ asset($product->image_one) }}" width="550"
                                                style="max-height: 550px" alt="Shop Single Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="shop_single_navmenu_content mb-3 text-center">
                                        <a class="product_popup popup-img67" href="{{ URL::to($product->image_two) }}"><span
                                                class="flaticon-full-screen"></span></a>
                                        <div class="zoomimg_wrapper">
                                            <img class="zoom-img" id="zoom_02" src="{{ asset($product->image_two) }}"
                                                data-zoom-image="{{ asset($product->image_two) }}" width="550"
                                                style="max-height: 550px" alt="Shop Single Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="shop_single_navmenu_content mb-3 text-center">
                                        <a class="product_popup popup-img67"
                                            href="{{ URL::to($product->image_three) }}"><span
                                                class="flaticon-full-screen"></span></a>
                                        <div class="zoomimg_wrapper">
                                            <img class="zoom-img" id="zoom_03" src="{{ asset($product->image_three) }}"
                                                data-zoom-image="{{ asset($product->image_three) }}" width="550"
                                                style="max-height: 550px" alt="Shop Single Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav d-flex nav-pills me-3 mb-3" id="v-pills-tab2" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link mb-0 me-3 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true"><img
                                        src="{{ asset($product->image_one) }}" alt=""></button>
                                <button class="nav-link mb-0 me-3" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false"><img
                                        src="{{ asset($product->image_two) }}" alt=""></button>
                                <button class="nav-link mb-0 " id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false"><img
                                        src="{{ asset($product->image_three) }}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-5">
                    <div class="shop_single_product_details ps-0 ps-xl-4 mt-4 mt-xl-0">
                        <ul class="d-flex">
                            <li class="border-right">APPLE</li>
                            <li class="mx-3">
                                @php
                                    $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                    $total_rating = 0;
                                    foreach ($reviews as $review) {
                                        $total_rating += $review->rating;
                                    }
                                    $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                @endphp
                                <div class="sspd_review">
                                    <ul class="mb0">
                                        @for ($i = 1; $i <= $average_rating; $i++)
                                            <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </li>
                            <li>{{ count($reviews) }} reviews</li>
                        </ul>
                        <h4 class="title mb15">{{ $product->name }}</h4>
                        <hr>
                        <div class="sspd_price mb25 mt20">{{ $product->price }}Tk<small><del class="mr10">
                                    {{ $product->old_price }} TK</del></small></div>
                        <div class="shop_single_table style3 table-responsive">
                            <div>
                                {!! $product->details !!}
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <ul class="cart_btn_widget shop_single2_style align-items-center mb-0">
                                <li class="list-inline-item me-3 mb-2">
                                    <div class="cart_btn home_page_sidebar d-grid">
                                        <div class="quantity-block home_page_sidebar">
                                            <button class="quantity-arrow-minus2 shop_single_page_sidebar"><img
                                                    src="{{ asset('home/images/icons/minus.svg') }}"
                                                    alt=""></button>
                                            <input class="quantity-num2 shop_single_page_sidebar" id="cartProductQty"
                                                type="number" value="1">
                                            <button class="quantity-arrow-plus2 shop_single_page_sidebar"> <span
                                                    class="flaticon-close"></span> </button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item me-3 mb-3"><button type="button"
                                        class="addToCartBTN btn btn-thm bdrs60" data-product-id="{{ $product->id }}">Add
                                        to cart</button></li>
                                <li class="list-inline-item me-3 mb-3"><a href="#" class="btn btn-thm2 bdrs60">Buy
                                        Now</a></li>
                                <li class="list-inline-item me-3 mb-3"><a href="#"><span
                                            class="flaticon-heart fz16 heading-color"></span></a></li>
                                <li class="list-inline-item mb-3"><a href="#"><span
                                            class="flaticon-graph fz16 heading-color"></span></a></li>
                            </ul>
                        </div>
                        <hr class="mt-0 mb20">
                        <ul class="sspd_sku mb20">
                            <li>
                                <h6>SKU: {{ $product->sku }} </h6>
                            </li>
                            <li><a href="#">Categories: Apple Macbook, Laptop, Computer</a></li>
                            <li>
                                <h6>Tags: {{ $product->tag }}</h6>
                            </li>
                            <li class="d-flex mt-3"><a href="#">Share</a>
                                <span class="social_icons">
                                    <ul class="mb0">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </span>
                            </li>
                        </ul>
                        <hr class="mt-0">
                        <div class="vendor_iconbox style2 d-block d-sm-flex mb-1">
                            <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
                            <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                                @php $seller= \App\Models\Seller::find($product->seller_id) @endphp
                                <p class="heading-color">Sold and shipped by {{ $seller->name }} by<a
                                        href="{{ route('home') }}" class="fw500 heading-color fz16">
                                        {{ $settings->name }}</a></p>
                            </div>
                        </div>
                        <div class="vendor_iconbox style2 d-block d-sm-flex mb-0">
                            <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
                            <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                                <p class="heading-color">Free 15-Day returns <a class="tdu" href="">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt50">
                <div class="col-lg-12">
                    <div class="shop_single3_style ui_kit_tab style2">
                        <!-- nav tab Nav List Start -->
                        <ul class="nav nav-tabs mb15" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0 me-3 me-xl-5 active" id="description-tab"
                                    data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab"
                                    aria-controls="description" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0 me-3 me-xl-5" id="details-tab"
                                    data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab"
                                    aria-controls="details" aria-selected="false">Details &amp; Specs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0 me-3 me-xl-5" id="vendor-tab"
                                    data-bs-toggle="tab" data-bs-target="#vendor" type="button" role="tab"
                                    aria-controls="vendor" aria-selected="false">Simillar Product</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0 me-3 me-xl-5" id="returnpolicy-tab"
                                    data-bs-toggle="tab" data-bs-target="#returnpolicy" type="button" role="tab"
                                    aria-controls="returnpolicy" aria-selected="false">Return Policy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0 me-3 me-xl-5" id="qna-tab"
                                    data-bs-toggle="tab" data-bs-target="#qna" type="button" role="tab"
                                    aria-controls="qna" aria-selected="false">Questions and Answers</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link mt-3 mt-xl-0 mb-0" id="customerreview-tab" data-bs-toggle="tab"
                                    data-bs-target="#customerreview" type="button" role="tab"
                                    aria-controls="customerreview" aria-selected="false">Customer Reviews</button>
                            </li>
                        </ul>
                        <!-- nav tab Nav List End -->
                        <!-- nav tab contents Start -->
                        <div class="tab-content pt20 row" id="myTabContent">
                            <div class="tab-pane fade col-lg-12 active show" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                {!! $product->details !!}
                            </div>
                            <div class="tab-pane fade col-xl-8" id="details" role="tabpanel"
                                aria-labelledby="details-tab">
                                {!! $product->specification !!}
                            </div>
                            <div class="tab-pane fade col-xl-12" id="vendor" role="tabpanel"
                                aria-labelledby="vendor-tab">
                                <div class="row">
                                    @php
                                        $vandorProduct = \App\Models\Product::where('name', 'like', '%' . $product->seller_id . '%')
                                            ->inRandomOrder()
                                            ->take(6)
                                            ->get();
                                    @endphp
                                    @foreach ($vandorProduct as $pro)
                                        <div class="col-md-6 col-xl-4">
                                            <div class="vendor_grid shop_single_style">
                                                <div class="details pt-0">
                                                    <div class="flex-grow-1">
                                                        <div class="d-block d-md-flex align-items-center">
                                                            @php $seller = \App\Models\Seller::find($pro->seller_id) @endphp
                                                            <h5 class="title me-2 mb-0">{{ $seller->name }}</h5>
                                                            <div class="sspd_postdate me-2 mb10-sm">
                                                                <div class="sspd_review">
                                                                    @php
                                                                        $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                                        $total_rating = 0;
                                                                        foreach ($reviews as $review) {
                                                                            $total_rating += $review->rating;
                                                                        }
                                                                        $average_rating = count($reviews) > 0 ? round($total_rating / count($reviews)) : 0;
                                                                    @endphp
                                                                    <ul class="mb0">
                                                                        @for ($i = 1; $i <= $average_rating; $i++)
                                                                            <li class="list-inline-item"><i
                                                                                    class="fas fa-star"></i>
                                                                            </li>
                                                                        @endfor
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="sub_title mb-0">{{ count($reviews) }} reviews
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="vendor_address mt10 mb20">
                                                        <ul class="mb0">
                                                            <li><a
                                                                    href="{{ route('single.product', ['name' => $pro->name, 'id' => $pro->id]) }}">{{ $pro->name }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="price">$ {{ $pro->price }}
                                                            <small><del>${{ $pro->old_price }}</del></small>
                                                        </div>
                                                        <a class="btn btn-white bdr_thm"
                                                            href="{{ route('single.product', ['name' => $pro->name, 'id' => $pro->id]) }}">Go
                                                            Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade col-xl-12" id="returnpolicy" role="tabpanel"
                                aria-labelledby="returnpolicy-tab">
                                <p class="shipping_return_para mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nulla auctor aliquam tortor at suscipit. Etiam accumsan, est id
                                    vehicula cursus, eros ligula suscipit massa, sed auctor felis mi eu massa. Sed vulputate
                                    nisi nibh, vel maximus velit auctor nec. Integer consectetur elementum turpis, nec
                                    fermentum ipsum tempor quis. Praesent a quam congue, egestas erat sit amet, finibus
                                    justo. Quisque viverra neque vehicula eros gravida ultricies. Ut lacinia enim nec
                                    consequat tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere cubilia Curae; Vivamus ultricies ornare feugiat. Donec vitae rhoncus sapien, ac
                                    aliquet nunc.</p>
                            </div>
                            <div class="tab-pane fade col-xl-12" id="qna" role="tabpanel"
                                aria-labelledby="qna-tab">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="shop_single_qna">
                                            @if (Auth::check())
                                                <form action="{{ route('ask.question') }}" method="POST">@csrf
                                                    <div class="search_field mt-3">
                                                        <div class="blog_search_widget">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Have a question? Search for answer"
                                                                    aria-label="Recipient's username" name="question">
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $product->id }}">
                                                                <input type="hidden" name="seller_id"
                                                                    value="{{ $product->seller_id }}">
                                                                <button class="btn btn-thm" type="submit"><span
                                                                        class="fa fa-paper-plane"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                            @php $questions = \App\Models\Question::where('product_id',$product->id)->get(); @endphp
                                            @foreach ($questions as $question)
                                                <div class="question_with_poster mt-3">
                                                    <h5 class="title">Q: {{ $question->question }}</h5>
                                                    @php $user = \App\Models\User::find($question->user_id) @endphp
                                                    <p class="author">Asked by @isset($user)
                                                            {{ $user->name }}
                                                        @endisset - {{ $question->created_at }} on {{ $settings->name }}
                                                    </p>
                                                </div>
                                                @php $answer = \App\Models\Answer::where('question_id',$question->id)->first(); @endphp
                                                @isset($answer)
                                                    <div class="question_with_answer mt-3 ms-3">
                                                        <h5 class="title">A: {{ $answer->answer }}</h5>
                                                        @php $seller = \App\Models\Seller::find($answer->seller_id); @endphp
                                                        <p class="author mb-0">Answered by @isset($seller)
                                                                {{ $seller->name }}
                                                            @endisset - {{ $answer->created_at }}</p>
                                                    </div>
                                                @endisset
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade col-xl-12" id="customerreview" role="tabpanel"
                                aria-labelledby="customerreview-tab">
                                @php
                                    $reviews = \App\Models\Review::where('product_id', $product->id)
                                        ->where('status', 'approved')
                                        ->get();
                                @endphp
                                @if (count($reviews) > 0)
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="review_average mb30">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="title">{{ $reviews->avg('rating') }}</div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="sspd_postdate">
                                                            <div class="sspd_review">
                                                                <ul class="mb0">
                                                                    <li class="list-inline-item"><a href="#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="total_review">{{ count($reviews) }} reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php

                                                $oneStarCount = $reviews->where('rating', 1)->count();
                                                $twoStarCount = $reviews->where('rating', 2)->count();
                                                $threeStarCount = $reviews->where('rating', 3)->count();
                                                $fourStarCount = $reviews->where('rating', 4)->count();
                                                $fiveStarCount = $reviews->where('rating', 5)->count();
                                                $totalCount = $reviews->count();
                                            @endphp

                                            <div
                                                class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                                                <div class="me-1">5 star</div>
                                                <div class="progress-bar mx-3">
                                                    <div class="progress-bar__bg"></div>
                                                    <div class="progress-bar__bar"></div>
                                                </div>
                                                <div class="heading-color">
                                                    {{ $totalCount > 0 ? number_format(($fiveStarCount / $totalCount) * 100, 2) : '0' }}%
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                                                <div class="me-1">4 star</div>
                                                <div class="progress-bar mx-3">
                                                    <div class="progress-bar__bg"></div>
                                                    <div class="progress-bar__bar"></div>
                                                </div>
                                                <div class="heading-color">
                                                    {{ $totalCount > 0 ? number_format(($fourStarCount / $totalCount) * 100, 2) : '0' }}%
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                                                <div class="me-1">3 star</div>
                                                <div class="progress-bar mx-3">
                                                    <div class="progress-bar__bg"></div>
                                                    <div class="progress-bar__bar"></div>
                                                </div>
                                                <div class="heading-color">
                                                    {{ $totalCount > 0 ? number_format(($threeStarCount / $totalCount) * 100, 2) : '0' }}%
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb10">
                                                <div class="me-1">2 star</div>
                                                <div class="progress-bar mx-3">
                                                    <div class="progress-bar__bg"></div>
                                                    <div class="progress-bar__bar"></div>
                                                </div>
                                                <div class="heading-color">
                                                    {{ $totalCount > 0 ? number_format(($twoStarCount / $totalCount) * 100, 2) : '0' }}%
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-center single_line_review pr30 pr0-lg mb30">
                                                <div class="me-1">1 star</div>
                                                <div class="progress-bar mx-3">
                                                    <div class="progress-bar__bg"></div>
                                                    <div class="progress-bar__bar"></div>
                                                </div>
                                                <div class="heading-color">
                                                    {{ $totalCount > 0 ? number_format(($twoStarCount / $totalCount) * 100, 2) : '0' }}%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="product_single_content mb30">
                                                <div class="mbp_pagination_comments">

                                                    <h5 class="mb30">{{ $totalCount }} Review For This Product</h5>

                                                    @foreach ($reviews as $review)
                                                        <div class="mbp_first d-flex align-items-center mb20">
                                                            <div class="flex-shrink-0"></div>
                                                            <div class="flex-grow-1 ms-4">
                                                                <div class="d-block d-md-flex">
                                                                    <div class="sspd_postdate me-2 mb10-sm">
                                                                        <div class="sspd_review">
                                                                            <ul class="mb0">
                                                                                <li class="list-inline-item"><a
                                                                                        href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item"><a
                                                                                        href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item"><a
                                                                                        href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item"><a
                                                                                        href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                                <li class="list-inline-item"><a
                                                                                        href="#"><i
                                                                                            class="fas fa-star"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="sub_title">{{ $review->comment }}</h5>
                                                                </div>
                                                                @php $user = \App\Models\User::find($review->user_id); @endphp
                                                                <div class="review_post_meta">Reviewed by
                                                                    {{ $user->name }} - {{ $review->updated_at }}</div>
                                                            </div>
                                                        </div>
                                                        <ul class="mb20">
                                                            @if ($review->image_one)
                                                                <li class="list-inline-item mb5-414"><img
                                                                        src="{{ asset($review->image_one) }}"
                                                                        alt="review-img"></li>
                                                            @endif
                                                            @if ($review->image_one)
                                                                <li class="list-inline-item mb5-414"><img
                                                                        src="{{ asset($review->image_two) }}"
                                                                        alt="review-img"></li>
                                                            @endif
                                                        </ul>
                                                    @endforeach
                                                    @if (count($reviews) > 2)
                                                        <div class="all_review_btn text-center">
                                                            <a href="#" class="btn btn-lg btn-white bdr_thm">See All
                                                                Review</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="bsp_reveiw_wrt">
                                                @php
                                                    $postReview = \App\Models\Review::where('product_id', $product->id)
                                                        ->where('status', 'null')
                                                        ->where('user_id', Auth::id())
                                                        ->first();
                                                @endphp
                                                @isset($postReview)
                                                    <form class="comments_form"
                                                        action="{{ route('post.review', ['order_id' => $postReview->order_id, 'product_id' => $postReview->product_id]) }}"
                                                        method="POST" enctype="multipart/form-data">@csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="title mb20">Add a Review</h4>
                                                                <p class="heading-color">Your email address will not be
                                                                    published.
                                                                    Required fields are marked *</p>
                                                                <h5 class="mb0">Your rating of this product</h5>
                                                                <div class="sspd_postdate vendor_single">
                                                                    <div class="sspd_review">
                                                                        <div class="rating">
                                                                            <input type="radio" id="star1"
                                                                                value="1" /><label for="star1"
                                                                                title="1 star"><i
                                                                                    class="fas fa-star"></i></label>
                                                                            <input type="radio" id="star2"
                                                                                value="2" /><label for="star2"
                                                                                title="2 stars"><i
                                                                                    class="fas fa-star"></i></label>
                                                                            <input type="radio" id="star3"
                                                                                value="3" /><label for="star3"
                                                                                title="3 stars"><i
                                                                                    class="fas fa-star"></i></label>
                                                                            <input type="radio" id="star4"
                                                                                value="4" /><label for="star4"
                                                                                title="4 stars"><i
                                                                                    class="fas fa-star"></i></label>
                                                                            <input type="radio" id="star5"
                                                                                value="5" /><label for="star5"
                                                                                title="5 stars"><i
                                                                                    class="fas fa-star"></i></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" id="myRatting" name="rating">
                                                                <div class="form-group">
                                                                    <label class="heading-color mb10">Your review</label>
                                                                    <textarea class="form-control" rows="6" name="comment"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="file" name="image_one">
                                                                    <input type="file" name="image_two">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-thm">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <!-- nav tab contents End -->
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
            const stars = document.querySelectorAll('.rating input');
            let ratingValue;

            for (const star of stars) {
                star.addEventListener('click', function() {
                    ratingValue = this.value;
                    console.log(ratingValue); // log the selected rating value
                    $('#myRatting').val(ratingValue)

                    // highlight the selected stars with a gold color
                    for (const [index, star] of stars.entries()) {
                        if (index < ratingValue) {
                            star.parentElement.classList.add('selected');
                        } else {
                            star.parentElement.classList.remove('selected');
                        }
                    }
                });
            }
        </script>
    @endpush
@endsection
