@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Page</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Page List</h2>
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
                                    <a href="{{route('admin.page.create')}}" class="btn btn-new btn-lg btn-thm">New Page</a>
                                </div>
                            </div>
                        </div>
                        <div class="order_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $list)
                                        <tr>
                                            <td>{{ $list->title }}</td>
                                            <td>{{ $list->details }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.page.edit', $list->id)}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{route('admin.page.delete', $list->id)}}" data-bs-toggle="tooltip"
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
