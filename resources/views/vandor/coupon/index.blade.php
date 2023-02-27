@extends('vandor.layout.master')
@section('content')
    @push('vandorStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Seller's Coupon</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Coupon's</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520">
                                    <a href="{{ route('seller.coupon.create') }}" class="btn btn-gray">New coupon</a>
                                </div>
                            </div>
                        </div>
                        <div class="coupon_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Minimum Purchase Amount</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Max Uses</th>
                                        <th scope="col">Uses</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $key => $coupon)
                                        <tr>
                                            <td scope="row">#{{ $key + 1 }}</td>
                                            <td>{{$coupon->code}}</td>
                                            <td>{{ $coupon->discount }}</td>
                                            <td>{{ $coupon->minimum_purchase_amount }}</td>
                                            <td>{{ $coupon->expiry_date }}</td>
                                            <td>{{ $coupon->max_uses }}</td>
                                            <td>{{ $coupon->uses }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    {{-- <li class="list-inline-item mb-1">
                                                        <a href="{{ route('seller.coupon.edit', $coupon->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li> --}}
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('seller.coupon.delete', $coupon->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Delete" aria-label="Edit"><span
                                                                class="flaticon-delete"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('vandor.layout.footer')
    </div>
@endsection
