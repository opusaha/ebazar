@extends('home.layout.master')
@section('content')
    @push('styles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Cart</title>
    @endpush
    <section class="shop-cart pt30">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 m-auto">
                    <div class="main-title text-center mb50">
                        <h2 class="title">Shopping Cart</h2>
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
                            <tbody class="table_body" id="cartBody">
                                @foreach ($carts as $cart)
                                    @php $product= \App\Models\Product::findOrFail($cart->product_id); @endphp
                                    <tr>
                                        <th scope="row">
                                            <ul class="cart_list d-block d-xl-flex">
                                                <li class="ps-1 ps-sm-4 pe-1 pe-sm-4"><a href="#"><img
                                                            src="{{ $product->image_one }}" alt="cart1.png"
                                                            style="height:60px"></a></li>
                                                <li class="ms-2 ms-md-3">
                                                    <a class="cart_title" href="#">
                                                        <span class="fz16">{{ $product->name }}</span><br>
                                                        <span class="fz14"><span class="fw500">Actual Color:</span>
                                                            Silver</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </th>
                                        <td>{{ $cart->price }} TK</td>
                                        <td>
                                            <div class="cart_btn">
                                                <div class="quantity-block">
                                                    <button class="quantity-arrow-minus inner_page"> <span
                                                            class="fa fa-minus"></span> </button>
                                                    <input class="quantity-num inner_page" type="number"
                                                        value="{{ $cart->quantity }}">
                                                    <button class="quantity-arrow-plus inner_page"> <span
                                                            class="fas fa-plus"></span> </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">{{ $cart->total_price }} TK</td>
                                        <td class=""><button type="button" class="removeCart"
                                                data-product-id="{{ $cart->id }}"
                                                style="background-color: transparent;border:none;outline:none"><span
                                                    class="flaticon-close"></span></button></td>
                                    </tr>
                                @endforeach
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
                                    {{-- <a  class="btn btn_shopping btn-white me-3">Continue
                                        Shopping</a> --}}
                                    <a href="{{ route('home') }}" class="btn btn_cart btn3 btn-thm">Continue Shopping</a>
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
                                <p>Product Subtotal <span
                                        class="float-end" id="cartDisplayTotal">{{ number_format($carts->sum('total_price'), 2) }} TK</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Order Discounts <span class="float-end">0.00 TK</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Estimated Shipping <span class="float-end">Free</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Estimated Taxes <span class="float-end"> 0.00 TK</span></p>
                            </li>
                            <li class="subtitle">
                                <hr>
                            </li>
                            <li class="subtitle totals">
                                <p>Total <span class="float-end" id="cartDisplaySubTotal">{{ number_format($carts->sum('total_price'), 2) }}
                                        TK</span></p>
                            </li>
                        </ul>
                        <div class="ui_kit_button payment_widget_btn">
                            <a href="{{route('checkout')}}"class="btn btn-thm btn-block">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $('.removeCart').on('click', function(e) {
                e.preventDefault();

                var product_id = $(this).data('product-id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "cart/remove",
                    data: {
                        'product_id': product_id,
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Delete Success!',
                            text: response.status,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    }
                });

                $.ajax({
                    url: "cart/data",
                    success: function(data) {
                        var carts = data.carts;
                        var list = $("#cart-list");
                        var cartList = $("#cartBody");
                        var cartTotal = $("#subtitle");
                        var cartCount = $("#cartCount");
                        var cartDisplayTotal = $('#cartDisplayTotal')
                        var cartDisplaySubTotal = $('#cartDisplaySubTotal')

                        list.empty();
                        cartList.empty();
                        cartCount.empty();
                        cartTotal.empty();
                        cartDisplayTotal.empty(); // remove previous content
                        cartDisplaySubTotal.empty();

                        var c = carts.reduce(function(sum, cart) {
                            return sum + cart.quantity;
                        }, 0);
                        cartCount.append(c);

                        var t = carts.reduce(function(sum, cart) {
                            return sum + cart.total_price;
                        }, 0);
                        cartTotal.append(t);
                        cartDisplayTotal.append(t);
                        cartDisplaySubTotal.append(t);

                        // Update the cart data in the HTML
                        $.each(carts, function(index, cart) {
                            $.ajax({
                                url: "products/" + cart.product_id,
                                success: function(productData) {
                                    var product = productData.product;
                                    var item = "<li class='list_content'>" +
                                        "<div>" +
                                        "<img class='float-start mt10' src='" + product
                                        .image_one + "' style='height:75px'>" +
                                        "<p>" + product.name.substr(0, 35) + "...</p>" +
                                        "<div class='cart_btn home_page_sidebar mt10'>" +
                                        "<div class='quantity-block home_page_sidebar'>" +
                                        "<button class='quantity-arrow-minus home_page_sidebar'><img src={{ asset('home/images/icons/minus.svg') }}></button>" +
                                        "<input class='quantity-num home_page_sidebar' type='number' value='" +
                                        cart.quantity + "'>" +
                                        "<button class='quantity-arrow-plus home_page_sidebar'> <span class='flaticon-close'></span> </button>" +
                                        "</div>" +
                                        "<span class='home_page_sidebar price'>" +
                                        cart.total_price + " TK</span>" +
                                        "</div>" +
                                        "<span class='close_icon'><i class='flaticon-close'></i></span>" +
                                        "</div>" +
                                        "</li>";
                                    list.append(item);
                                    var itemTwo = `<tr><th scope="row">
                                    <ul class="cart_list d-block d-xl-flex">
                                    <li class="ps-1 ps-sm-4 pe-1 pe-sm-4">
                                    <a href="#"><img src="` + product.image_one + `" alt="cart1.png" style="height:60px"></a></li>
                                    <li class="ms-2 ms-md-3"><a class="cart_title" href="#">
                                    <span class="fz16">` + product.name.substr(0, 35) + `</span><br>
                                    <span class="fz14"><span class="fw500">Actual Color:</span>
                                    Silver</span></a></li></ul></th><td>` + cart.price + ` TK</td><td>
                                    <div class="cart_btn"><div class="quantity-block">
                                    <button class="quantity-arrow-minus inner_page">
                                    <span class="fa fa-minus"></span></button>
                                    <input class="quantity-num inner_page" type="number" value="` + cart.quantity + `">
                                    <button class="quantity-arrow-plus inner_page">
                                    <span class="fas fa-plus"></span></button></div></div></td>
                                    <td class=""> ` + cart.total_price + ` TK</td><td class="">
                                    <button type="button" class="removeCart" data-product-id="` + cart.id + `" style="background-color: transparent;border:none;outline:none">
                                    <span class="flaticon-close"></span></button></td></tr>`;
                                    cartList.append(itemTwo);
                                }
                            });
                        })
                    }
                });

            })
        </script>
    @endpush
@endsection
