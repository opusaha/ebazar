@extends('home.layout.master')
@section('content')
    @push('styles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Checkout</title>
    @endpush
    <section class="shop-checkouts pt30">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 m-auto">
                    <div class="main-title text-center mb50">
                        <h2 class="title">Checkout</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="checkout_form style2">
                        <h4 class="title mb20">Billing details</h4>
                        <div class="checkout_coupon ui_kit_button">
                            <form class="form2" id="coupon_form" action="{{ route('place.order') }}" method="post">@csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Name *</label>
                                            <input class="form-control form_control" type="text" placeholder="Ali" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Country / Region *</label>
                                            <div class="checkout_country_form actegory">
                                                <div class="dropdown bootstrap-select show-tick"><select
                                                        class="selectpicker show-tick" tabindex="null" name="country">
                                                        <option selected>Bangladesh</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Address *</label>
                                            <input class="form-control form_control" type="text" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Street address *</label>
                                            <input class="form-control form_control" type="text" name="state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Town / City *</label>
                                            <input class="form-control form_control" type="text" name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">ZIP *</label>
                                            <input class="form-control form_control" type="text" name="zip">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone *</label>
                                            <input class="form-control form_control" type="number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Your Email</label>
                                            <input class="form-control form_control email" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb0">
                                            <label class="ai_title">Order notes (optional)</label>
                                            <textarea name="form_message" class="form-control" rows="12" placeholder="">Order Notes</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="order_sidebar_widget checkout_page mb30 mb30">
                        <h4 class="title">Your Order</h4>
                        <ul>
                            @foreach ($carts as $cart)
                                @php
                                    $product = \App\Models\Product::find($cart->product_id);
                                @endphp
                                <li class="pb0">
                                    <p class="product_name_qnt">{{ $product->name }} x {{ $cart->quantity }} </p><span
                                        class="price">{{ $cart->total_price }} TK</span>
                                </li>
                            @endforeach
                            <li class="subtitle">
                                <p>Sub Total <span
                                        class="float-end totals">{{ number_format($carts->sum('total_price'), 2) }}
                                        TK</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Shipping <span class="float-end totals">Free</span></p>
                            </li>
                            <li class="subtitle">
                                <p>Total <span class="float-end totals">{{ number_format($carts->sum('total_price'), 2) }}
                                        TK</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="order_sidebar_widget checkout_page mb30 mb30">
                        <div class="payment_method">
                            <div class="ui_kit_radiobox pm_content bb1">
                                <div class="radio mb10">
                                    <input id="radio_one" name="radio" type="radio" checked="">
                                    <label class="pmtitle" for="radio_one"><span class="radio-label"></span> Direct bank
                                        transfer</label>
                                </div>
                                <div class="pm_details">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared in
                                        our account.</p>
                                </div>
                            </div>
                            <div class="ui_kit_radiobox pm_content bb1">
                                <div class="radio mb10">
                                    <input id="radio_one2" name="radio" type="radio">
                                    <label class="pmtitle" for="radio_one2"><span class="radio-label"></span> Check
                                        Payment</label>
                                </div>
                            </div>
                            <div class="ui_kit_radiobox pm_content">
                                <div class="radio mb10">
                                    <input id="radio_one3" name="radio" type="radio">
                                    <label class="pmtitle" for="radio_one3"><span class="radio-label"></span> Cash on
                                        Delivery</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui_kit_checkbox checkout_pm">
                        <label class="custom_checkbox">Your personal data will be used to process your order, support your
                            experience throughout this website, and for other purposes described in our privacy policy.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="ui_kit_button payment_widget_btn">
                        <button type="button" id="formSubmit" class="btn btn-thm btn-block mb0">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $("#formSubmit").click(function() {
                $("#coupon_form").submit();
            });
        </script>
    @endpush
@endsection
