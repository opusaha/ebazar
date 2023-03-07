@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        @php $settings = \App\Models\WebsiteSettings::first(); @endphp
        <title>{{ $settings->name }} :: Admin Dashboard</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Dashboard</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Total Sales</div>
                            <div class="title">${{ $orders->sum('total_price') }}
                                {{-- <span class="badge style1 text-center"><img class="pr5"
                                        src="{{ asset('home/images/resource/chart-up.png') }}" alt="chart-up">2.2%</span> --}}
                            </div>
                            <div class="subtitle2"><span>${{ $totalOrderValue }}</span> New Sales</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-money-bag"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Order</div>
                            <div class="title">{{ count($orderDetails) }}</div>
                            <div class="subtitle2"><span>{{ count($newOrders) }}+</span> New Order</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-sent"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Customer</div>
                            <div class="title">{{ count($users) }}</div>
                            <div class="subtitle2"><span>{{ count($newUsers) }}+</span> New Customer</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-customer"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Total Sellers</div>
                            <div class="title">{{ count($sellers) }}
                                {{-- <span class="badge style2 text-center"><img class="pr5"
                                        src="{{ asset('home/images/resource/chart-down.png') }}" alt="chart-up">2.2%</span> --}}
                            </div>
                            <div class="subtitle2"><span>{{ count($newSellers) }}</span> New Seller's</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="fa-light fa-person-carry-box"></i></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="application_statics">
                        <h4 class="title pl30 mb30">Recent Orders</h4>
                        <div class="account_user_deails dashboard_page">
                            <div class="order_table table-responsive">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date & Time</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showOrders as $list)
                                            @php $product = \App\Models\Product::find($list->product_id); @endphp
                                            <tr>
                                                <th scope="row">#{{ $list->order_id }}</th>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $list->created_at }}</td>
                                                <td>
                                                    @if ($list->payment_id == 0)
                                                        COD
                                                    @else
                                                        @php  $payment = \App\Models\Payment::find($list->payment_id);  @endphp
                                                        @isset($payment)
                                                            {{ $payment->payment_method }}
                                                        @endisset
                                                    @endif
                                                </td>
                                                <td class="status">
                                                    @if ($list->status == 'Orderd')
                                                        <span class="style3">{{ $list->status }}</span>
                                                    @elseif ($list->status == 'Shipped')
                                                        <span class="style1">{{ $list->status }}</span>
                                                    @elseif ($list->status == 'Deliverd')
                                                        <span class="style4">{{ $list->status }}</span>
                                                    @else
                                                        <span class="style2">{{ $list->status }}</span>
                                                    @endif

                                                </td>
                                                <td>${{ $list->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    @php
                        $latestOrder = \App\Models\Order::latest()->first();
                        $latestUser = \App\Models\User::latest()->first();
                        $latestProduct = \App\Models\Product::latest()->first();
                        $latestSeller = \App\Models\Seller::latest()->first();
                        $latestQuestion = \App\Models\Question::latest()->first();
                        $records = [$latestOrder, $latestUser, $latestProduct, $latestSeller, $latestQuestion];
                        $sortedRecords = collect($records)->sortBy('created_at');
                    @endphp

                    @foreach ($sortedRecords as $record)
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">{{ $record->created_at->format('H:i') }}</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10">
                                    @if ($record instanceof \App\Models\Order)
                                        <span class="title">A product purchase by @php
                                            $user = \App\Models\User::find($record->user_id);
                                        @endphp {{ $user->name }} <br> At price</span>
                                        <span class="subtitle">{{ $record->total_price }}</span>
                                    @elseif ($record instanceof \App\Models\User)
                                        <span class="title">New user registered: {{ $record->name }}</span>
                                    @elseif ($record instanceof \App\Models\Product)
                                        <span class="title">New product added: {{ $record->name }}</span>
                                    @elseif ($record instanceof \App\Models\Seller)
                                        <span class="title">New seller registered: {{ $record->name }}</span>
                                    @elseif ($record instanceof \App\Models\Question)
                                        <span class="title">New Question: {{ $record->question }} <br> Asked By: @php
                                            $user = \App\Models\User::find($record->seller_id);
                                        @endphp
                                            {{$user->name}}
                                        </span>
                                    @endif
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
    @push('adminScripts')
        
    @endpush
@endsection
