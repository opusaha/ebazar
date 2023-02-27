@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin Sponsor's</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Sponsor's</h2>
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
                                    <a href="{{ route('admin.sponsor.create') }}" class="btn btn-gray">New Sponsor</a>
                                </div>
                            </div>
                        </div>
                        <div class="sponsor_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sponsors as $key => $sponsor)
                                        <tr>
                                            <td scope="row">#{{ $key + 1 }}</td>
                                            <td scope="row"><img src="{{ asset($sponsor->logo) }}"
                                                    alt="{{ $sponsor->name }}"></td>
                                            <td>{{ $sponsor->name }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.sponsor.edit', $sponsor->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.sponsor.delete', $sponsor->id) }}"
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
        @include('admin.layout.footer')
    </div>
@endsection
