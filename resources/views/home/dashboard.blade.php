@extends('home.layout.master')
@section('content')
    @push('styles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Account</title>
    @endpush
    <section class="our-dashbord dashbord">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-md">
                    <div class="users_account_details extra-dashboard-menu">
                        <div class="account_details_user d-flex pb10 bb1 mb10">
                            <img class="me-3" src="{{ asset('home/images/team/ad-thumb.png') }}" alt="">
                            <div class="content_details text-start">
                                <h5 class="title" id="title_name">{{ Auth::user()->name }}</h5>
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
                            <div class="account_user_deails pl40 pl0-md">
                                <h2 class="title mb30">Account Details</h2>
                                <div class="ui_kit_tab style2">
                                    <!-- nav tab Nav List Start -->
                                    <ul class="nav nav-tabs mb15" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="t20-tab" data-bs-toggle="tab"
                                                data-bs-target="#t20" type="button" role="tab" aria-controls="t20"
                                                aria-selected="true">Profile ??nformation</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="furniture-tab" data-bs-toggle="tab"
                                                data-bs-target="#furniture" type="button" role="tab"
                                                aria-controls="furniture" aria-selected="false">Permissions</button>
                                        </li>
                                    </ul>
                                    <!-- nav tab Nav List End -->
                                    <!-- nav tab contents Start -->
                                    <div class="tab-content pt20 row" id="myTabContent">
                                        <div class="tab-pane fade show active col-lg-12" id="t20" role="tabpanel"
                                            aria-labelledby="t20-tab">
                                            <div class="account_details_page form_grid">
                                                <form class="contact_form" novalidate="" id="userUpdate">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-4">
                                                                <label class="form-label"> Name</label>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Your Name" name="name" id="update_name" value="{{Auth::user()->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-4">
                                                                <label class="form-label">New password</label>
                                                                <input class="form-control" type="password"
                                                                    placeholder="Your Password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-4">
                                                                <label class="form-label">New password</label>
                                                                <input class="form-control" type="password"
                                                                    placeholder="Your Password" name="confirm_password">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group d-flex mb0">
                                                                <button type="button" class="btn btn-thm me-3"
                                                                    id="update">Update</button>
                                                                <button type="button"
                                                                    class="btn btn-white">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade col-xl-8" id="furniture" role="tabpanel"
                                            aria-labelledby="furniture-tab">
                                            <div class="account_details_page mb20 d-flex justify-content-between bb1">
                                                <div class="second_step_setup pb10">
                                                    <h5 class="title">SMS</h5>
                                                    <p>Messages to be sent by zenmart to your mobile phone via SMS method
                                                    </p>
                                                </div>
                                                <div class="switch shortcode_widget_switch">
                                                    <div class="ui_kit_whitchbox">
                                                        <div class="form-check form-switch mb10">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDefault"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account_details_page mb20 d-flex justify-content-between bb1">
                                                <div class="second_step_setup pb10">
                                                    <h5 class="title">Email</h5>
                                                    <p>Messages to be sent by zenmart to your mobile phone via Email method
                                                    </p>
                                                </div>
                                                <div class="switch shortcode_widget_switch">
                                                    <div class="ui_kit_whitchbox">
                                                        <div class="form-check form-switch mb10">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault2" checked="">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDefault2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account_details_page d-flex justify-content-between bb1">
                                                <div class="second_step_setup pb10">
                                                    <h5 class="title">Phone Call</h5>
                                                    <p>Messages to be sent by zenmart to your mobile phone via Phone Call
                                                        method</p>
                                                </div>
                                                <div class="switch shortcode_widget_switch">
                                                    <div class="ui_kit_whitchbox">
                                                        <div class="form-check form-switch mb10">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckDefault3">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDefault3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nav tab contents End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#update').click(function(e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('update-user') }}",
                        method: 'POST',
                        data: $('#userUpdate').serialize(),
                        success: function(data) {
                            var name = data['data']['name'];
                            $('#userUpdate')[0].reset();
                            $("#update_name").val(name);
                            $("#title_name").text(name)
                            Swal.fire({
                                title: 'Success!',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        },
                        error: function(error) {
                            console.error(error);
                            // Handle the error response
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
