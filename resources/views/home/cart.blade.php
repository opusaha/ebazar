@extends('home.layout.master')
@section('content')
    @push('styles')
        <title>Zeomart :: Cart</title>
    @endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Cart</a></li>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-cart pt30">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 m-auto">
                    <div class="main-title text-center mb50">
                        <h2 class="title">Shopping Cart</h2>
                    </div>
                    <div class="text-center">
                        <div class="list_last_content">
                            <div class="lc">
                                <p class="para">Buy $98.00 more to enjoy FREE Shipping</p>
                                <div class="uilayout_range home1_style">
                                    <div class="sidebar_range_slider mb30 mt25">
                                        <input class="range-example-km" value="80" type="text"
                                            style="display: none;">
                                        <div class="asRange">
                                            <div class="asRange-bar"></div>
                                            <div class="asRange-pointer asRange-pointer-1" style="left: 53.3333%;"
                                                tabindex="0"><span class="asRange-tip">80</span></div><span
                                                class="asRange-selected" style="left: 0px; width: 53.3333%;"></span>
                                            <div class="asRange-scale">
                                                <ul class="asRange-scale-lines">
                                                    <li class="asRange-scale-grid" style="left: 0%;"></li>
                                                    <li style="left: 5%;"></li>
                                                    <li style="left: 10%;"></li>
                                                    <li style="left: 15%;"></li>
                                                    <li style="left: 20%;"></li>
                                                    <li class="asRange-scale-inlineGrid" style="left: 25%;"></li>
                                                    <li style="left: 30%;"></li>
                                                    <li style="left: 35%;"></li>
                                                    <li style="left: 40%;"></li>
                                                    <li style="left: 45%;"></li>
                                                    <li class="asRange-scale-grid" style="left: 50%;"></li>
                                                    <li style="left: 55%;"></li>
                                                    <li style="left: 60%;"></li>
                                                    <li style="left: 65%;"></li>
                                                    <li style="left: 70%;"></li>
                                                    <li class="asRange-scale-inlineGrid" style="left: 75%;"></li>
                                                    <li style="left: 80%;"></li>
                                                    <li style="left: 85%;"></li>
                                                    <li style="left: 90%;"></li>
                                                    <li style="left: 95%;"></li>
                                                    <li class="asRange-scale-grid" style="left: 100%;"></li>
                                                </ul>
                                                <ul class="asRange-scale-values">
                                                    <li style="left: 0%;"><span>0</span></li>
                                                    <li style="left: 50%;"><span>75</span></li>
                                                    <li style="left: 100%;"><span>150</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt15">
                <div class="col-lg-8 col-xl-9">
                    <div class="shopping_cart_table table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">TOTAL</th>
                                    <th scope="col">REMOVE</th>
                                </tr>
                            </thead>
                            <tbody class="table_body">
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list d-block d-xl-flex">
                                            <li class="ps-1 ps-sm-4 pe-1 pe-sm-4"><a href="#"><img
                                                        src="images/shop/cart1.png" alt="cart1.png"></a></li>
                                            <li class="ms-2 ms-md-3">
                                                <a class="cart_title" href="#">
                                                    <span class="fz16">Apple MacBook Pro with <br
                                                            class="d-none d-md-block"> Apple M1 Chip</span> <br>
                                                    <span class="fz14"><span class="fw500">Hard Drive Capacity:</span>
                                                        256</span><br>
                                                    <span class="fz14"><span class="fw500">Actual Color:</span>
                                                        Silver</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </th>
                                    <td>$3.399</td>
                                    <td>
                                        <div class="cart_btn">
                                            <div class="quantity-block">
                                                <button class="quantity-arrow-minus inner_page"> <span
                                                        class="fa fa-minus"></span> </button>
                                                <input class="quantity-num inner_page" type="number" value="3">
                                                <button class="quantity-arrow-plus inner_page"> <span
                                                        class="fas fa-plus"></span> </button>
                                            </div>
                                        </div>
                                        <!-- <input class="cart_count text-center" placeholder="2" type="number"> -->
                                    </td>
                                    <td class="">$3.399</td>
                                    <td class=""><span class="flaticon-close"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list d-block d-xl-flex">
                                            <li class="ps-1 ps-sm-4 pe-1 pe-sm-4"><a href="#"><img
                                                        src="images/shop/cart1.png" alt="cart1.png"></a></li>
                                            <li class="ms-2 ms-md-3">
                                                <a class="cart_title" href="#">
                                                    <span class="fz16">Apple MacBook Pro with <br
                                                            class="d-none d-md-block"> Apple M1 Chip</span> <br>
                                                    <span class="fz14"><span class="fw500">Hard Drive Capacity:</span>
                                                        256</span><br>
                                                    <span class="fz14"><span class="fw500">Actual Color:</span>
                                                        Silver</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </th>
                                    <td>$3.399</td>
                                    <td>
                                        <div class="cart_btn">
                                            <div class="quantity-block">
                                                <button class="quantity-arrow-minus2 inner_page"> <span
                                                        class="fa fa-minus"></span> </button>
                                                <input class="quantity-num2 inner_page" type="number" value="3">
                                                <button class="quantity-arrow-plus2 inner_page"> <span
                                                        class="fas fa-plus"></span> </button>
                                            </div>
                                        </div>
                                        <!-- <input class="cart_count text-center" placeholder="2" type="number"> -->
                                    </td>
                                    <td class="">$3.399</td>
                                    <td class=""><span class="flaticon-close"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <ul class="cart_list d-block d-xl-flex">
                                            <li class="ps-1 ps-sm-4 pe-1 pe-sm-4"><a href="#"><img
                                                        src="images/shop/cart1.png" alt="cart1.png"></a></li>
                                            <li class="ms-2 ms-md-3">
                                                <a class="cart_title" href="#">
                                                    <span class="fz16">Apple MacBook Pro with <br
                                                            class="d-none d-md-block"> Apple M1 Chip</span> <br>
                                                    <span class="fz14"><span class="fw500">Hard Drive Capacity:</span>
                                                        256</span><br>
                                                    <span class="fz14"><span class="fw500">Actual Color:</span>
                                                        Silver</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </th>
                                    <td>$3.399</td>
                                    <td>
                                        <div class="cart_btn">
                                            <div class="quantity-block">
                                                <button class="quantity-arrow-minus3 inner_page"> <span
                                                        class="fa fa-minus"></span> </button>
                                                <input class="quantity-num3 inner_page" type="number" value="3">
                                                <button class="quantity-arrow-plus3 inner_page"> <span
                                                        class="fas fa-plus"></span> </button>
                                            </div>
                                        </div>
                                        <!-- <input class="cart_count text-center" placeholder="2" type="number"> -->
                                    </td>
                                    <td class="">$3.399</td>
                                    <td class=""><span class="flaticon-close"></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout_form mt30">
                            <div class="checkout_coupon posr d-block d-xl-flex">
                                <form class="form_one posr mb10-lg">
                                    <input class="form-control coupon_input" type="search" placeholder="Coupon code"
                                        aria-label="Search">
                                    <a class="btn apply_count_btn" href="#">Apply Coupon</a>
                                </form>
                                <form class="form_two">
                                    <button type="button" class="btn btn_shopping btn-white me-3">Continue
                                        Shopping</button>
                                    <button type="button" class="btn btn_cart btn3 btn-thm">Update Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="order_sidebar_widget style2">
                        <h4 class="title">Cart Totals</h4>
                        <ul>
                            <li class="subtitle">
                                <p>Product Subtotal <span class="float-end">$229.99</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Order Discounts <span class="float-end">-$30.01</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Estimated Shipping <span class="float-end">Free</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Estimated Taxes <span class="float-end">$26.00</span></p>
                            </li>
                            <li class="subtitle">
                                <hr>
                            </li>
                            <li class="subtitle totals">
                                <p>Total <span class="float-end">$225.98</span></p>
                            </li>
                        </ul>
                        <div class="ui_kit_button payment_widget_btn">
                            <button type="button" class="btn btn-thm btn-block">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
