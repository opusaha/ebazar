<div class="dashboard__sidebar">
    <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
            <a href="{{ route('admin.dashboard') }}" class="items-center {{ Route::currentRouteName() == 'admin.dashboard' ? '-is-active' : '' }}"><i
                    class="flaticon-house mr15"></i>Dashboard</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.order')}}" class="items-center {{ Route::currentRouteName() == 'admin.order' ? '-is-active' : '' }}"><i class="flaticon-checked-box mr15"></i>Order</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.seller')}}" class="items-center {{ Route::currentRouteName() == 'admin.seller' ? '-is-active' : '' }}"><i class="fa-light fa-person-carry-box mr15"></i>All Seller</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.category.index')}}" class="items-center {{ Route::currentRouteName() == 'admin.category.index' ? '-is-active' : '' }}"><i class="flaticon-checked-box mr15"></i>Category</a>
        </div>
        {{-- <div class="sidebar_list_item ">
            <a href="" class="items-center"><i class="flaticon-mail-inbox-app mr15"></i>Message</a>
        </div> --}}
        <div class="sidebar_list_item ">
            <a href="{{route('admin.banner.index')}}" class="items-center {{ Route::currentRouteName() == 'admin.banner.index' ? '-is-active' : '' }}"><i class="fa-thin fa-scanner-touchscreen mr15"></i>Banner</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.sponsor.index')}}" class="items-center {{ Route::currentRouteName() == 'admin.sponsor.index' ? '-is-active' : '' }}"><i class="fa-light fa-handshake mr15"></i>Sponsor</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="" class="items-center"><i
                    class="flaticon-settings mr15"></i>Settings</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.webSection')}}" class="items-center {{ Route::currentRouteName() == 'admin.webSection' ? '-is-active' : '' }}"><i class="fa-light fa-grid-2 mr15"></i>Website Product Section</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.webSettings.index')}}" class="items-center {{ Route::currentRouteName() == 'admin.webSettings.index' ? '-is-active' : '' }}"><i class="fa-light fa-gears mr15"></i>Website Settings</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.carousel.index')}}" class="items-center {{ Route::currentRouteName() == 'admin.carousel.index' ? '-is-active' : '' }}"><i class="fa-light fa-conveyor-belt-boxes mr15"></i>Carousel</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.faqcat')}}" class="items-center {{ Route::currentRouteName() == 'admin.faqcat' ? '-is-active' : '' }}"><i class="fa-light fa-conveyor-belt-boxes mr15"></i>FAQ Categories</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{route('admin.help')}}" class="items-center {{ Route::currentRouteName() == 'admin.help' ? '-is-active' : '' }}"><i class="fa-light fa-conveyor-belt-boxes mr15"></i>FAQ List</a>
        </div>
        <div class="sidebar_list_item ">
            <a href="{{ route('admin.logout') }}" class="items-center"><i class="flaticon-exit mr15"></i>Logout</a>
        </div>
    </div>
</div>
