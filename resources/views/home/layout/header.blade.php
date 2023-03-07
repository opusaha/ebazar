<div class=preloader></div>
@if (Auth::check())
    @php
        $carts = \App\Models\Cart::where('user_id', Auth::id())->get();
        $categories = \App\Models\Category::where('parent_id', null)->get();
    @endphp
@endif
@php $settings = \App\Models\WebsiteSettings::first(); @endphp
<div class="header_middle pt20 pb20 dn-992">
    <div class=container>
        <div class=row>
            <div class="col-lg-2 col-xxl-2">
                <div class=header_top_logo_home1>
                    <div class=logo>
                        @isset($settings)
                            {{ $settings->name }}
                        @endisset
                        <span class=text-thm>.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6">
                <div class=header_middle_advnc_search>
                    <div class=search_form_wrapper>
                        <div class=row>
                            <div class="col-auto pr0">
                                <div class=actegory>
                                    <select class=selectpicker id="searchCat">
                                        <option>All Category</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto p0">
                                <div class=top-search>
                                    <form action="{{ route('search.product') }}" class="form-search" accept-charset="utf-8"
                                        id="searchform" method="POST">@csrf
                                        <div class="box-search pre_line">
                                            <input type="hidden" name="cat_id" id="searchCatId">
                                            <input class="form_control" name="search" placeholder="Search products…"
                                                required>
                                        </div>
                                    </form>
                                    @push('scripts')
                                        <script>
                                            $(document).ready(function() {
                                                $('#searchCat').change(function() {
                                                    var selectedOptionValue = $(this).val();
                                                    $('#searchCatId').val(selectedOptionValue);
                                                });

                                                $('#searchSubmit').click(function() {
                                                    $('#searchform').submit();
                                                });
                                                $('#mobileSearchButton').click(function() {
                                                    $('#mobileSearchProduct').submit();
                                                });
                                            });
                                        </script>
                                    @endpush
                                </div>
                            </div>
                            <div class="col-auto p0">
                                <div class=advscrh_frm_btn>
                                    <button type="button" class="btn search-btn" id="searchSubmit"><span
                                            class=flaticon-search></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-4 pr0-lg">
                <div class="hm_log_fav_cart_widget justify-content-center">
                    <div class=wrapper>
                        <ul class=mb0>
                            <li class=list-inline-item>
                                <a class=header_top_iconbox href="{{ route('wishlist') }}">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-heart></span></div>
                                        <div class=details>
                                            <p class=subtitle>Wishlist</p>
                                            <h5 class=title>My Items</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=list-inline-item>
                                <a class="header_top_iconbox @if (!Auth::check()) signin-filter-btn @endif"
                                    href=#>
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-profile></span></div>
                                        <div class=details>
                                            @if (!Auth::check())
                                                <p class="subtitle">Sign In</p>
                                                <h5 class=title>Account</h5>
                                            @else
                                                <p class="subtitle"><a href="{{ route('logout') }}"
                                                        style="color:white">Logout</a></p>
                                                <h5 class=title><a href="{{ route('dashboard') }}"
                                                        style="color:white">Account</a></h5>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @if (Auth::check())
                                <li class=list-inline-item>
                                    <a class="header_top_iconbox" href="{{ route('cart') }}">
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span><img
                                                        src={{ asset('home/images/icons/flaticon-shopping-cart-white.svg') }}
                                                        alt=""></span><span class=badge>
                                                    <span id="cartCount">{{ $carts->sum('quantity') }}</span>
                                                </span></div>
                                            <div class=details>
                                                <p class="subtitle" id="subtitle">
                                                    {{ $carts->sum('total_price') }}
                                                </p>
                                                <h5 class=title>Total</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-nav menu_style_home_one main-menu">
    <nav class=posr>
        <div class="container posr menu_bdrt1">
            <div class=menu-toggle>
                <button type=button id=menu-btn>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                </button>
            </div>
            {{-- <div class="posr logo1 home1_style">
                <div id=mega-menu>
                    <a class=btn-mega href=#>
                        <img class=me-2 src={{ asset('home/images/desktop-nav-menu-white.svg') }}
                            alt="Desktop Menu Icon">
                        <span class="fw500 fz16 color-white vam">Browse Categories</span>
                    </a>
                    <ul class=menu>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-diamond"></span>
                                <span class=menu-title>Today’s Hot Deals</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-cooking"></span>
                                <span class=menu-title>Home & Kitchen</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-armchair"></span>
                                <span class=menu-title>Home & Furniture</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-smartphone-1"></span>
                                <span class=menu-title>Electronics</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-bride-dress"></span>
                                <span class=menu-title>Clothing & Accessories</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-heart-beat"></span>
                                <span class=menu-title>Health & Beauty</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-volleyball"></span>
                                <span class=menu-title>Sport & Outdoor</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-groceries"></span>
                                <span class=menu-title>Grocery & Market</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-remote-control"></span>
                                <span class=menu-title>Toy & Video Games</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class=dropdown href=#>
                                <span class="menu-icn flaticon-feeding-bottle"></span>
                                <span class=menu-title>Babies & Moms</span>
                            </a>
                            <div class=drop-menu>
                                <div class=one-third>
                                    <div class=cat-title>Electronics</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All</a></li>
                                    </ul>
                                    <div class=cat-title>TV & Video</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop all TVs</a></li>
                                        <li><a href=#>TVs by Size</a></li>
                                        <li><a href=#>Smart TVs</a></li>
                                        <li><a href=#>Roku TVs</a></li>
                                        <li><a href=#>Streaming</a></li>
                                        <li><a href=#>TV Mounts & Accessories</a></li>
                                        <li><a href=#>DVD & Blu-Ray Players</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Computers</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Computers</a></li>
                                        <li><a href=#>Laptops</a></li>
                                        <li><a href=#>Chromebook</a></li>
                                        <li><a href=#>PC Gaming</a></li>
                                        <li><a href=#>Desktops</a></li>
                                        <li><a href=#>Monitors</a></li>
                                        <li><a href=#>Networking</a></li>
                                        <li><a href=#>Computer Accessories</a></li>
                                        <li><a href=#>Computer Components</a></li>
                                        <li><a href=#>Tax Software</a></li>
                                        <li><a href=#>Computer Software</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Cell Phones</div>
                                    <ul class=mb0>
                                        <li><a href=#>Shop All Cell Phones</a></li>
                                        <li><a href=#>Wireless Deals</a></li>
                                        <li><a href=#>5G Phones</a></li>
                                        <li><a href=#>iPhone</a></li>
                                        <li><a href=#>Galaxy Phones</a></li>
                                        <li><a href=#>Phone Chargers & Power Banks</a></li>
                                        <li><a href=#>Grips & Phone Stands</a></li>
                                        <li><a href=#>Phone Cables</a></li>
                                        <li><a href=#>Car Mounts</a></li>
                                        <li><a href=#>iPhone Accessories</a></li>
                                        <li><a href=#>Cell Phone Accessory Deals</a></li>
                                    </ul>
                                </div>
                                <div class=one-third>
                                    <div class=cat-title>Smart Home</div>
                                    <ul class=mb20>
                                        <li><a href=#>Shop All Smart Home</a></li>
                                        <li><a href=#>Smart Assistants & Hubs</a></li>
                                        <li><a href=#>Smart Security</a></li>
                                        <li><a href=#>Smart Energy & Lighting</a></li>
                                    </ul>
                                    <div class=cat-title>Photo Services</div>
                                    <ul class=mb0>
                                        <li><a href=#>All Photo Services</a></li>
                                        <li><a href=#>Same Day Services</a></li>
                                        <li><a href=#>Photo Cards</a></li>
                                        <li><a href=#>Photo Gifts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <ul id=respMenu class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style=horizontal>
                <li class=visible_list> <a href="{{ route('home') }}"><span class=title>Home</span></a>
                </li>
                <li class=visible_list> <a href=#><span class=title>Blog</span></a>
                </li>
            </ul>
            <ul id=respMenu2 class="ace-responsive-menu widget_menu_home2 wa" data-menu-style=horizontal>
                @if (Route::currentRouteName() == 'home' ? '-is-active' : '')
                    <li class="list-inline-item list_c"><a href="#dealOfTheDay">Deal of the Day</a></li>
                    <li class="list-inline-item list_c"><a href="#importentProduct">Important Products</a></li>
                    <li class="list-inline-item list_c"><a href="#bestSales">Best Sales</a></li>
                    <li class="list-inline-item list_c"><a href="#newArrivalProduct">New Arrivals</a></li>
                @else
                    <li class="list-inline-item list_c">
                        <marquee direction="left" style="color:white; font-size:18px;">The biggest e-commarce of the
                            World.</marquee>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<div class=hiddenbar-body-ovelay></div>
<div class=signin-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Sign-In</h4>
    </div>
    <div class=hsidebar-content>
        <div class="log_reg_form sidebar_area">
            <div class=login_form>
                <form action="{{ route('user.login') }}" method="POST">@csrf
                    <div class="mb-2 mr-sm-2">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" placeholder="user@gmail.com" name="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb5">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="exampleCheck3" name="remember">
                        <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                        <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-thm mt20">Login</button>
                    <p class="text-center mb25 mt10">Don't have an account? <a href="{{ route('register') }}">Create
                            account</a></p>
                    <div class="hr_content">
                        <hr>
                        <span class="hr_top_text">or</span>
                    </div>
                    <ul class="login_with_social text-center mt30 mb0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=signup-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Create Your Account</h4>
    </div>
    <div class=hsidebar-content>
        <div class="log_reg_form sidebar_area">
            <div class=sign_up_form>
                <form action="{{ route('register.store') }}" method="POST">@csrf
                    <div class="form-group">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Ali Tufan" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Your Email</label>
                        <input type="email" class="form-control" placeholder="creativelayers088@gmail.com"
                            name="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb20">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="******************"
                            name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-signup btn-thm">Create Account</button>
                    <p class="text-center mb25 mt10">Already have an account? <a href="{{ route('login') }}">Sign
                            in</a></p>
                    <div class="hr_content">
                        <hr>
                        <span class="hr_top_text">or</span>
                    </div>
                    <ul class="login_with_social text-center mt30 mb0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div id=page class=stylehome1>
    <div class=mobile-menu>
        <div class="header stylehome1">
            <div class=menu_and_widgets>
                <div class="mobile_menu_bar float-start">
                    <a class=menubar href=#menu><span></span></a>
                    <a class=mobile_logo href=#>{{ $settings->name }}<span class=text-thm>.</span></a>
                </div>
                <div class=mobile_menu_widget_icons>
                    <ul class="cart mt15">
                        <li class=list-inline-item>
                            <a class="cart_btn signin-filter-btn" href=#><span
                                    class="icon flaticon-profile"></span></a>
                        </li>
                        <li class=list-inline-item>
                            <a class="cart_btn cart-filter-btn" href=#><span class=icon><img
                                        src={{ asset('home/images/icons/flaticon-shopping-cart-white.svg') }}
                                        alt=""></span><span class="badge bgc-thm">2</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=mobile_menu_search_widget>
                <div class=header_middle_advnc_search>
                    <div class="container search_form_wrapper">
                        <div class=row>
                            <div>
                                <div class="top-search text-start">
                                    <form action="{{ route('search.product') }}" class="form-search"
                                        id="mobileSearchProduct" accept-charset="utf-8" method="POST">@csrf
                                        <div class=box-search>
                                            <input class=form_control name=search placeholder="Search products…">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class=advscrh_frm_btn>
                                    <button type=submit class="btn search-btn" id="mobileSearchButton"><span
                                            class=flaticon-search></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=posr>
                <div class=mobile_menu_close_btn><span class=flaticon-close></span></div>
            </div>
        </div>
    </div>
    <nav id=menu class=stylehome1>
        <ul>
            <li><span>Home</span>
            </li>
            <li><span>Shop</span>
            </li>
            <li><span>Blog</span>
            </li>
            <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">Departments</li>
            <li><span><i class="flaticon-cooking mr20"></i>Category</span>
                <ul>
                    <li><a href=page-shop-list-v1.html>Subcategory</a></li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
@if (session('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
@endif
