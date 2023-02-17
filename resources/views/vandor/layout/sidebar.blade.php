<div class="dashboard__sidebar">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="{{ route('seller.dashboard') }}" class="items-center -is-active"><i
                    class="flaticon-house mr15"></i>Dashboard</a>
        </div>
        @if (Auth::guard('seller')->user()->status == 'Approved')
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.product.index') }}" class="items-center"><i
                        class="flaticon-cash-on-delivery mr15"></i>Products</a>
            </div>
            <div class="sidebar_list_item ">
                <a href="{{ route('seller.order') }}" class="items-center"><i
                        class="flaticon-checked-box mr15"></i>Order</a>
            </div>
            <div class="sidebar_list_item ">
                <a href="" class="items-center"><i class="flaticon-mail-inbox-app mr15"></i>Message</a>
            </div>
        @endif
        <div class="sidebar_list_item ">
            <a href="{{ route('seller.settings') }}" class="items-center"><i
                    class="flaticon-settings mr15"></i>Settings</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{ route('seller.logout') }}" class="items-center"><i class="flaticon-exit mr15"></i>Logout</a>
        </div>
    </div>
</div>
