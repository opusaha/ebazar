@extends('home.layout.master')
@section('content')
    @push('styles')
        <title>Zeomart :: Wishlist</title>
    @endpush
    <section class="our-dashbord dashbord pb80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-md">
                    <div class="users_account_details extra-dashboard-menu">
                        <div class="account_details_user d-flex pb10 bb1 mb10">
                            <img class="me-3" src="{{ asset('home/images/team/ad-thumb.png') }}" alt="">
                            <div class="content_details text-start">
                                <h5 class="title">{{ Auth::user()->name }}</h5>
                                <a class="stitle" href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                            </div>
                        </div>
                        <div class="ed_menu_list">
                            <ul>
                                <li><a class="active" href="{{ route('dashboard') }}"><span
                                            class="flaticon-growth"></span>Account Details</a></li>
                                <li><a href="{{ route('orders') }}"><span class="flaticon-checked-box"></span>Order</a>
                                </li>
                                <li><a href="{{ route('address') }}"><span class="flaticon-location"></span>Address</a>
                                </li>
                                <li><a href="{{ route('wishlist') }}"><span class="flaticon-badge"></span>Wishlist</a>
                                </li>
                                <li><a href="{{ route('invoice') }}"><span class="flaticon-invoice"></span>Invoices</a>
                                </li>
                                <li><a href="{{ route('logout') }}"><span class="flaticon-exit"></span>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard_navigationbar dn db-md mt50">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars pr10"></i>
                                        Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li><a class="active" href="{{ route('dashboard') }}"><span
                                                    class="flaticon-growth"></span>Account Details</a></li>
                                        <li><a href="{{ route('orders') }}"><span
                                                    class="flaticon-checked-box"></span>Order</a></li>
                                        <li><a href="{{ route('address') }}"><span
                                                    class="flaticon-location"></span>Address</a></li>
                                        <li><a href="{{ route('wishlist') }}"><span
                                                    class="flaticon-badge"></span>Wishlist</a></li>
                                        <li><a href="{{ route('invoice') }}"><span
                                                    class="flaticon-invoice"></span>Invoices</a></li>
                                        <li><a href="{{ route('logout') }}"><span class="flaticon-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="account_user_deails pl40 pl0-lg">
                                <h2 class="title mb30">Wishlist</h2>
                                <div class="row">
                                    @foreach ($wishlist as $index => $wish)
                                        <div class="col-sm-6 col-lg-6 col-xl p0">
                                            @php $product= \App\Models\Product::find($wish->product_id); @endphp
                                            <div class="shop_item bdr1 wishlist_style">
                                                <div class="close_list"><span class="flaticon-close"></span></div>
                                                <div class="thumb pb30">
                                                    <img src="{{ $product->image_one }}" alt="Shop Item1" style="height:230px">
                                                </div>
                                                <div class="details">
                                                    <div class="title"><a href="#">{{ substr($product->name, 0, 25) . (strlen($product->name) > 25 ? '...' : '') }}</a></div>
                                                    <div class="review d-flex">
                                                        <ul class="mb0 me-2">
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
                                                        <div class="review_count"><a href="#">3,014 reviews</a></div>
                                                    </div>
                                                    <div class="si_footer">
                                                        <div class="price">{{ $product->price }}
                                                            TK<small><del>{{ $product->old_price }} TK</del></small></div>
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
@endsection
