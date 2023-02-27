@extends('admin.layout.master')
@section('content')
    @push('adminStyles')
    @php $settings = \App\Models\WebsiteSettings::first(); @endphp
    <title>{{$settings->name}} :: Admin WebSettings</title>
    @endpush
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-gmart-gray">
            <div class="row pb50">
                <div class="col-lg-12">
                    <div class="dashboard_title_area">
                        <h2>Web Settings</h2>
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
                                    @if (count(App\Models\WebsiteSettings::get()) == 0)
                                        <a href="{{ route('admin.webSettings.create') }}" class="btn btn-gray">Web
                                            Settings</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="Web Settings_table table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Facebook</th>
                                        <th scope="col">Twitter</th>
                                    </tr>
                                </thead>
                                @isset($setting)
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset($setting->logo) }}" alt="" height="80"
                                                    width="80"></td>
                                            <td>{{ $setting->phone }}</td>
                                            <td>{{ $setting->email }}</td>
                                            <td>{{ $setting->facebook }}</td>
                                            <td>{{ $setting->twitter }}</td>
                                        </tr>
                                    </tbody>
                                @endisset
                                <thead class="table-light">
                                    <tr>
                                        <td scope="col">Instagram</td>
                                        <td scope="col">LinkedIn</td>
                                        <td scope="col">App One</td>
                                        <td scope="col">App Two</td>
                                        <td scope="col">Action</td>
                                    </tr>
                                </thead>
                                @isset($setting)
                                    <tbody>
                                        <tr>
                                            <td>{{ $setting->instagram }}</td>
                                            <td>{{ $setting->linkedIn }}</td>
                                            <td>{{ $setting->app_one }}</td>
                                            <td>{{ $setting->app_two }}</td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.webSettings.edit', $setting->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Edit" aria-label="View"><span
                                                                class="flaticon-pencil"></span></a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('admin.webSettings.delete', $setting->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                            data-bs-original-title="Delete" aria-label="Edit"><span
                                                                class="flaticon-delete"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endisset
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
@endsection
