@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        <title>Zeomart :: Seller Setting's</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Settings</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard_setting_box">
                        <div class="ui_kit_tab style2">
                            <!-- nav tab Nav List Start -->
                            <ul class="nav nav-tabs mb15" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="editprofile-tab" data-bs-toggle="tab"
                                        data-bs-target="#editprofile" type="button" role="tab"
                                        aria-controls="editprofile" aria-selected="true">Edit Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password" type="button" role="tab" aria-controls="password"
                                        aria-selected="false">Password</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="closeaccount-tab" data-bs-toggle="tab"
                                        data-bs-target="#closeaccount" type="button" role="tab"
                                        aria-controls="closeaccount" aria-selected="false">Close Account</button>
                                </li>
                            </ul>
                            <!-- nav tab Nav List End -->
                            <!-- nav tab contents Start -->
                            <div class="tab-content pt20 row" id="myTabContent">
                                <div class="tab-pane fade col-lg-12 active show" id="editprofile" role="tabpanel"
                                    aria-labelledby="editprofile-tab">
                                    <div class="account_details_page form_grid">
                                        <form class="contact_form" name="contact_form" action="#" method="post"
                                            novalidate="">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex align-items-center bb1 mb30 pb30">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{asset('home/images/resource/avatar.png')}}" alt="avatar">
                                                        </div>
                                                        <div class="flex-grow-1 ms-4 editing_list">
                                                            <h5 class="mb0">Your avatar</h5>
                                                            <p class="fz14 heading-color">PNG or JPG no bigger than 800px
                                                                wide and tall.</p>
                                                            <ul>
                                                                <li class="list-inline-item mb-1">
                                                                    <input type="file" name="logo" >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Shop Name</label>
                                                        <input class="form-control" type="text" placeholder="Your Shop Name" name="shop">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Phone Number</label>
                                                        <input class="form-control" type="number"
                                                            placeholder="Phone Number" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Address:</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Address Line" name="address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Business type:</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Business Type" name="type">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb30">
                                                        <label class="form-label">About us</label>
                                                        <textarea class="form-control" rows="8" name="about_us">Beautiful super large botanical garden - amazing it’s in NYC. Getting into the garden with my voucher was easy and seamless! Just went up to the ticket counter and went right in.</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group d-grid d-sm-flex mb0">
                                                        <button type="button"
                                                            class="style2 btn btn-thm me-3 mb15-520">Update
                                                            Profile</button>
                                                        <button type="button"
                                                            class="style2 btn btn-white">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade col-xl-6" id="password" role="tabpanel"
                                    aria-labelledby="password-tab">
                                    <div class="account_details_page form_grid">
                                        <form class="contact_form" name="contact_form" action="#" method="post"
                                            novalidate="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Current password</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Your Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">New password</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Your Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb30">
                                                        <label class="form-label">Confirm New Password</label>
                                                        <input class="form-control email" type="email"
                                                            placeholder="Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group d-grid d-sm-flex mb0">
                                                        <button type="button"
                                                            class="style2 btn btn-thm me-3 mb15-520">Update
                                                            Password</button>
                                                        <button type="button"
                                                            class="style2 btn btn-white">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade col-xl-8" id="closeaccount" role="tabpanel"
                                    aria-labelledby="closeaccount-tab">
                                    <div class="account_details_page form_grid">
                                        <form class="contact_form" name="contact_form" action="#" method="post"
                                            novalidate="">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h5>Close account</h5>
                                                    <p class="fz15 heading-color">Warning: If you close your account, you
                                                        will be unsubscribed from all your 5 courses, and will lose access
                                                        forever.</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group mb30">
                                                        <label class="form-label">Enter Password</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group d-grid d-sm-flex mb0">
                                                        <button type="button"
                                                            class="style2 btn btn-thm me-3 mb15-520">Close Account</button>
                                                        <button type="button"
                                                            class="style2 btn btn-white">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- nav tab contents End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection