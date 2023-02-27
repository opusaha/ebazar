@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin FAQ! Categories</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Category</h2>
                        <p class="para">You will get all category in here</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboard_product_list account_user_deails">
                        <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                            <div class="col-sm-6 col-lg-9"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard_page_add_listing text-center text-lg-end mb30 mb15-520 d-grid">
                                    <a href="{{route('admin.faqcat.create')}}" class="btn btn-new btn-lg btn-thm">FAQ Category</a>
                                </div>
                            </div>
                        </div>
                        <div class="order_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $cat)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $cat->name }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.faqcat.edit', $cat->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.faqcat.delete', $cat->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
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
        @include('admin.layout.footer')
    </div>
@endsection
