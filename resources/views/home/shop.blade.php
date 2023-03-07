@extends('home.layout.master')
@section('content')
    @push('styles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: {{$title}}</title>
    @endpush
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item">{{$title}}</li>
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
                        @if (Route::currentRouteName() == 'category' ? '-is-active' : '')
                            <h2 class="title">{{$title}}</h2>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="row">
                    @foreach ($products as $index => $product)
                        <div class="col-sm-6 col-lg-4 col-xl p0 pl15-520">
                            <div class="shop_item bdr1 m--1">
                                <div class="thumb pb30">
                                    <img src="{{ asset($product->image_one) }}" alt="{{ $product->name }}"
                                        style="height:230px">
                                    <div class="thumb_info">
                                        <ul class="mb0">
                                            <li><button type="button" class="btnWishlist"
                                                    data-product-id="{{ $product->id }}"
                                                    style="background-color: transparent;border:none;outline:none"><span
                                                        class="flaticon-heart"></span></button>
                                            </li>
                                            <li><a
                                                    href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}"><span
                                                        class="flaticon-show"></span></a>
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

                                <div class="details">
                                    <div class="sub_title">{{ $product->sku }}</div>
                                    <div class="title"><a
                                            href="{{ route('single.product', [str_replace(' ', '-', $product->name), $product->id]) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="review d-flex">
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
                                        <div class="review_count"><a href="#">{{ count($reviews) }} reviews</a></div>
                                    </div>
                                    <div class="si_footer">
                                        <div class="price">{{ $product->price }}
                                            TK<small><del>{{ $product->old_price }} TK</del></small></div>
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
                                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1"
                                        aria-disabled="{{ $products->onFirstPage() ? 'true' : 'false' }}">
                                        <span class="fas fa-angle-left"></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                        <span class="fas fa-angle-right"></span>
                                    </a>
                                </li>
                            </ul>
                            <p class="mt20 pagination_page_count text-center">{{ $products->firstItem() }} –
                                {{ $products->lastItem() }} of {{ $products->total() }} products</p>
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
