@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
        <title>Zeomart :: Seller Order's</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Orders</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-sm-6 col-lg-4">
                                <div class="dashboard_page header_search_widget mb30 mb15-520">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search order"
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="dashboard_page sidebar_location_filter mb30 mb5-520">
                                    <div class="form-group">
                                        <div class="checkout_country_form">
                                            <div class="dropdown bootstrap-select show-tick"><select
                                                    class="selectpicker show-tick">
                                                    <option>Status</option>
                                                    <option value="Delivered">Delivered</option>
                                                    <option value="Cancel">Cancel</option>
                                                    <option value="InProgress">In Progress</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                                    aria-expanded="false" title="Status">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Status</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520">
                                    <a href="#" class="btn btn-gray">Export</a>
                                </div>
                            </div>
                        </div>
                        <div class="order_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">#{{ $order->id }}</th>
                                            @php $product = \App\Models\Product::find($order->product_id); @endphp
                                            <td>{{ $product->name }}</td>
                                            <td></td>
                                            <td class="action"><span>{{ $order->created_at }}</span></td>
                                            <td>Paid</td>
                                            <td class="status"><span class="@if ($order->status == 'cancle') style2 @elseif($order->status == 'In Progress') style3
                                                @else style1 @endif">{{ $order->status }}</span>
                                            </td>
                                            <td>{{ $order->price }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('seller.order.edit', $order->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mbp_pagination mt30 text-center">
                            <ul class="page_navigation">
                                <li class="page-item {{ $orders->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $orders->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $orders->onFirstPage() ? 'true' : 'false' }}">
                                        <span class="fas fa-angle-left"></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $orders->lastPage(); $i++)
                                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $orders->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $orders->currentPage() == $orders->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $orders->nextPageUrl() }}">
                                        <span class="fas fa-angle-right"></span>
                                    </a>
                                </li>
                            </ul>

                            <p class="mt20 pagination_page_count text-center">{{ $orders->firstItem() }} – {{ $orders->lastItem() }} of {{ $orders->total() }} properties found</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection
