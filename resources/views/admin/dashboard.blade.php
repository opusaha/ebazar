@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
        <title>Zeomart :: Admin Account</title>
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
                            <div class="subtitle1">Total Earnings</div>
                            <div class="title">$859.25k <span class="badge style1 text-center"><img class="pr5"
                                        src="{{ asset('home/images/resource/chart-up.png') }}" alt="chart-up">2.2%</span>
                            </div>
                            <div class="subtitle2"><span>$50</span> New Sales</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-money-bag"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Order</div>
                            <div class="title">66,894</div>
                            <div class="subtitle2"><span>40+</span> New Order</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-sent"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">Customer</div>
                            <div class="title">583.35M</div>
                            <div class="subtitle2"><span>90+</span> New Customer</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-customer"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="d-flex justify-content-between statistics_funfact">
                        <div class="details">
                            <div class="subtitle1">My Balance</div>
                            <div class="title">$365.89k <span class="badge style2 text-center"><img class="pr5"
                                        src="{{ asset('home/images/resource/chart-down.png') }}" alt="chart-up">2.2%</span>
                            </div>
                            <div class="subtitle2"><span>290</span> Balance</div>
                        </div>
                        <div class="icon text-center mt-4"><i class="flaticon-wallet"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="application_statics mb30">
                        <div class="report_widget d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <h4 class="title pl30">Earning Statistics</h4>
                            <ul class="mb0 ml30-520">
                                <li class="list-inline-item report_export mb15-520"><a href="#">Export Report</a></li>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>This Year</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <canvas id="myChartweave" style="height:230px;"></canvas>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="circle_chart_box">
                        <h4 class="title mb30">Earning</h4>
                        <canvas id="myChart" style="height:230px;">$56,033</canvas>
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
                                            <th scope="col">Date</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style1">Delivered</span></td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style2">Cancel</span></td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style3">In Progress</span>
                                            </td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style1">Delivered</span></td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style2">Cancel</span></td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#1923</th>
                                            <td>Lenovo IdeaPad 3 15.6" Laptop - Sand</td>
                                            <td>Aug 15, 2020</td>
                                            <td>Paid</td>
                                            <td class="status"><span class="style3">In Progress</span>
                                            </td>
                                            <td>$56.00</td>
                                            <td class="action"><span class="details">...</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="recent_activity_widget">
                        <h4 class="title mb25">Recent Activity</h4>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">08:42</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10"><span class="title">Purchase by Ali
                                        Price</span> <br> <span class="subtitle">Product noise evolve
                                        smartwatch</span></div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">10:00</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge color2">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10">
                                    <span class="title">Added new style collection</span><br>
                                    <span class="subtitle mb10">By TFN Technologies</span>
                                    <ul class="ra-img mb0 mt10">
                                        <li class="list-inline-item"><img
                                                src="{{ asset('home/images/resource/raimg1.png') }}" alt=""></li>
                                        <li class="list-inline-item"><img
                                                src="{{ asset('home/images/resource/raimg2.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">14:37</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge color3">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10">
                                    <span class="title">Make deposit <span class="text-thm1 fw500">USD
                                            700</span> to TFN</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge color4">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10"><span class="title">Natasha Carey have
                                        liked the products</span> <br> <span class="subtitle">Allow users
                                        to like products in your WooCommerce store.</span></div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item pb10">
                                <!--begin::Label-->
                                <div class="child-timeline-label">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge color5">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10"><span class="title">Favoried Product</span>
                                    <br> <span class="subtitle">Esther James have favorited product.</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <div class="dashboard-timeline-label">
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="child-timeline-label">23:07</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge color6">
                                    <i class="fa fa-genderless"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="ra_pcontent pl10"><span class="title">Today offers by
                                        Digitech Galaxy</span> <br> <span class="subtitle">Offer is valid
                                        on orders of Rs.500 Or above for selected products only.</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
    @push('adminScripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Pie chart
                new Chart(document.getElementById("chartjs-dashboard-pie"), {
                    type: "pie",
                    data: {
                        labels: ["Direct", "Affiliate", "E-mail", "Other"],
                        datasets: [{
                            data: [2602, 1253, 541, 1465],
                            backgroundColor: [
                                window.theme.primary,
                                window.theme.warning,
                                window.theme.danger,
                                "#E8EAED"
                            ],
                            borderWidth: 5,
                            borderColor: window.theme.white
                        }]
                    },
                    options: {
                        responsive: !window.MSInputMethodContext,
                        maintainAspectRatio: false,
                        cutoutPercentage: 70,
                        legend: {
                            display: false
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection
