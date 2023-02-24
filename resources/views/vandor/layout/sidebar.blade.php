<div class="dashboard__sidebar">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="{{ route('seller.dashboard') }}"
                class="items-center {{ Route::currentRouteName() == 'seller.dashboard' ? '-is-active' : '' }}"><i
                    class="flaticon-house mr15"></i>Dashboard</a>
        </div>
        @if (Auth::guard('seller')->user()->status == 'approved')
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.product.index') }}"
                    class="items-center {{ Route::currentRouteName() == 'seller.product.index' ? '-is-active' : '' }}"><i
                        class="flaticon-cash-on-delivery mr15"></i>Products</a>
            </div>
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.special.product') }}"
                    class="items-center {{ Route::currentRouteName() == 'seller.special.product' ? '-is-active' : '' }}"><i
                        class="fa-light fa-sparkles mr15"></i>Special product</a>
            </div>
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.order') }}"
                    class="items-center {{ Route::currentRouteName() == 'seller.order' ? '-is-active' : '' }}"><i
                        class="flaticon-checked-box mr15"></i>Order</a>
            </div>
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.coupon.index') }}"
                    class="items-center {{ Route::currentRouteName() == 'seller.coupon.index' ? '-is-active' : '' }}"><i
                        class="fa-light fa-tags mr15"></i>Coupon</a>
            </div>
            {{-- <div class="sidebar_list_item ">
                <a href="" class="items-center"><i class="flaticon-mail-inbox-app mr15"></i>Message</a>
            </div> --}}
        @endif
        <div class="sidebar_list_item ">
            <a href="{{ route('seller.settings') }}"
                class="items-center {{ Route::currentRouteName() == 'seller.settings' ? '-is-active' : '' }}"><i
                    class="flaticon-settings mr15"></i>Settings</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{ route('seller.logout') }}" class="items-center"><i class="flaticon-exit mr15"></i>Logout</a>
        </div>
    </div>
</div>
