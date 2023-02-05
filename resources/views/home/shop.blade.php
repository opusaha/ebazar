@extends('home.layout.master')
@section('content')
@push('styles')
<title>Zeomart :: Shop</title>
@endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                            <li class="breadcrumb-item"><a href="#">Computers</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Desktop Computers</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-listing pt10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title bb1 pb10">
                        <h2 class="title">Laptops and Accessories</h2>
                        <p>Shop laptops, desktops, monitors, tablets, PC gaming, hard drives and storage, accessories and
                            more</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-7 col-lg-6">
                    <div class="filter_components">
                        <ul class="mb0 align-items-center text-start">
                            <li class="d-none d-md-inline-block me-2 mb-3">
                                <div class="custom_dropdown_widget">
                                    <div class="drop_btn">Price <i class="fa fa-angle-down"></i></div>
                                    <div class="drop_content pb20">
                                        <div class="zmart_custom_range_slider mt30">
                                            <div class="addui-slider addui-slider-horizontal addui-slider-isrange mb5"
                                                guid="db1c2862-f704-4a7c-9538-609d84f38922"><input
                                                    class="addui-slider-input" type="hidden" name=""
                                                    value="20.5,70987">
                                                <div class="addui-slider-track">
                                                    <div class="addui-slider-range"
                                                        style="left: 0.0005001%; width: 70.9807%;"></div>
                                                    <div class="addui-slider-handle addui-slider-handle-l"
                                                        style="left: 0.0005001%;">
                                                        <div class="addui-slider-value"><span
                                                                style="font-size: 14px">$20</span></div>
                                                    </div>
                                                    <div class="addui-slider-handle addui-slider-handle-h"
                                                        style="left: 70.9812%;">
                                                        <div class="addui-slider-value"><span
                                                                style="font-size: 14px">$70987</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="enable_disable_btns d-grid">
                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>
                                            <a class="btn btn2" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-md-inline-block me-2 mb-3">
                                <div class="custom_dropdown_widget">
                                    <div class="drop_btn2">Brand <i class="fa fa-angle-down"></i></div>
                                    <div class="drop_content2 pb20 text-start">
                                        <div class="blog_search_widget mb15">
                                            <div class="input-group">
                                                <input type="text" class="form-control mb15" placeholder="Search"
                                                    aria-label="Recipient's username">
                                            </div>
                                        </div>
                                        <div class="sidebar_widget_checkbox">
                                            <div class="ui_kit_checkbox mb15">
                                                <label class="custom_checkbox">Apple <span class="float-end">87</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="custom_checkbox" checked="checked">Asus <span
                                                        class="float-end">92</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="custom_checkbox">Acer <span class="float-end">123</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="custom_checkbox">Dell <span class="float-end">49</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="custom_checkbox">Lenovo <span class="float-end">12</span>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a href="#" class="shop_btn">Show More</a>
                                            </div>
                                        </div>
                                        <div class="enable_disable_btns d-grid mt25">
                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>
                                            <a class="btn btn2" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-md-inline-block me-0 mb-3">
                                <div class="custom_dropdown_widget">
                                    <div class="drop_btn3">Color <i class="fa fa-angle-down"></i></div>
                                    <div class="drop_content3 pb20">
                                        <div class="sidebar_widget_checkbox color_style mb15">
                                            <div class="ui_kit_checkbox d-flex align-items-center mb0">
                                                <label class="custom_checkbox me-2 mb15" checked="checked">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="custom_checkbox me-2 mb15">
                                                    <input type="checkbox">
                                                    <span class="checkmark style2"></span>
                                                </label>
                                                <label class="custom_checkbox me-2 mb15">
                                                    <input type="checkbox">
                                                    <span class="checkmark style3"></span>
                                                </label>
                                                <label class="custom_checkbox me-2 mb15">
                                                    <input type="checkbox">
                                                    <span class="checkmark style4"></span>
                                                </label>
                                                <label class="custom_checkbox me-2 mb15">
                                                    <input type="checkbox">
                                                    <span class="checkmark style5"></span>
                                                </label>
                                                <label class="custom_checkbox mb15">
                                                    <input type="checkbox">
                                                    <span class="checkmark style6"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="enable_disable_btns d-grid mt50">
                                            <a class="btn btn1 btn-thm mb10" href="#">View Result</a>
                                            <a class="btn btn2" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-5 col-lg-6">

                </div>
                <div class="row">
                    @foreach ($products as $index => $product)
                        <div>
                            <div class="col-sm-6 col-lg-4 col-xl p0 pl15-520">
                                <div class="shop_item bdr1 m--1">
                                    <div class="thumb pb30">
                                        <img src="{{ $product->image_one }}" alt="Shop Item1">
                                        <div class="thumb_info">
                                            <ul class="mb0">
                                                <li><a href="page-dashboard-wish-list.html"><span
                                                            class="flaticon-heart"></span></a>
                                                </li>
                                                <li><a href="page-dashboard-wish-list.html"><span
                                                            class="flaticon-show"></span></a>
                                                </li>
                                                <li><a href="page-shop-list-v6.html"><span
                                                            class="flaticon-graph"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid">
                                            {{-- <a href="{{ route('add.cart', $product->id) }}" class="btn btn-thm">Add to
                                                Cart</a> --}}
                                            <input type="hidden" id="cartProductQty" value="1">
                                            <button type="button" data-product-id="{{ $product->id }}" class="btn btn-thm addToCartBTN">Add to
                                                Cart</button>
                                        </div>
                                    </div>

                                    <div class="details">
                                        <div class="sub_title">{{ $product->sku }}</div>
                                        <div class="title"><a href="#">{{ $product->name }}</a></div>
                                        <div class="review d-flex">
                                            <ul class="mb0 me-2">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-star"></i></a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fas fa-star"></i></a>
                                                </li>
                                            </ul>
                                            <div class="review_count"><a href="#">3,014 reviews</a></div>
                                        </div>
                                        <div class="si_footer">
                                            <div class="price">{{ $product->price }}
                                                TK<small><del>{{ $product->old_price }} TK</del></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (($index + 1) % 5 == 0)
                </div>
                <div class="row">
                    @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mbp_pagination mt30 text-center">
                            <ul class="page_navigation">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                            class="fas fa-angle-left"></span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">20</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                                </li>
                            </ul>
                            <p class="mt20 pagination_page_count text-center">1 – 20 of 300+ properties found</p>
                        </div>
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
                        alert(response.status);
                    }
                });
            });
        </script>
    @endpush
@endsection
