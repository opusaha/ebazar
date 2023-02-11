@extends('home.layout.master')
@section('content')
    @push('styles')
        <title>Zeomart :: Orders</title>
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
                                <h2 class="title mb30">Order</h2>
                                <div class="order_table table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Invoice ID</th>
                                                {{-- <th scope="col">Product</th> --}}
                                                <th scope="col">Date</th>
                                                <th scope="col">Payment</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total</th>
                                                {{-- <th scope="col">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            <tr>
                                                <th scope="row">#{{$order->order_number}}</th>
                                                {{-- <td>Product Name</td> --}}
                                                <td>{{$order->created_at}}</td>
                                                <td>COD</td>
                                                <td class="status"><span class="@if($order->status=='Delivered') style1
                                                    @elseif ($order->status=='Cancel')
                                                    style2
                                                    @else
                                                    style3
                                                    @endif">{{$order->status}}</span></td>
                                                <td>{{$order->total_price}}</td>
                                                {{-- <td class="action"><span class="details">...</span></td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
