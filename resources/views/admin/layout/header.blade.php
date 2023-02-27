<header class="dashboard_header">
    <div class="header__container pt20 pb20 pl30 pr30">
        <div class="row justify-between items-center">
            <div class="col-sm-4 col-xl-2">
                <div class="text-center text-lg-start d-flex mb15-520">
                    <div class="fz20 me-4">
                        <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><i
                                class="fa-sharp fa-solid fa-bars-staggered"></i></a>
                    </div>
                    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
                    <div class="dashboard_header_logo">
                        <a href="{{ route('admin.dashboard') }}" class="logo">{{$settings->name}}<span
                                class="text-thm">.</span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xl-3 d-none d-md-block">
                <div class="header_search_widget mb15-520">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search"
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn" type="button"><span class="fa fa-search"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xl-6 offset-xl-1 d-none d-md-block">
                <div class="text-center text-lg-end header_right_widgets">
                    <ul class="mb0 d-flex justify-content-center justify-content-sm-end">
                        <li class=""><a class="text-center" href="page-login.html"><span
                                    class="flaticon-exit"></span></a></li>
                        <li class=""><a class="text-center" href="#"><span
                                    class="flaticon-mail-inbox-app"></span></a></li>
                        <li class=""><a class="text-center" href="#"><span
                                    class="flaticon-notification"></span></a></li>
                        <li class=" user_setting">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    <img src="{{ asset('home/images/resource/user.png') }}" alt="user.png">
                                </a>
                                <div class="dropdown-menu">
                                    <div class="user_setting_content">
                                        <a class="dropdown-item active" href="{{ route('admin.dashboard') }}"><i
                                                class="flaticon-house mr10"></i>Dashboard</a>
                                        <a class="dropdown-item" href="{{route('admin.category.index')}}"><i
                                                class="flaticon-checked-box mr10"></i>Category</a>
                                        <a class="dropdown-item" href="{{route('admin.order')}}"><i
                                                class="flaticon-checked-box mr10"></i>Order</a>
                                        {{-- <a class="dropdown-item" href=""><i
                                                class="flaticon-mail-inbox-app mr10"></i>Message</a> --}}
                                        <a class="dropdown-item" href=""><i
                                                class="flaticon-settings mr10"></i>Settings</a>
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                                class="flaticon-exit mr10"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
